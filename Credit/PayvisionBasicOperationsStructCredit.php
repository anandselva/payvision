<?php
/**
 * File for class PayvisionBasicOperationsStructCredit
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCredit originally named Credit
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCredit extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The memberId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $memberId;
	/**
	 * The countryId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $countryId;
	/**
	 * The amount
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var decimal
	 */
	public $amount;
	/**
	 * The currencyId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $currencyId;
	/**
	 * The cardExpiryMonth
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var unsignedByte
	 */
	public $cardExpiryMonth;
	/**
	 * The cardExpiryYear
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var short
	 */
	public $cardExpiryYear;
	/**
	 * The merchantAccountType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $merchantAccountType;
	/**
	 * The memberGuid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $memberGuid;
	/**
	 * The trackingMemberCode
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $trackingMemberCode;
	/**
	 * The cardNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cardNumber;
	/**
	 * The cardHolder
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cardHolder;
	/**
	 * The cardCvv
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cardCvv;
	/**
	 * The cardType
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $cardType;
	/**
	 * The issueNumber
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $issueNumber;
	/**
	 * The dynamicDescriptor
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $dynamicDescriptor;
	/**
	 * The avsAddress
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $avsAddress;
	/**
	 * The avsZip
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $avsZip;
	/**
	 * Constructor method for Credit
	 * @see parent::__construct()
	 * @param int $_memberId
	 * @param int $_countryId
	 * @param decimal $_amount
	 * @param int $_currencyId
	 * @param unsignedByte $_cardExpiryMonth
	 * @param short $_cardExpiryYear
	 * @param int $_merchantAccountType
	 * @param string $_memberGuid
	 * @param string $_trackingMemberCode
	 * @param string $_cardNumber
	 * @param string $_cardHolder
	 * @param string $_cardCvv
	 * @param string $_cardType
	 * @param string $_issueNumber
	 * @param string $_dynamicDescriptor
	 * @param string $_avsAddress
	 * @param string $_avsZip
	 * @return PayvisionBasicOperationsStructCredit
	 */
	public function __construct($_memberId,$_countryId,$_amount,$_currencyId,$_cardExpiryMonth,$_cardExpiryYear,$_merchantAccountType,$_memberGuid = NULL,$_trackingMemberCode = NULL,$_cardNumber = NULL,$_cardHolder = NULL,$_cardCvv = NULL,$_cardType = NULL,$_issueNumber = NULL,$_dynamicDescriptor = NULL,$_avsAddress = NULL,$_avsZip = NULL)
	{
		parent::__construct(array('memberId'=>$_memberId,'countryId'=>$_countryId,'amount'=>$_amount,'currencyId'=>$_currencyId,'cardExpiryMonth'=>$_cardExpiryMonth,'cardExpiryYear'=>$_cardExpiryYear,'merchantAccountType'=>$_merchantAccountType,'memberGuid'=>$_memberGuid,'trackingMemberCode'=>$_trackingMemberCode,'cardNumber'=>$_cardNumber,'cardHolder'=>$_cardHolder,'cardCvv'=>$_cardCvv,'cardType'=>$_cardType,'issueNumber'=>$_issueNumber,'dynamicDescriptor'=>$_dynamicDescriptor,'avsAddress'=>$_avsAddress,'avsZip'=>$_avsZip));
	}
	/**
	 * Get memberId value
	 * @return int
	 */
	public function getMemberId()
	{
		return $this->memberId;
	}
	/**
	 * Set memberId value
	 * @param int $_memberId the memberId
	 * @return int
	 */
	public function setMemberId($_memberId)
	{
		return ($this->memberId = $_memberId);
	}
	/**
	 * Get countryId value
	 * @return int
	 */
	public function getCountryId()
	{
		return $this->countryId;
	}
	/**
	 * Set countryId value
	 * @param int $_countryId the countryId
	 * @return int
	 */
	public function setCountryId($_countryId)
	{
		return ($this->countryId = $_countryId);
	}
	/**
	 * Get amount value
	 * @return decimal
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set amount value
	 * @param decimal $_amount the amount
	 * @return decimal
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Get currencyId value
	 * @return int
	 */
	public function getCurrencyId()
	{
		return $this->currencyId;
	}
	/**
	 * Set currencyId value
	 * @param int $_currencyId the currencyId
	 * @return int
	 */
	public function setCurrencyId($_currencyId)
	{
		return ($this->currencyId = $_currencyId);
	}
	/**
	 * Get cardExpiryMonth value
	 * @return unsignedByte
	 */
	public function getCardExpiryMonth()
	{
		return $this->cardExpiryMonth;
	}
	/**
	 * Set cardExpiryMonth value
	 * @param unsignedByte $_cardExpiryMonth the cardExpiryMonth
	 * @return unsignedByte
	 */
	public function setCardExpiryMonth($_cardExpiryMonth)
	{
		return ($this->cardExpiryMonth = $_cardExpiryMonth);
	}
	/**
	 * Get cardExpiryYear value
	 * @return short
	 */
	public function getCardExpiryYear()
	{
		return $this->cardExpiryYear;
	}
	/**
	 * Set cardExpiryYear value
	 * @param short $_cardExpiryYear the cardExpiryYear
	 * @return short
	 */
	public function setCardExpiryYear($_cardExpiryYear)
	{
		return ($this->cardExpiryYear = $_cardExpiryYear);
	}
	/**
	 * Get merchantAccountType value
	 * @return int
	 */
	public function getMerchantAccountType()
	{
		return $this->merchantAccountType;
	}
	/**
	 * Set merchantAccountType value
	 * @param int $_merchantAccountType the merchantAccountType
	 * @return int
	 */
	public function setMerchantAccountType($_merchantAccountType)
	{
		return ($this->merchantAccountType = $_merchantAccountType);
	}
	/**
	 * Get memberGuid value
	 * @return string|null
	 */
	public function getMemberGuid()
	{
		return $this->memberGuid;
	}
	/**
	 * Set memberGuid value
	 * @param string $_memberGuid the memberGuid
	 * @return string
	 */
	public function setMemberGuid($_memberGuid)
	{
		return ($this->memberGuid = $_memberGuid);
	}
	/**
	 * Get trackingMemberCode value
	 * @return string|null
	 */
	public function getTrackingMemberCode()
	{
		return $this->trackingMemberCode;
	}
	/**
	 * Set trackingMemberCode value
	 * @param string $_trackingMemberCode the trackingMemberCode
	 * @return string
	 */
	public function setTrackingMemberCode($_trackingMemberCode)
	{
		return ($this->trackingMemberCode = $_trackingMemberCode);
	}
	/**
	 * Get cardNumber value
	 * @return string|null
	 */
	public function getCardNumber()
	{
		return $this->cardNumber;
	}
	/**
	 * Set cardNumber value
	 * @param string $_cardNumber the cardNumber
	 * @return string
	 */
	public function setCardNumber($_cardNumber)
	{
		return ($this->cardNumber = $_cardNumber);
	}
	/**
	 * Get cardHolder value
	 * @return string|null
	 */
	public function getCardHolder()
	{
		return $this->cardHolder;
	}
	/**
	 * Set cardHolder value
	 * @param string $_cardHolder the cardHolder
	 * @return string
	 */
	public function setCardHolder($_cardHolder)
	{
		return ($this->cardHolder = $_cardHolder);
	}
	/**
	 * Get cardCvv value
	 * @return string|null
	 */
	public function getCardCvv()
	{
		return $this->cardCvv;
	}
	/**
	 * Set cardCvv value
	 * @param string $_cardCvv the cardCvv
	 * @return string
	 */
	public function setCardCvv($_cardCvv)
	{
		return ($this->cardCvv = $_cardCvv);
	}
	/**
	 * Get cardType value
	 * @return string|null
	 */
	public function getCardType()
	{
		return $this->cardType;
	}
	/**
	 * Set cardType value
	 * @param string $_cardType the cardType
	 * @return string
	 */
	public function setCardType($_cardType)
	{
		return ($this->cardType = $_cardType);
	}
	/**
	 * Get issueNumber value
	 * @return string|null
	 */
	public function getIssueNumber()
	{
		return $this->issueNumber;
	}
	/**
	 * Set issueNumber value
	 * @param string $_issueNumber the issueNumber
	 * @return string
	 */
	public function setIssueNumber($_issueNumber)
	{
		return ($this->issueNumber = $_issueNumber);
	}
	/**
	 * Get dynamicDescriptor value
	 * @return string|null
	 */
	public function getDynamicDescriptor()
	{
		return $this->dynamicDescriptor;
	}
	/**
	 * Set dynamicDescriptor value
	 * @param string $_dynamicDescriptor the dynamicDescriptor
	 * @return string
	 */
	public function setDynamicDescriptor($_dynamicDescriptor)
	{
		return ($this->dynamicDescriptor = $_dynamicDescriptor);
	}
	/**
	 * Get avsAddress value
	 * @return string|null
	 */
	public function getAvsAddress()
	{
		return $this->avsAddress;
	}
	/**
	 * Set avsAddress value
	 * @param string $_avsAddress the avsAddress
	 * @return string
	 */
	public function setAvsAddress($_avsAddress)
	{
		return ($this->avsAddress = $_avsAddress);
	}
	/**
	 * Get avsZip value
	 * @return string|null
	 */
	public function getAvsZip()
	{
		return $this->avsZip;
	}
	/**
	 * Set avsZip value
	 * @param string $_avsZip the avsZip
	 * @return string
	 */
	public function setAvsZip($_avsZip)
	{
		return ($this->avsZip = $_avsZip);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCredit
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>