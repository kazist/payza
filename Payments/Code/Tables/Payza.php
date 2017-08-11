<?php

namespace Payza\Payments\Payza\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payza
 *
 * @ORM\Table(name="finance_payments_payza", indexes={@ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Payza extends \Kazist\Table\BaseTable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_securitycode", type="string", length=255, nullable=true)
     */
    protected $ap_securitycode;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_merchant", type="string", length=255, nullable=true)
     */
    protected $ap_merchant;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_status", type="string", length=255, nullable=true)
     */
    protected $ap_status;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_test", type="string", length=255, nullable=true)
     */
    protected $ap_test;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_purchasetype", type="string", length=255, nullable=true)
     */
    protected $ap_purchasetype;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_totalamount", type="string", length=255, nullable=true)
     */
    protected $ap_totalamount;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_referencenumber", type="string", length=255, nullable=true)
     */
    protected $ap_referencenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_currency", type="string", length=255, nullable=true)
     */
    protected $ap_currency;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_transactiondate", type="string", length=255, nullable=true)
     */
    protected $ap_transactiondate;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_transactiontype", type="string", length=255, nullable=true)
     */
    protected $ap_transactiontype;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custfirstname", type="string", length=255, nullable=true)
     */
    protected $ap_custfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custlastname", type="string", length=255, nullable=true)
     */
    protected $ap_custlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custaddress", type="string", length=255, nullable=true)
     */
    protected $ap_custaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custcity", type="string", length=255, nullable=true)
     */
    protected $ap_custcity;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custstate", type="string", length=255, nullable=true)
     */
    protected $ap_custstate;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custcountry", type="string", length=255, nullable=true)
     */
    protected $ap_custcountry;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custzip", type="string", length=255, nullable=true)
     */
    protected $ap_custzip;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_custemailaddress", type="string", length=255, nullable=true)
     */
    protected $ap_custemailaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_itemname", type="string", length=255, nullable=true)
     */
    protected $ap_itemname;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_itemcode", type="string", length=255, nullable=true)
     */
    protected $ap_itemcode;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_description", type="string", length=255, nullable=true)
     */
    protected $ap_description;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_quantity", type="string", length=255, nullable=true)
     */
    protected $ap_quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_amount", type="string", length=255, nullable=true)
     */
    protected $ap_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_feeamount", type="string", length=255, nullable=true)
     */
    protected $ap_feeamount;

    /**
     * @var string
     *
     * @ORM\Column(name="ap_netamount", type="string", length=255, nullable=false)
     */
    protected $ap_netamount;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=false)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=false)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    protected $date_modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set ap_securitycode
     *
     * @param string $apSecuritycode
     * @return Payza
     */
    public function setApSecuritycode($apSecuritycode) {
        $this->ap_securitycode = $apSecuritycode;

        return $this;
    }

    /**
     * Get ap_securitycode
     *
     * @return string 
     */
    public function getApSecuritycode() {
        return $this->ap_securitycode;
    }

    /**
     * Set ap_merchant
     *
     * @param string $apMerchant
     * @return Payza
     */
    public function setApMerchant($apMerchant) {
        $this->ap_merchant = $apMerchant;

        return $this;
    }

    /**
     * Get ap_merchant
     *
     * @return string 
     */
    public function getApMerchant() {
        return $this->ap_merchant;
    }

    /**
     * Set ap_status
     *
     * @param string $apStatus
     * @return Payza
     */
    public function setApStatus($apStatus) {
        $this->ap_status = $apStatus;

        return $this;
    }

    /**
     * Get ap_status
     *
     * @return string 
     */
    public function getApStatus() {
        return $this->ap_status;
    }

    /**
     * Set ap_test
     *
     * @param string $apTest
     * @return Payza
     */
    public function setApTest($apTest) {
        $this->ap_test = $apTest;

        return $this;
    }

    /**
     * Get ap_test
     *
     * @return string 
     */
    public function getApTest() {
        return $this->ap_test;
    }

    /**
     * Set ap_purchasetype
     *
     * @param string $apPurchasetype
     * @return Payza
     */
    public function setApPurchasetype($apPurchasetype) {
        $this->ap_purchasetype = $apPurchasetype;

        return $this;
    }

    /**
     * Get ap_purchasetype
     *
     * @return string 
     */
    public function getApPurchasetype() {
        return $this->ap_purchasetype;
    }

    /**
     * Set ap_totalamount
     *
     * @param string $apTotalamount
     * @return Payza
     */
    public function setApTotalamount($apTotalamount) {
        $this->ap_totalamount = $apTotalamount;

        return $this;
    }

    /**
     * Get ap_totalamount
     *
     * @return string 
     */
    public function getApTotalamount() {
        return $this->ap_totalamount;
    }

    /**
     * Set ap_referencenumber
     *
     * @param string $apReferencenumber
     * @return Payza
     */
    public function setApReferencenumber($apReferencenumber) {
        $this->ap_referencenumber = $apReferencenumber;

        return $this;
    }

    /**
     * Get ap_referencenumber
     *
     * @return string 
     */
    public function getApReferencenumber() {
        return $this->ap_referencenumber;
    }

    /**
     * Set ap_currency
     *
     * @param string $apCurrency
     * @return Payza
     */
    public function setApCurrency($apCurrency) {
        $this->ap_currency = $apCurrency;

        return $this;
    }

    /**
     * Get ap_currency
     *
     * @return string 
     */
    public function getApCurrency() {
        return $this->ap_currency;
    }

    /**
     * Set ap_transactiondate
     *
     * @param string $apTransactiondate
     * @return Payza
     */
    public function setApTransactiondate($apTransactiondate) {
        $this->ap_transactiondate = $apTransactiondate;

        return $this;
    }

    /**
     * Get ap_transactiondate
     *
     * @return string 
     */
    public function getApTransactiondate() {
        return $this->ap_transactiondate;
    }

    /**
     * Set ap_transactiontype
     *
     * @param string $apTransactiontype
     * @return Payza
     */
    public function setApTransactiontype($apTransactiontype) {
        $this->ap_transactiontype = $apTransactiontype;

        return $this;
    }

    /**
     * Get ap_transactiontype
     *
     * @return string 
     */
    public function getApTransactiontype() {
        return $this->ap_transactiontype;
    }

    /**
     * Set ap_custfirstname
     *
     * @param string $apCustfirstname
     * @return Payza
     */
    public function setApCustfirstname($apCustfirstname) {
        $this->ap_custfirstname = $apCustfirstname;

        return $this;
    }

    /**
     * Get ap_custfirstname
     *
     * @return string 
     */
    public function getApCustfirstname() {
        return $this->ap_custfirstname;
    }

    /**
     * Set ap_custlastname
     *
     * @param string $apCustlastname
     * @return Payza
     */
    public function setApCustlastname($apCustlastname) {
        $this->ap_custlastname = $apCustlastname;

        return $this;
    }

    /**
     * Get ap_custlastname
     *
     * @return string 
     */
    public function getApCustlastname() {
        return $this->ap_custlastname;
    }

    /**
     * Set ap_custaddress
     *
     * @param string $apCustaddress
     * @return Payza
     */
    public function setApCustaddress($apCustaddress) {
        $this->ap_custaddress = $apCustaddress;

        return $this;
    }

    /**
     * Get ap_custaddress
     *
     * @return string 
     */
    public function getApCustaddress() {
        return $this->ap_custaddress;
    }

    /**
     * Set ap_custcity
     *
     * @param string $apCustcity
     * @return Payza
     */
    public function setApCustcity($apCustcity) {
        $this->ap_custcity = $apCustcity;

        return $this;
    }

    /**
     * Get ap_custcity
     *
     * @return string 
     */
    public function getApCustcity() {
        return $this->ap_custcity;
    }

    /**
     * Set ap_custstate
     *
     * @param string $apCuststate
     * @return Payza
     */
    public function setApCuststate($apCuststate) {
        $this->ap_custstate = $apCuststate;

        return $this;
    }

    /**
     * Get ap_custstate
     *
     * @return string 
     */
    public function getApCuststate() {
        return $this->ap_custstate;
    }

    /**
     * Set ap_custcountry
     *
     * @param string $apCustcountry
     * @return Payza
     */
    public function setApCustcountry($apCustcountry) {
        $this->ap_custcountry = $apCustcountry;

        return $this;
    }

    /**
     * Get ap_custcountry
     *
     * @return string 
     */
    public function getApCustcountry() {
        return $this->ap_custcountry;
    }

    /**
     * Set ap_custzip
     *
     * @param string $apCustzip
     * @return Payza
     */
    public function setApCustzip($apCustzip) {
        $this->ap_custzip = $apCustzip;

        return $this;
    }

    /**
     * Get ap_custzip
     *
     * @return string 
     */
    public function getApCustzip() {
        return $this->ap_custzip;
    }

    /**
     * Set ap_custemailaddress
     *
     * @param string $apCustemailaddress
     * @return Payza
     */
    public function setApCustemailaddress($apCustemailaddress) {
        $this->ap_custemailaddress = $apCustemailaddress;

        return $this;
    }

    /**
     * Get ap_custemailaddress
     *
     * @return string 
     */
    public function getApCustemailaddress() {
        return $this->ap_custemailaddress;
    }

    /**
     * Set ap_itemname
     *
     * @param string $apItemname
     * @return Payza
     */
    public function setApItemname($apItemname) {
        $this->ap_itemname = $apItemname;

        return $this;
    }

    /**
     * Get ap_itemname
     *
     * @return string 
     */
    public function getApItemname() {
        return $this->ap_itemname;
    }

    /**
     * Set ap_itemcode
     *
     * @param string $apItemcode
     * @return Payza
     */
    public function setApItemcode($apItemcode) {
        $this->ap_itemcode = $apItemcode;

        return $this;
    }

    /**
     * Get ap_itemcode
     *
     * @return string 
     */
    public function getApItemcode() {
        return $this->ap_itemcode;
    }

    /**
     * Set ap_description
     *
     * @param string $apDescription
     * @return Payza
     */
    public function setApDescription($apDescription) {
        $this->ap_description = $apDescription;

        return $this;
    }

    /**
     * Get ap_description
     *
     * @return string 
     */
    public function getApDescription() {
        return $this->ap_description;
    }

    /**
     * Set ap_quantity
     *
     * @param string $apQuantity
     * @return Payza
     */
    public function setApQuantity($apQuantity) {
        $this->ap_quantity = $apQuantity;

        return $this;
    }

    /**
     * Get ap_quantity
     *
     * @return string 
     */
    public function getApQuantity() {
        return $this->ap_quantity;
    }

    /**
     * Set ap_amount
     *
     * @param string $apAmount
     * @return Payza
     */
    public function setApAmount($apAmount) {
        $this->ap_amount = $apAmount;

        return $this;
    }

    /**
     * Get ap_amount
     *
     * @return string 
     */
    public function getApAmount() {
        return $this->ap_amount;
    }

    /**
     * Set ap_feeamount
     *
     * @param string $apFeeamount
     * @return Payza
     */
    public function setApFeeamount($apFeeamount) {
        $this->ap_feeamount = $apFeeamount;

        return $this;
    }

    /**
     * Get ap_feeamount
     *
     * @return string 
     */
    public function getApFeeamount() {
        return $this->ap_feeamount;
    }

    /**
     * Set ap_netamount
     *
     * @param string $apNetamount
     * @return Payza
     */
    public function setApNetamount($apNetamount) {
        $this->ap_netamount = $apNetamount;

        return $this;
    }

    /**
     * Get ap_netamount
     *
     * @return string 
     */
    public function getApNetamount() {
        return $this->ap_netamount;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy() {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified() {
        return $this->date_modified;
    }

}
