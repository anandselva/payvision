<?php
/**
 * File for class PayvisionBasicOperationsStructVoid
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructVoid originally named Void
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructVoid extends PayvisionBasicOperationsWsdlClass
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
	 * The transactionId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $transactionId;
	/**
	 * The memberGuid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $memberGuid;
	/**
	 * The transactionGuid
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $transactionGuid;
	/**
	 * The trackingMemberCode
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $trackingMemberCode;
	/**
	 * Constructor method for Void
	 * @see parent::__construct()
	 * @param int $_memberId
	 * @param int $_transactionId
	 * @param string $_memberGuid
	 * @param string $_transactionGuid
	 * @param string $_trackingMemberCode
	 * @return PayvisionBasicOperationsStructVoid
	 */
	public function __construct($_memberId,$_transactionId,$_memberGuid = NULL,$_transactionGuid = NULL,$_trackingMemberCode = NULL)
	{
		parent::__construct(array('memberId'=>$_memberId,'transactionId'=>$_transactionId,'memberGuid'=>$_memberGuid,'transactionGuid'=>$_transactionGuid,'trackingMemberCode'=>$_trackingMemberCode));
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
	 * Get transactionId value
	 * @return int
	 */
	public function getTransactionId()
	{
		return $this->transactionId;
	}
	/**
	 * Set transactionId value
	 * @param int $_transactionId the transactionId
	 * @return int
	 */
	public function setTransactionId($_transactionId)
	{
		return ($this->transactionId = $_transactionId);
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
	 * Get transactionGuid value
	 * @return string|null
	 */
	public function getTransactionGuid()
	{
		return $this->transactionGuid;
	}
	/**
	 * Set transactionGuid value
	 * @param string $_transactionGuid the transactionGuid
	 * @return string
	 */
	public function setTransactionGuid($_transactionGuid)
	{
		return ($this->transactionGuid = $_transactionGuid);
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
	 * @return PayvisionBasicOperationsStructVoid
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