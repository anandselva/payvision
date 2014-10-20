<?php
/**
 * File for class PayvisionBasicOperationsServiceCapture
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceCapture originally named Capture
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceCapture extends PayvisionBasicOperationsWsdlClass
{
	/**
	 * Sets the OriginatorHeader SoapHeader param
	 * For more information, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses SoapClient::__setSoapheaders()
	 * @param PayvisionBasicOperationsStructOriginatorHeader $_payvisionBasicOperationsStructOriginatorHeader
	 * @param string $_nameSpace http://payvision.com/gateway/
	 * @param bool $_mustUnderstand
	 * @param string $_actor
	 * @return bool true|false
	 */
	public function setSoapHeaderOriginatorHeader(PayvisionBasicOperationsStructOriginatorHeader $_payvisionBasicOperationsStructOriginatorHeader,$_nameSpace = 'http://payvision.com/gateway/',$_mustUnderstand = false,$_actor = null)
	{
		$defaultHeaders = @self::getSoapClient()->__default_headers;
		if(!is_array($defaultHeaders))
		{
			$defaultHeaders = array();
		}
		else
		{
			foreach($defaultHeaders as $index=>$soapheader)
			{
				if($soapheader->name == 'OriginatorHeader')
				{
					unset($defaultHeaders[$index]);
					break;
				}
			}
			self::getSoapClient()->__setSoapheaders(null);
		}
		if(!empty($_actor))
		{
			array_push($defaultHeaders,new SoapHeader($_nameSpace,'OriginatorHeader',$_payvisionBasicOperationsStructOriginatorHeader,$_mustUnderstand,$_actor));
		}
		else
		{
			array_push($defaultHeaders,new SoapHeader($_nameSpace,'OriginatorHeader',$_payvisionBasicOperationsStructOriginatorHeader,$_mustUnderstand));
		}
		return self::getSoapClient()->__setSoapheaders($defaultHeaders);
	}
	/**
	 * Method to call the operation originally named Capture
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructCapture::getMemberId()
	 * @uses PayvisionBasicOperationsStructCapture::getTransactionId()
	 * @uses PayvisionBasicOperationsStructCapture::getAmount()
	 * @uses PayvisionBasicOperationsStructCapture::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructCapture::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructCapture::getTransactionGuid()
	 * @uses PayvisionBasicOperationsStructCapture::getTrackingMemberCode()
	 * @param PayvisionBasicOperationsStructCapture $_payvisionBasicOperationsStructCapture
	 * @return PayvisionBasicOperationsStructCaptureResponse
	 */
	public function Capture(PayvisionBasicOperationsStructCapture $_payvisionBasicOperationsStructCapture)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructCaptureResponse(self::getSoapClient()->Capture(array('memberId'=>$_payvisionBasicOperationsStructCapture->getMemberId(),'transactionId'=>$_payvisionBasicOperationsStructCapture->getTransactionId(),'amount'=>$_payvisionBasicOperationsStructCapture->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructCapture->getCurrencyId(),'memberGuid'=>$_payvisionBasicOperationsStructCapture->getMemberGuid(),'transactionGuid'=>$_payvisionBasicOperationsStructCapture->getTransactionGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructCapture->getTrackingMemberCode()))));
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
	 * @return PayvisionBasicOperationsStructCaptureResponse
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