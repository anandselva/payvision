<?php
/**
 * File for class PayvisionBasicOperationsServiceCard
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceCard originally named Card
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceCard extends PayvisionBasicOperationsWsdlClass
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
	 * Method to call the operation originally named CardFundTransfer
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getMemberId()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCountryId()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getAmount()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardExpiryMonth()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardExpiryYear()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getMerchantAccountType()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getTrackingMemberCode()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardNumber()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardHolder()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardCvv()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getCardType()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getIssueNumber()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getDynamicDescriptor()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getAvsAddress()
	 * @uses PayvisionBasicOperationsStructCardFundTransfer::getAvsZip()
	 * @param PayvisionBasicOperationsStructCardFundTransfer $_payvisionBasicOperationsStructCardFundTransfer
	 * @return PayvisionBasicOperationsStructCardFundTransferResponse
	 */
	public function CardFundTransfer(PayvisionBasicOperationsStructCardFundTransfer $_payvisionBasicOperationsStructCardFundTransfer)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructCardFundTransferResponse(self::getSoapClient()->CardFundTransfer(array('memberId'=>$_payvisionBasicOperationsStructCardFundTransfer->getMemberId(),'countryId'=>$_payvisionBasicOperationsStructCardFundTransfer->getCountryId(),'amount'=>$_payvisionBasicOperationsStructCardFundTransfer->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructCardFundTransfer->getCurrencyId(),'cardExpiryMonth'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardExpiryMonth(),'cardExpiryYear'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardExpiryYear(),'merchantAccountType'=>$_payvisionBasicOperationsStructCardFundTransfer->getMerchantAccountType(),'memberGuid'=>$_payvisionBasicOperationsStructCardFundTransfer->getMemberGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructCardFundTransfer->getTrackingMemberCode(),'cardNumber'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardNumber(),'cardHolder'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardHolder(),'cardCvv'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardCvv(),'cardType'=>$_payvisionBasicOperationsStructCardFundTransfer->getCardType(),'issueNumber'=>$_payvisionBasicOperationsStructCardFundTransfer->getIssueNumber(),'dynamicDescriptor'=>$_payvisionBasicOperationsStructCardFundTransfer->getDynamicDescriptor(),'avsAddress'=>$_payvisionBasicOperationsStructCardFundTransfer->getAvsAddress(),'avsZip'=>$_payvisionBasicOperationsStructCardFundTransfer->getAvsZip()))));
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
	 * @return PayvisionBasicOperationsStructCardFundTransferResponse
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