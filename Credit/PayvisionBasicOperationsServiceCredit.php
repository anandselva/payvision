<?php
/**
 * File for class PayvisionBasicOperationsServiceCredit
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceCredit originally named Credit
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceCredit extends PayvisionBasicOperationsWsdlClass
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
	 * Method to call the operation originally named Credit
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructCredit::getMemberId()
	 * @uses PayvisionBasicOperationsStructCredit::getCountryId()
	 * @uses PayvisionBasicOperationsStructCredit::getAmount()
	 * @uses PayvisionBasicOperationsStructCredit::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructCredit::getCardExpiryMonth()
	 * @uses PayvisionBasicOperationsStructCredit::getCardExpiryYear()
	 * @uses PayvisionBasicOperationsStructCredit::getMerchantAccountType()
	 * @uses PayvisionBasicOperationsStructCredit::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructCredit::getTrackingMemberCode()
	 * @uses PayvisionBasicOperationsStructCredit::getCardNumber()
	 * @uses PayvisionBasicOperationsStructCredit::getCardHolder()
	 * @uses PayvisionBasicOperationsStructCredit::getCardCvv()
	 * @uses PayvisionBasicOperationsStructCredit::getCardType()
	 * @uses PayvisionBasicOperationsStructCredit::getIssueNumber()
	 * @uses PayvisionBasicOperationsStructCredit::getDynamicDescriptor()
	 * @uses PayvisionBasicOperationsStructCredit::getAvsAddress()
	 * @uses PayvisionBasicOperationsStructCredit::getAvsZip()
	 * @param PayvisionBasicOperationsStructCredit $_payvisionBasicOperationsStructCredit
	 * @return PayvisionBasicOperationsStructCreditResponse
	 */
	public function Credit(PayvisionBasicOperationsStructCredit $_payvisionBasicOperationsStructCredit)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructCreditResponse(self::getSoapClient()->Credit(array('memberId'=>$_payvisionBasicOperationsStructCredit->getMemberId(),'countryId'=>$_payvisionBasicOperationsStructCredit->getCountryId(),'amount'=>$_payvisionBasicOperationsStructCredit->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructCredit->getCurrencyId(),'cardExpiryMonth'=>$_payvisionBasicOperationsStructCredit->getCardExpiryMonth(),'cardExpiryYear'=>$_payvisionBasicOperationsStructCredit->getCardExpiryYear(),'merchantAccountType'=>$_payvisionBasicOperationsStructCredit->getMerchantAccountType(),'memberGuid'=>$_payvisionBasicOperationsStructCredit->getMemberGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructCredit->getTrackingMemberCode(),'cardNumber'=>$_payvisionBasicOperationsStructCredit->getCardNumber(),'cardHolder'=>$_payvisionBasicOperationsStructCredit->getCardHolder(),'cardCvv'=>$_payvisionBasicOperationsStructCredit->getCardCvv(),'cardType'=>$_payvisionBasicOperationsStructCredit->getCardType(),'issueNumber'=>$_payvisionBasicOperationsStructCredit->getIssueNumber(),'dynamicDescriptor'=>$_payvisionBasicOperationsStructCredit->getDynamicDescriptor(),'avsAddress'=>$_payvisionBasicOperationsStructCredit->getAvsAddress(),'avsZip'=>$_payvisionBasicOperationsStructCredit->getAvsZip()))));
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
	 * @return PayvisionBasicOperationsStructCreditResponse
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