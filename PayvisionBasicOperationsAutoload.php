<?php
/**
 * File to load generated classes once at once time
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * Includes for all generated classes files
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
require_once dirname(__FILE__) . '/PayvisionBasicOperationsWsdlClass.php';
require_once dirname(__FILE__) . '/Base/Entity/PayvisionBasicOperationsStructBaseEntity.php';
require_once dirname(__FILE__) . '/Void/Response/PayvisionBasicOperationsStructVoidResponse.php';
require_once dirname(__FILE__) . '/Referral/Approval/PayvisionBasicOperationsStructReferralApproval.php';
require_once dirname(__FILE__) . '/Void/PayvisionBasicOperationsStructVoid.php';
require_once dirname(__FILE__) . '/Referral/Response/PayvisionBasicOperationsStructReferralApprovalResponse.php';
require_once dirname(__FILE__) . '/Capture/Response/PayvisionBasicOperationsStructCaptureResponse.php';
require_once dirname(__FILE__) . '/Capture/PayvisionBasicOperationsStructCapture.php';
require_once dirname(__FILE__) . '/Card/Transfer/PayvisionBasicOperationsStructCardFundTransfer.php';
require_once dirname(__FILE__) . '/Retrieve/Response/PayvisionBasicOperationsStructRetrieveTransactionResultResponse.php';
require_once dirname(__FILE__) . '/Retrieve/Result/PayvisionBasicOperationsStructRetrieveTransactionResult.php';
require_once dirname(__FILE__) . '/Card/Response/PayvisionBasicOperationsStructCardFundTransferResponse.php';
require_once dirname(__FILE__) . '/Refund/Response/PayvisionBasicOperationsStructRefundResponse.php';
require_once dirname(__FILE__) . '/Credit/Response/PayvisionBasicOperationsStructCreditResponse.php';
require_once dirname(__FILE__) . '/Cdc/Entry/PayvisionBasicOperationsStructCdcEntry.php';
require_once dirname(__FILE__) . '/Array/Item/PayvisionBasicOperationsStructArrayOfCdcEntryItem.php';
require_once dirname(__FILE__) . '/Array/Entry/PayvisionBasicOperationsStructArrayOfCdcEntry.php';
require_once dirname(__FILE__) . '/Transaction/Result/PayvisionBasicOperationsStructTransactionResult.php';
require_once dirname(__FILE__) . '/Authorize/Response/PayvisionBasicOperationsStructAuthorizeResponse.php';
require_once dirname(__FILE__) . '/Cdc/Item/PayvisionBasicOperationsStructCdcEntryItem.php';
require_once dirname(__FILE__) . '/Originator/Header/PayvisionBasicOperationsStructOriginatorHeader.php';
require_once dirname(__FILE__) . '/Authorize/PayvisionBasicOperationsStructAuthorize.php';
require_once dirname(__FILE__) . '/Credit/PayvisionBasicOperationsStructCredit.php';
require_once dirname(__FILE__) . '/Payment/Response/PayvisionBasicOperationsStructPaymentResponse.php';
require_once dirname(__FILE__) . '/Payment/PayvisionBasicOperationsStructPayment.php';
require_once dirname(__FILE__) . '/Refund/PayvisionBasicOperationsStructRefund.php';
require_once dirname(__FILE__) . '/Authorize/PayvisionBasicOperationsServiceAuthorize.php';
require_once dirname(__FILE__) . '/Payment/PayvisionBasicOperationsServicePayment.php';
require_once dirname(__FILE__) . '/Credit/PayvisionBasicOperationsServiceCredit.php';
require_once dirname(__FILE__) . '/Refund/PayvisionBasicOperationsServiceRefund.php';
require_once dirname(__FILE__) . '/Capture/PayvisionBasicOperationsServiceCapture.php';
require_once dirname(__FILE__) . '/Void/PayvisionBasicOperationsServiceVoid.php';
require_once dirname(__FILE__) . '/Referral/PayvisionBasicOperationsServiceReferral.php';
require_once dirname(__FILE__) . '/Card/PayvisionBasicOperationsServiceCard.php';
require_once dirname(__FILE__) . '/Retrieve/PayvisionBasicOperationsServiceRetrieve.php';
require_once dirname(__FILE__) . '/PayvisionBasicOperationsClassMap.php';
?>