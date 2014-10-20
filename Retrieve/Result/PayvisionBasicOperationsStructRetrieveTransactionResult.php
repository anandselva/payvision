<?php
/**
 * File for class PayvisionBasicOperationsStructRetrieveTransactionResult
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructRetrieveTransactionResult originally named RetrieveTransactionResult
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructRetrieveTransactionResult extends PayvisionBasicOperationsWsdlClass
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
	 * The transactionDate
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var dateTime
	 */
	public $transactionDate;
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
	 * Constructor method for RetrieveTransactionResult
	 * @see parent::__construct()
	 * @param int $_memberId
	 * @param dateTime $_transactionDate
	 * @param string $_memberGuid
	 * @param string $_trackingMemberCode
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResult
	 */
	public function __construct($_memberId,$_transactionDate,$_memberGuid = NULL,$_trackingMemberCode = NULL)
	{
		parent::__construct(array('memberId'=>$_memberId,'transactionDate'=>$_transactionDate,'memberGuid'=>$_memberGuid,'trackingMemberCode'=>$_trackingMemberCode));
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
	 * Get transactionDate value
	 * @return dateTime
	 */
	public function getTransactionDate()
	{
		return $this->transactionDate;
	}
	/**
	 * Set transactionDate value
	 * @param dateTime $_transactionDate the transactionDate
	 * @return dateTime
	 */
	public function setTransactionDate($_transactionDate)
	{
		return ($this->transactionDate = $_transactionDate);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResult
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