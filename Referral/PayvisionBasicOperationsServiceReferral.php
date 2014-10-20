<?php
/**
 * File for class PayvisionBasicOperationsServiceReferral
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * This class stands for PayvisionBasicOperationsServiceReferral originally named Referral
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsServiceReferral extends PayvisionBasicOperationsWsdlClass
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
	 * Method to call the operation originally named ReferralApproval
	 * Meta informations extracted from the WSDL
	 * - SOAPHeader : required
	 * - SOAPHeaderNames : OriginatorHeader
	 * - SOAPHeaderNamespace : http://payvision.com/gateway/
	 * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::setResult()
	 * @uses PayvisionBasicOperationsWsdlClass::getResult()
	 * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getMemberId()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getTransactionId()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getAmount()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getCurrencyId()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getMemberGuid()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getTransactionGuid()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getTrackingMemberCode()
	 * @uses PayvisionBasicOperationsStructReferralApproval::getApprovalCode()
	 * @param PayvisionBasicOperationsStructReferralApproval $_payvisionBasicOperationsStructReferralApproval
	 * @return PayvisionBasicOperationsStructReferralApprovalResponse
	 */
	public function ReferralApproval(PayvisionBasicOperationsStructReferralApproval $_payvisionBasicOperationsStructReferralApproval)
	{
		try
		{
			$this->setResult(new PayvisionBasicOperationsStructReferralApprovalResponse(self::getSoapClient()->ReferralApproval(array('memberId'=>$_payvisionBasicOperationsStructReferralApproval->getMemberId(),'transactionId'=>$_payvisionBasicOperationsStructReferralApproval->getTransactionId(),'amount'=>$_payvisionBasicOperationsStructReferralApproval->getAmount(),'currencyId'=>$_payvisionBasicOperationsStructReferralApproval->getCurrencyId(),'memberGuid'=>$_payvisionBasicOperationsStructReferralApproval->getMemberGuid(),'transactionGuid'=>$_payvisionBasicOperationsStructReferralApproval->getTransactionGuid(),'trackingMemberCode'=>$_payvisionBasicOperationsStructReferralApproval->getTrackingMemberCode(),'approvalCode'=>$_payvisionBasicOperationsStructReferralApproval->getApprovalCode()))));
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
	 * @return PayvisionBasicOperationsStructReferralApprovalResponse
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