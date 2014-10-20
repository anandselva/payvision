<?php
/**
 * File for class PayvisionBasicOperationsServicePayment
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServicePayment originally named Payment
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServicePayment extends PayvisionBasicOperationsWsdlClass
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
	 * Method to call the operation originally named Payment
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructPayment::getMemberId()
	 * @uses PayvisionBasicOperationsStructPayment::getCountryId()
	 * @uses PayvisionBasicOperationsStructPayment::getAmount()
	 * @uses PayvisionBasicOperationsStructPayment::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructPayment::getCardExpiryMonth()
	 * @uses PayvisionBasicOperationsStructPayment::getCardExpiryYear()
	 * @uses PayvisionBasicOperationsStructPayment::getMerchantAccountType()
	 * @uses PayvisionBasicOperationsStructPayment::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructPayment::getTrackingMemberCode()
	 * @uses PayvisionBasicOperationsStructPayment::getCardNumber()
	 * @uses PayvisionBasicOperationsStructPayment::getCardHolder()
	 * @uses PayvisionBasicOperationsStructPayment::getCardCvv()
	 * @uses PayvisionBasicOperationsStructPayment::getCardType()
	 * @uses PayvisionBasicOperationsStructPayment::getIssueNumber()
	 * @uses PayvisionBasicOperationsStructPayment::getDynamicDescriptor()
	 * @uses PayvisionBasicOperationsStructPayment::getAvsAddress()
	 * @uses PayvisionBasicOperationsStructPayment::getAvsZip()
	 * @param PayvisionBasicOperationsStructPayment $_payvisionBasicOperationsStructPayment
	 * @return PayvisionBasicOperationsStructPaymentResponse
	 */
	public function Payment(PayvisionBasicOperationsStructPayment $_payvisionBasicOperationsStructPayment)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructPaymentResponse(self::getSoapClient()->Payment(array('memberId'=>$_payvisionBasicOperationsStructPayment->getMemberId(),'countryId'=>$_payvisionBasicOperationsStructPayment->getCountryId(),'amount'=>$_payvisionBasicOperationsStructPayment->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructPayment->getCurrencyId(),'cardExpiryMonth'=>$_payvisionBasicOperationsStructPayment->getCardExpiryMonth(),'cardExpiryYear'=>$_payvisionBasicOperationsStructPayment->getCardExpiryYear(),'merchantAccountType'=>$_payvisionBasicOperationsStructPayment->getMerchantAccountType(),'memberGuid'=>$_payvisionBasicOperationsStructPayment->getMemberGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructPayment->getTrackingMemberCode(),'cardNumber'=>$_payvisionBasicOperationsStructPayment->getCardNumber(),'cardHolder'=>$_payvisionBasicOperationsStructPayment->getCardHolder(),'cardCvv'=>$_payvisionBasicOperationsStructPayment->getCardCvv(),'cardType'=>$_payvisionBasicOperationsStructPayment->getCardType(),'issueNumber'=>$_payvisionBasicOperationsStructPayment->getIssueNumber(),'dynamicDescriptor'=>$_payvisionBasicOperationsStructPayment->getDynamicDescriptor(),'avsAddress'=>$_payvisionBasicOperationsStructPayment->getAvsAddress(),'avsZip'=>$_payvisionBasicOperationsStructPayment->getAvsZip()))));
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
	 * @return PayvisionBasicOperationsStructPaymentResponse
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