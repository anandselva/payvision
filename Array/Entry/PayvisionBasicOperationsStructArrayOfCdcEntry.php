<?php
/**
 * File for class PayvisionBasicOperationsStructArrayOfCdcEntry
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsStructArrayOfCdcEntry originally named ArrayOfCdcEntry
 * Meta informations extracted from the WSDL
 * - from schema : https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsStructArrayOfCdcEntry extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * The CdcEntry
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var PayvisionBasicOperationsStructCdcEntry
	 */
	public $CdcEntry;
	/**
	 * Constructor method for ArrayOfCdcEntry
	 * @see parent::__construct()
	 * @param PayvisionBasicOperationsStructCdcEntry $_cdcEntry
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntry
	 */
	public function __construct($_cdcEntry = NULL)
	{
		parent::__construct(array('CdcEntry'=>$_cdcEntry));
	}
	/**
	 * Get CdcEntry value
	 * @return PayvisionBasicOperationsStructCdcEntry|null
	 */
	public function getCdcEntry()
	{
		return $this->CdcEntry;
	}
	/**
	 * Set CdcEntry value
	 * @param PayvisionBasicOperationsStructCdcEntry $_cdcEntry the CdcEntry
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function setCdcEntry($_cdcEntry)
	{
		return ($this->CdcEntry = $_cdcEntry);
	}
	/**
	 * Returns the current element
	 * @see PayvisionBasicOperationsWsdlClass::current()
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see PayvisionBasicOperationsWsdlClass::item()
	 * @param int $_index
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see PayvisionBasicOperationsWsdlClass::first()
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see PayvisionBasicOperationsWsdlClass::last()
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see PayvisionBasicOperationsWsdlClass::last()
	 * @param int $_offset
	 * @return PayvisionBasicOperationsStructCdcEntry
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see PayvisionBasicOperationsWsdlClass::getAttributeName()
	 * @return string CdcEntry
	 */
	public function getAttributeName()
	{
		return 'CdcEntry';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see PayvisionBasicOperationsWsdlClass::__set_state()
	 * @uses PayvisionBasicOperationsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return PayvisionBasicOperationsStructArrayOfCdcEntry
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