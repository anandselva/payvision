<?php
/**
 * File for class PayvisionBasicOperationsStructOriginatorHeader
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructOriginatorHeader originally named OriginatorHeader
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructOriginatorHeader extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The OriginatorId
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var int
	 */
	public $OriginatorId;
	/**
	 * Constructor method for OriginatorHeader
	 * @see parent::__construct()
	 * @param int $_originatorId
	 * @return PayvisionBasicOperationsStructOriginatorHeader
	 */
	public function __construct($_originatorId)
	{
		parent::__construct(array('OriginatorId'=>$_originatorId));
	}
	/**
	 * Get OriginatorId value
	 * @return int
	 */
	public function getOriginatorId()
	{
		return $this->OriginatorId;
	}
	/**
	 * Set OriginatorId value
	 * @param int $_originatorId the OriginatorId
	 * @return int
	 */
	public function setOriginatorId($_originatorId)
	{
		return ($this->OriginatorId = $_originatorId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructOriginatorHeader
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