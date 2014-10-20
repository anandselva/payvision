<?php
/**
 * Test with PayvisionBasicOperations
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PayvisionBasicOperationsAutoload.php';
/**
 * PayvisionBasicOperations Informations
 */
define('PAYVISIONBASICOPERATIONS_WSDL_URL','https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL');
define('PAYVISIONBASICOPERATIONS_USER_LOGIN','');
define('PAYVISIONBASICOPERATIONS_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[PayvisionBasicOperationsWsdlClass::WSDL_URL] = PAYVISIONBASICOPERATIONS_WSDL_URL;
$wsdl[PayvisionBasicOperationsWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[PayvisionBasicOperationsWsdlClass::WSDL_TRACE] = true;
if(PAYVISIONBASICOPERATIONS_USER_LOGIN !== '')
	$wsdl[PayvisionBasicOperationsWsdlClass::WSDL_LOGIN] = PAYVISIONBASICOPERATIONS_USER_LOGIN;
if(PAYVISIONBASICOPERATIONS_USER_PASSWORD !== '')
	$wsdl[PayvisionBasicOperationsWsdlClass::WSDL_PASSWD] = PAYVISIONBASICOPERATIONS_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/******************************************************
 * Example for PayvisionBasicOperationsServiceAuthorize
 */
$payvisionBasicOperationsServiceAuthorize = new PayvisionBasicOperationsServiceAuthorize($wsdl);
// sample call for PayvisionBasicOperationsServiceAuthorize::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceAuthorize->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceAuthorize->getResult());
else
	print_r($payvisionBasicOperationsServiceAuthorize->getLastError());
// sample call for PayvisionBasicOperationsServiceAuthorize::Authorize()
if($payvisionBasicOperationsServiceAuthorize->Authorize(new PayvisionBasicOperationsStructAuthorize(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceAuthorize->getResult());
else
	print_r($payvisionBasicOperationsServiceAuthorize->getLastError());

/****************************************************
 * Example for PayvisionBasicOperationsServicePayment
 */
$payvisionBasicOperationsServicePayment = new PayvisionBasicOperationsServicePayment($wsdl);
// sample call for PayvisionBasicOperationsServicePayment::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServicePayment->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServicePayment->getResult());
else
	print_r($payvisionBasicOperationsServicePayment->getLastError());
// sample call for PayvisionBasicOperationsServicePayment::Payment()
if($payvisionBasicOperationsServicePayment->Payment(new PayvisionBasicOperationsStructPayment(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServicePayment->getResult());
else
	print_r($payvisionBasicOperationsServicePayment->getLastError());

/***************************************************
 * Example for PayvisionBasicOperationsServiceCredit
 */
$payvisionBasicOperationsServiceCredit = new PayvisionBasicOperationsServiceCredit($wsdl);
// sample call for PayvisionBasicOperationsServiceCredit::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceCredit->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceCredit->getResult());
else
	print_r($payvisionBasicOperationsServiceCredit->getLastError());
// sample call for PayvisionBasicOperationsServiceCredit::Credit()
if($payvisionBasicOperationsServiceCredit->Credit(new PayvisionBasicOperationsStructCredit(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceCredit->getResult());
else
	print_r($payvisionBasicOperationsServiceCredit->getLastError());

/***************************************************
 * Example for PayvisionBasicOperationsServiceRefund
 */
$payvisionBasicOperationsServiceRefund = new PayvisionBasicOperationsServiceRefund($wsdl);
// sample call for PayvisionBasicOperationsServiceRefund::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceRefund->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceRefund->getResult());
else
	print_r($payvisionBasicOperationsServiceRefund->getLastError());
// sample call for PayvisionBasicOperationsServiceRefund::Refund()
if($payvisionBasicOperationsServiceRefund->Refund(new PayvisionBasicOperationsStructRefund(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceRefund->getResult());
else
	print_r($payvisionBasicOperationsServiceRefund->getLastError());

/****************************************************
 * Example for PayvisionBasicOperationsServiceCapture
 */
$payvisionBasicOperationsServiceCapture = new PayvisionBasicOperationsServiceCapture($wsdl);
// sample call for PayvisionBasicOperationsServiceCapture::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceCapture->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceCapture->getResult());
else
	print_r($payvisionBasicOperationsServiceCapture->getLastError());
// sample call for PayvisionBasicOperationsServiceCapture::Capture()
if($payvisionBasicOperationsServiceCapture->Capture(new PayvisionBasicOperationsStructCapture(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceCapture->getResult());
else
	print_r($payvisionBasicOperationsServiceCapture->getLastError());

/*************************************************
 * Example for PayvisionBasicOperationsServiceVoid
 */
$payvisionBasicOperationsServiceVoid = new PayvisionBasicOperationsServiceVoid($wsdl);
// sample call for PayvisionBasicOperationsServiceVoid::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceVoid->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceVoid->getResult());
else
	print_r($payvisionBasicOperationsServiceVoid->getLastError());
// sample call for PayvisionBasicOperationsServiceVoid::Void()
if($payvisionBasicOperationsServiceVoid->Void(new PayvisionBasicOperationsStructVoid(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceVoid->getResult());
else
	print_r($payvisionBasicOperationsServiceVoid->getLastError());

/*****************************************************
 * Example for PayvisionBasicOperationsServiceReferral
 */
$payvisionBasicOperationsServiceReferral = new PayvisionBasicOperationsServiceReferral($wsdl);
// sample call for PayvisionBasicOperationsServiceReferral::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceReferral->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceReferral->getResult());
else
	print_r($payvisionBasicOperationsServiceReferral->getLastError());
// sample call for PayvisionBasicOperationsServiceReferral::ReferralApproval()
if($payvisionBasicOperationsServiceReferral->ReferralApproval(new PayvisionBasicOperationsStructReferralApproval(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceReferral->getResult());
else
	print_r($payvisionBasicOperationsServiceReferral->getLastError());

/*************************************************
 * Example for PayvisionBasicOperationsServiceCard
 */
$payvisionBasicOperationsServiceCard = new PayvisionBasicOperationsServiceCard($wsdl);
// sample call for PayvisionBasicOperationsServiceCard::setSoapHeaderOriginatorHeader()
if($payvisionBasicOperationsServiceCard->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/),$_nameSpace,$_mustUnderstand,$_actor))
	print_r($payvisionBasicOperationsServiceCard->getResult());
else
	print_r($payvisionBasicOperationsServiceCard->getLastError());
// sample call for PayvisionBasicOperationsServiceCard::CardFundTransfer()
if($payvisionBasicOperationsServiceCard->CardFundTransfer(new PayvisionBasicOperationsStructCardFundTransfer(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceCard->getResult());
else
	print_r($payvisionBasicOperationsServiceCard->getLastError());

/*****************************************************
 * Example for PayvisionBasicOperationsServiceRetrieve
 */
$payvisionBasicOperationsServiceRetrieve = new PayvisionBasicOperationsServiceRetrieve($wsdl);
// sample call for PayvisionBasicOperationsServiceRetrieve::RetrieveTransactionResult()
if($payvisionBasicOperationsServiceRetrieve->RetrieveTransactionResult(new PayvisionBasicOperationsStructRetrieveTransactionResult(/*** update parameters list ***/)))
	print_r($payvisionBasicOperationsServiceRetrieve->getResult());
else
	print_r($payvisionBasicOperationsServiceRetrieve->getLastError());
?>