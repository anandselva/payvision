<?php
/**
 * File for class PayvisionBasicOperationsServiceRetrieve
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceRetrieve originally named Retrieve
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceRetrieve extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * Method to call the operation originally named RetrieveTransactionResult
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructRetrieveTransactionResult::getMemberId()
	 * @uses PayvisionBasicOperationsStructRetrieveTransactionResult::getTransactionDate()
	 * @uses PayvisionBasicOperationsStructRetrieveTransactionResult::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructRetrieveTransactionResult::getTrackingMemberCode()
	 * @param PayvisionBasicOperationsStructRetrieveTransactionResult $_payvisionBasicOperationsStructRetrieveTransactionResult
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
	 */
	public function RetrieveTransactionResult(PayvisionBasicOperationsStructRetrieveTransactionResult $_payvisionBasicOperationsStructRetrieveTransactionResult)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructRetrieveTransactionResultResponse(self::getSoapClient()->RetrieveTransactionResult(array('memberId'=>$_payvisionBasicOperationsStructRetrieveTransactionResult->getMemberId(),'transactionDate'=>$_payvisionBasicOperationsStructRetrieveTransactionResult->getTransactionDate(),'memberGuid'=>$_payvisionBasicOperationsStructRetrieveTransactionResult->getMemberGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructRetrieveTransactionResult->getTrackingMemberCode()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see PayvisionBasicOperationsWsdlClass::getResult()
	 * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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