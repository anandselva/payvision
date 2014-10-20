<?php
/**
 * File for class PayvisionBasicOperationsStructCdcEntryItem
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCdcEntryItem originally named CdcEntryItem
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCdcEntryItem extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The Key
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Key;
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Value;
	/**
	 * Constructor method for CdcEntryItem
	 * @see parent::__construct()
	 * @param string $_key
	 * @param string $_value
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function __construct($_key = NULL,$_value = NULL)
	{
		parent::__construct(array('Key'=>$_key,'Value'=>$_value));
	}
	/**
	 * Get Key value
	 * @return string|null
	 */
	public function getKey()
	{
		return $this->Key;
	}
	/**
	 * Set Key value
	 * @param string $_key the Key
	 * @return string
	 */
	public function setKey($_key)
	{
		return ($this->Key = $_key);
	}
	/**
	 * Get Value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param string $_value the Value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCdcEntryItem
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