<?php
/**
 * File for class PayvisionBasicOperationsStructCdcEntry
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructCdcEntry originally named CdcEntry
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructCdcEntry extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Items
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var PayvisionBasicOperationsStructArrayOfCdcEntryItem
	 */
	public $Items;
	/**
	 * Constructor method for CdcEntry
	 * @see parent::__construct()
	 * @param string $_name
	 * @param PayvisionBasicOperationsStructArrayOfCdcEntryItem $_items
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function __construct($_name = NULL,$_items = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Items'=>($_items instanceof PayvisionBasicOperationsStructArrayOfCdcEntryItem)?$_items:new PayvisionBasicOperationsStructArrayOfCdcEntryItem($_items)));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Items value
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntryItem|null
	 */
	public function getItems()
	{
		return $this->Items;
	}
	/**
	 * Set Items value
	 * @param PayvisionBasicOperationsStructArrayOfCdcEntryItem $_items the Items
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntryItem
	 */
	public function setItems($_items)
	{
		return ($this->Items = $_items);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructCdcEntry
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