<?php
/**
 * File for class PayvisionBasicOperationsStructCreditResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCreditResponse originally named CreditResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCreditResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The CreditResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $CreditResult;
	/**
	 * Constructor method for CreditResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_creditResult
	 * @return PayvisionBasicOperationsStructCreditResponse
	 */
	public function __construct($_creditResult = NULL)
	{
		parent::__construct(array('CreditResult'=>$_creditResult));
	}
	/**
	 * Get CreditResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getCreditResult()
	{
		return $this->CreditResult;
	}
	/**
	 * Set CreditResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_creditResult the CreditResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setCreditResult($_creditResult)
	{
		return ($this->CreditResult = $_creditResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCreditResponse
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