<?php
/**
 * File for class PayvisionBasicOperationsStructCaptureResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCaptureResponse originally named CaptureResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCaptureResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The CaptureResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $CaptureResult;
	/**
	 * Constructor method for CaptureResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_captureResult
	 * @return PayvisionBasicOperationsStructCaptureResponse
	 */
	public function __construct($_captureResult = NULL)
	{
		parent::__construct(array('CaptureResult'=>$_captureResult));
	}
	/**
	 * Get CaptureResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getCaptureResult()
	{
		return $this->CaptureResult;
	}
	/**
	 * Set CaptureResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_captureResult the CaptureResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setCaptureResult($_captureResult)
	{
		return ($this->CaptureResult = $_captureResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCaptureResponse
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