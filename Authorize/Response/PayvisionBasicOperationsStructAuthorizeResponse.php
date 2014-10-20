<?php
/**
 * File for class PayvisionBasicOperationsStructAuthorizeResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructAuthorizeResponse originally named AuthorizeResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructAuthorizeResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The AuthorizeResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $AuthorizeResult;
	/**
	 * Constructor method for AuthorizeResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_authorizeResult
	 * @return PayvisionBasicOperationsStructAuthorizeResponse
	 */
	public function __construct($_authorizeResult = NULL)
	{
		parent::__construct(array('AuthorizeResult'=>$_authorizeResult));
	}
	/**
	 * Get AuthorizeResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getAuthorizeResult()
	{
		return $this->AuthorizeResult;
	}
	/**
	 * Set AuthorizeResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_authorizeResult the AuthorizeResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setAuthorizeResult($_authorizeResult)
	{
		return ($this->AuthorizeResult = $_authorizeResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructAuthorizeResponse
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