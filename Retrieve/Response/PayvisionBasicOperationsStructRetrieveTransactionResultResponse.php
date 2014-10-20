<?php
/**
 * File for class PayvisionBasicOperationsStructRetrieveTransactionResultResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructRetrieveTransactionResultResponse originally named RetrieveTransactionResultResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructRetrieveTransactionResultResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The RetrieveTransactionResultResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $RetrieveTransactionResultResult;
	/**
	 * Constructor method for RetrieveTransactionResultResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_retrieveTransactionResultResult
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
	 */
	public function __construct($_retrieveTransactionResultResult = NULL)
	{
		parent::__construct(array('RetrieveTransactionResultResult'=>$_retrieveTransactionResultResult));
	}
	/**
	 * Get RetrieveTransactionResultResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getRetrieveTransactionResultResult()
	{
		return $this->RetrieveTransactionResultResult;
	}
	/**
	 * Set RetrieveTransactionResultResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_retrieveTransactionResultResult the RetrieveTransactionResultResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setRetrieveTransactionResultResult($_retrieveTransactionResultResult)
	{
		return ($this->RetrieveTransactionResultResult = $_retrieveTransactionResultResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
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