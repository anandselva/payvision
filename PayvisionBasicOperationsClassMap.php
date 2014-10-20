<?php
/**
 * File for the class which returns the class map definition
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * Class which returns the class map definition by the static method PayvisionBasicOperationsClassMap::classMap()
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'ArrayOfCdcEntry' => 'PayvisionBasicOperationsStructArrayOfCdcEntry',
  'ArrayOfCdcEntryItem' => 'PayvisionBasicOperationsStructArrayOfCdcEntryItem',
  'Authorize' => 'PayvisionBasicOperationsStructAuthorize',
  'AuthorizeResponse' => 'PayvisionBasicOperationsStructAuthorizeResponse',
  'BaseEntity' => 'PayvisionBasicOperationsStructBaseEntity',
  'Capture' => 'PayvisionBasicOperationsStructCapture',
  'CaptureResponse' => 'PayvisionBasicOperationsStructCaptureResponse',
  'CardFundTransfer' => 'PayvisionBasicOperationsStructCardFundTransfer',
  'CardFundTransferResponse' => 'PayvisionBasicOperationsStructCardFundTransferResponse',
  'CdcEntry' => 'PayvisionBasicOperationsStructCdcEntry',
  'CdcEntryItem' => 'PayvisionBasicOperationsStructCdcEntryItem',
  'Credit' => 'PayvisionBasicOperationsStructCredit',
  'CreditResponse' => 'PayvisionBasicOperationsStructCreditResponse',
  'OriginatorHeader' => 'PayvisionBasicOperationsStructOriginatorHeader',
  'Payment' => 'PayvisionBasicOperationsStructPayment',
  'PaymentResponse' => 'PayvisionBasicOperationsStructPaymentResponse',
  'ReferralApproval' => 'PayvisionBasicOperationsStructReferralApproval',
  'ReferralApprovalResponse' => 'PayvisionBasicOperationsStructReferralApprovalResponse',
  'Refund' => 'PayvisionBasicOperationsStructRefund',
  'RefundResponse' => 'PayvisionBasicOperationsStructRefundResponse',
  'RetrieveTransactionResult' => 'PayvisionBasicOperationsStructRetrieveTransactionResult',
  'RetrieveTransactionResultResponse' => 'PayvisionBasicOperationsStructRetrieveTransactionResultResponse',
  'TransactionResult' => 'PayvisionBasicOperationsStructTransactionResult',
  'Void' => 'PayvisionBasicOperationsStructVoid',
  'VoidResponse' => 'PayvisionBasicOperationsStructVoidResponse',
);
	}
}
?>