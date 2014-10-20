<?php
/**
 * File for class PayvisionBasicOperationsStructReferralApprovalResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructReferralApprovalResponse originally named ReferralApprovalResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructReferralApprovalResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The ReferralApprovalResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $ReferralApprovalResult;
	/**
	 * Constructor method for ReferralApprovalResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_referralApprovalResult
	 * @return PayvisionBasicOperationsStructReferralApprovalResponse
	 */
	public function __construct($_referralApprovalResult = NULL)
	{
		parent::__construct(array('ReferralApprovalResult'=>$_referralApprovalResult));
	}
	/**
	 * Get ReferralApprovalResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getReferralApprovalResult()
	{
		return $this->ReferralApprovalResult;
	}
	/**
	 * Set ReferralApprovalResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_referralApprovalResult the ReferralApprovalResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setReferralApprovalResult($_referralApprovalResult)
	{
		return ($this->ReferralApprovalResult = $_referralApprovalResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructReferralApprovalResponse
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