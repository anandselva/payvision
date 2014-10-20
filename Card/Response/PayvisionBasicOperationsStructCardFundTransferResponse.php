<?php
/**
 * File for class PayvisionBasicOperationsStructCardFundTransferResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCardFundTransferResponse originally named CardFundTransferResponse
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCardFundTransferResponse extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The CardFundTransferResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructTransactionResult
	 */
	public $CardFundTransferResult;
	/**
	 * Constructor method for CardFundTransferResponse
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructTransactionResult $_cardFundTransferResult
	 * @return PayvisionBasicOperationsStructCardFundTransferResponse
	 */
	public function __construct($_cardFundTransferResult = NULL)
	{
		parent::__construct(array('CardFundTransferResult'=>$_cardFundTransferResult));
	}
	/**
	 * Get CardFundTransferResult value
	 * @return PayvisionBasicOperationsStructTransactionResult|null
	 */
	public function getCardFundTransferResult()
	{
		return $this->CardFundTransferResult;
	}
	/**
	 * Set CardFundTransferResult value
	 * @param PayvisionBasicOperationsStructTransactionResult $_cardFundTransferResult the CardFundTransferResult
	 * @return PayvisionBasicOperationsStructTransactionResult
	 */
	public function setCardFundTransferResult($_cardFundTransferResult)
	{
		return ($this->CardFundTransferResult = $_cardFundTransferResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCardFundTransferResponse
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