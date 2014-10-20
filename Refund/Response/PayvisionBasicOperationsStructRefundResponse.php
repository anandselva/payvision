<?php
/**
 * File for class PayvisionBasicOperationsStructRefundResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructRefundResponse originally named RefundResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructRefundResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The RefundResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $RefundResult;
	/**
	 * Constructor method for RefundResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_refundResult
	 * @return PayvisionBasicOperationsStructRefundResponse
	 */
	public function __construct($_refundResult = NULL)
	{
		parent::__construct(array('RefundResult'=>$_refundResult));
	}
	/**
	 * Get RefundResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getRefundResult()
	{
		return $this->RefundResult;
	}
	/**
	 * Set RefundResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_refundResult the RefundResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setRefundResult($_refundResult)
	{
		return ($this->RefundResult = $_refundResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructRefundResponse
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