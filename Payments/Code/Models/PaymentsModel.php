<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Payza\Payments\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Payments\Payments\Code\Models\PaymentsModel AS BasePaymentsModel;

/**
 * Description of MarketplaceModel
 *
 * @author sbc
 */
class PaymentsModel extends BasePaymentsModel {

    public function appendSearchQuery($query) {

        $this->ingore_search_query = true;
        return parent:: appendSearchQuery($query);
    }

    public function notificationTransaction($payment_id) {

        $posted_data = $this->getIpayPayza();

        $payment = $this->getPaymentById($payment_id);
        $deductions = json_decode($payment->deductions);
        $required_amount = (isset($deductions->amount) && $deductions->amount) ? $deductions->amount : $payment->amount;
        $paid_amount = (isset($posted_data['ap_amount']) && $posted_data['ap_amount']) ? $posted_data['ap_amount'] : 0;

        $payment->code = $posted_data['ap_securitycode'];
        $payment->receipt_no = $payment->receipt_no;
        $payment->type = 'payza';

        $ap_merchant = $this->getGatewayParameter($payment->gateway_id, 'ap_merchant');
        $ap_securitycode = $this->getGatewayParameter($payment->gateway_id, 'ap_securitycode');

        if ($posted_data['ap_merchant'] != $ap_merchant) {
            
        } else {
            //Check if the security code matches
            if ($posted_data['ap_securitycode'] != $ap_securitycode) {
                // The data is NOT sent by Payza.
                // Take appropriate action.
            } else {
                if ($posted_data['ap_status'] == "Success" || $posted_data['ap_status'] == "Subscription-Payment-Success") {

                    parent::savePaidAmount($payment, $required_amount, $paid_amount);

                    if ($paid_amount >= $required_amount) {

                        $gateway = $this->getGatewayByName('token');
                        parent::successfulTransaction($payment_id);
                    } else {
                        parent::failTransaction($payment_id);
                    }
                } elseif ($posted_data['ap_status'] == "Subscription-Payment-Failed" || $posted_data['ap_status'] == "Subscription-Payment-Rescheduled" || $posted_data['ap_status'] == "Subscription-Canceled") {
                    parent::invalidTransaction($payment_id);
                } else {
                    parent::pendingTransaction($payment_id);
                }
            }
        }
    }

    public function completeTransaction($payment_id) {
        $this->notificationTransaction($payment_id);
    }

    public function cancelTransaction($payment_id) {
        parent::cancelTransaction($payment_id);
    }

    private function getIpayPayza() {

        $factory = new KazistFactory();


        $posted_data['ap_securitycode'] = $this->request->request->get('ap_securitycode');
        $posted_data['ap_merchant'] = $this->request->request->get('ap_merchant');
        $posted_data['ap_status'] = $this->request->request->get('ap_status');
        $posted_data['ap_test'] = $this->request->request->get('ap_test');
        $posted_data['ap_purchasetype'] = $this->request->request->get('ap_purchasetype');
        $posted_data['ap_totalamount'] = $this->request->request->get('ap_totalamount');
        $posted_data['ap_feeamount'] = $this->request->request->get('ap_feeamount');
        $posted_data['ap_netamount'] = $this->request->request->get('ap_netamount');
        $posted_data['ap_referencenumber'] = $this->request->request->get('ap_referencenumber');
        $posted_data['ap_currency'] = $this->request->request->get('ap_currency');
        $posted_data['ap_transactiondate'] = $this->request->request->get('ap_transactiondate');
        $posted_data['ap_transactiontype'] = $this->request->request->get('ap_transactiontype');

        //Setting the customer's information from the IPN post variables
        $posted_data['ap_custfirstname'] = $this->request->request->get('ap_custfirstname');
        $posted_data['ap_custlastname'] = $this->request->request->get('ap_custlastname');
        $posted_data['ap_custaddress'] = $this->request->request->get('ap_custaddress');
        $posted_data['ap_custcity'] = $this->request->request->get('ap_custcity');
        $posted_data['ap_custstate'] = $this->request->request->get('ap_custstate');
        $posted_data['ap_custcountry'] = $this->request->request->get('ap_custcountry');
        $posted_data['ap_custzip'] = $this->request->request->get('ap_custzip');
        $posted_data['ap_custemailaddress'] = $this->request->request->get('ap_custemailaddress');

        //Setting information about the purchased item from the IPN post variables
        $posted_data['ap_itemname'] = $this->request->request->get('ap_itemname');
        $posted_data['ap_itemcode'] = $this->request->request->get('ap_itemcode');
        $posted_data['ap_description'] = $this->request->request->get('ap_description');
        $posted_data['ap_quantity'] = $this->request->request->get('ap_quantity');
        $posted_data['ap_amount'] = $this->request->request->get('ap_amount');

        return $posted_data;
    }

}
