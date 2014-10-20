<?php
/**
 * File for class PayvisionBasicOperationsStructVoidResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructVoidResponse originally named VoidResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructVoidResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The VoidResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $VoidResult;
	/**
	 * Constructor method for VoidResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_voidResult
	 * @return PayvisionBasicOperationsStructVoidResponse
	 */
	public function __construct($_voidResult = NULL)
	{
		parent::__construct(array('VoidResult'=>$_voidResult));
	}
	/**
	 * Get VoidResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getVoidResult()
	{
		return $this->VoidResult;
	}
	/**
	 * Set VoidResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_voidResult the VoidResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setVoidResult($_voidResult)
	{
		return ($this->VoidResult = $_voidResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructVoidResponse
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