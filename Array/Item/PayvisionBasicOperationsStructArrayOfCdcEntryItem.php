<?php
/**
 * File for class PayvisionBasicOperationsStructArrayOfCdcEntryItem
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructArrayOfCdcEntryItem originally named ArrayOfCdcEntryItem
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructArrayOfCdcEntryItem extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The CdcEntryItem
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var PayvisionBasicOperationsStructCdcEntryItem
	 */
	public $CdcEntryItem;
	/**
	 * Constructor method for ArrayOfCdcEntryItem
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructCdcEntryItem $_cdcEntryItem
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntryItem
	 */
	public function __construct($_cdcEntryItem = NULL)
	{
		parent::__construct(array('CdcEntryItem'=>$_cdcEntryItem));
	}
	/**
	 * Get CdcEntryItem value
	 * @return PayvisionBasicOperationsStructCdcEntryItem|null
	 */
	public function getCdcEntryItem()
	{
		return $this->CdcEntryItem;
	}
	/**
	 * Set CdcEntryItem value
	 * @param PayvisionBasicOperationsStructCdcEntryItem $_cdcEntryItem the CdcEntryItem
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function setCdcEntryItem($_cdcEntryItem)
	{
		return ($this->CdcEntryItem = $_cdcEntryItem);
	}
	/**
	 * Returns the current element
	 * @see PayvisionBasicOperationsWsdlClass::current()
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see PayvisionBasicOperationsWsdlClass::item()
	 * @param int $_index
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see PayvisionBasicOperationsWsdlClass::first()
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see PayvisionBasicOperationsWsdlClass::last()
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see PayvisionBasicOperationsWsdlClass::last()
	 * @param int $_offset
	 * @return PayvisionBasicOperationsStructCdcEntryItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see PayvisionBasicOperationsWsdlClass::getAttributeName()
	 * @return string CdcEntryItem
	 */
	public function getAttributeName()
	{
		return 'CdcEntryItem';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntryItem
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