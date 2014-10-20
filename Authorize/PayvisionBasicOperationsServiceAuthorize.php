<?php
/**
 * File for class PayvisionBasicOperationsServiceAuthorize
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceAuthorize originally named Authorize
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceAuthorize extends PayvisionBasicOperationsWsdlClass
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
	 * Method to call the operation originally named Authorize
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructAuthorize::getMemberId()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCountryId()
	 * @uses PayvisionBasicOperationsStructAuthorize::getAmount()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardExpiryMonth()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardExpiryYear()
	 * @uses PayvisionBasicOperationsStructAuthorize::getMerchantAccountType()
	 * @uses PayvisionBasicOperationsStructAuthorize::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructAuthorize::getTrackingMemberCode()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardNumber()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardHolder()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardCvv()
	 * @uses PayvisionBasicOperationsStructAuthorize::getCardType()
	 * @uses PayvisionBasicOperationsStructAuthorize::getIssueNumber()
	 * @uses PayvisionBasicOperationsStructAuthorize::getDynamicDescriptor()
	 * @uses PayvisionBasicOperationsStructAuthorize::getAvsAddress()
	 * @uses PayvisionBasicOperationsStructAuthorize::getAvsZip()
	 * @param PayvisionBasicOperationsStructAuthorize $_payvisionBasicOperationsStructAuthorize
	 * @return PayvisionBasicOperationsStructAuthorizeResponse
	 */
	public function Authorize(PayvisionBasicOperationsStructAuthorize $_payvisionBasicOperationsStructAuthorize)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructAuthorizeResponse(self::getSoapClient()->Authorize(array('memberId'=>$_payvisionBasicOperationsStructAuthorize->getMemberId(),'countryId'=>$_payvisionBasicOperationsStructAuthorize->getCountryId(),'amount'=>$_payvisionBasicOperationsStructAuthorize->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructAuthorize->getCurrencyId(),'cardExpiryMonth'=>$_payvisionBasicOperationsStructAuthorize->getCardExpiryMonth(),'cardExpiryYear'=>$_payvisionBasicOperationsStructAuthorize->getCardExpiryYear(),'merchantAccountType'=>$_payvisionBasicOperationsStructAuthorize->getMerchantAccountType(),'memberGuid'=>$_payvisionBasicOperationsStructAuthorize->getMemberGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructAuthorize->getTrackingMemberCode(),'cardNumber'=>$_payvisionBasicOperationsStructAuthorize->getCardNumber(),'cardHolder'=>$_payvisionBasicOperationsStructAuthorize->getCardHolder(),'cardCvv'=>$_payvisionBasicOperationsStructAuthorize->getCardCvv(),'cardType'=>$_payvisionBasicOperationsStructAuthorize->getCardType(),'issueNumber'=>$_payvisionBasicOperationsStructAuthorize->getIssueNumber(),'dynamicDescriptor'=>$_payvisionBasicOperationsStructAuthorize->getDynamicDescriptor(),'avsAddress'=>$_payvisionBasicOperationsStructAuthorize->getAvsAddress(),'avsZip'=>$_payvisionBasicOperationsStructAuthorize->getAvsZip()))));
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
	 * @return PayvisionBasicOperationsStructAuthorizeResponse
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