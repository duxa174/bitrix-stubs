<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class Service
 * @package Bitrix\Sale\PaySystem
 */
class Service
{
    const EVENT_ON_BEFORE_PAYMENT_PAID = 'OnSalePsServiceProcessRequestBeforePaid';
    const EVENT_INITIATE_PAY_SUCCESS = 'onSalePsInitiatePaySuccess';
    const EVENT_INITIATE_PAY_ERROR = 'onSalePsInitiatePayError';
    const PAY_SYSTEM_PREFIX = 'PAYSYSTEM_';
    /** @var ServiceHandler|IHold|IPartialHold|IRefund|IPrePayable|ICheckable|IPayable|IRequested|IPdf|IDocumentGeneratePdf|IRecurring $handler */
    private $handler = null;
    /** @var array */
    private $fields = array();
    /** @var bool */
    protected $isClone = false;
    /** @var Context  */
    protected $context;
    /**
     * Service constructor.
     * @param $fields
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function __construct($fields)
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @param int $mode
     * @return ServiceResult
     * @throws NotSupportedException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null, $mode = \Bitrix\Sale\PaySystem\BaseServiceHandler::STREAM)
    {
    }
    /**
     * @return bool
     */
    public function isRefundable()
    {
    }
    /**
     * @param Payment $payment
     * @param int $refundableSum
     * @return ServiceResult|Result
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum = 0)
    {
    }
    /**
     * @param Request $request
     * @return Result
     * @throws NotSupportedException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function processRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @return string
     */
    public function getConsumerName()
    {
    }
    /**
     * @return array
     */
    public function getHandlerDescription()
    {
    }
    /**
     * @return bool
     */
    public function isBlockable()
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     * @throws SystemException
     */
    public function cancel(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @param int $sum
     * @return ServiceResult
     * @throws SystemException
     */
    public function confirm(\Bitrix\Sale\Payment $payment, $sum = 0)
    {
    }
    /**
     * @param $name
     * @return mixed
     */
    public function getField($name)
    {
    }
    /**
     * @return array
     */
    public function getCurrency()
    {
    }
    /**
     * @return bool
     */
    public function isCash()
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     */
    public function creditNoDemand(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     */
    public function debitNoDemand(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return bool
     */
    public function isPayable()
    {
    }
    /**
     * @return bool
     */
    public function isAffordPdf()
    {
    }
    /**
     * @return bool
     */
    public function isAffordDocumentGeneratePdf()
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     * @throws NotSupportedException
     */
    public function getPdfContent(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     * @throws NotSupportedException
     */
    public function getPdf(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @param $params
     * @return mixed
     * @throws NotSupportedException
     */
    public function registerCallbackOnGenerate(\Bitrix\Sale\Payment $payment, $params)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     * @throws NotSupportedException
     */
    public function isPdfGenerated(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function getPaymentPrice(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param array $params
     */
    public function setTemplateParams(array $params)
    {
    }
    /**
     * @param Payment|null $payment
     * @param $templateName
     * @return ServiceResult
     */
    public function showTemplate(\Bitrix\Sale\Payment $payment = null, $templateName)
    {
    }
    /**
     * @return bool
     */
    public function isPrePayable()
    {
    }
    /**
     * @param Payment|null $payment
     * @param Request $request
     * @throws NotSupportedException
     */
    public function initPrePayment(\Bitrix\Sale\Payment $payment = null, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @return mixed
     * @throws NotSupportedException
     */
    public function getPrePaymentProps()
    {
    }
    /**
     * @param array $orderData
     * @return mixed
     * @throws NotSupportedException
     */
    public function basketButtonAction(array $orderData = array())
    {
    }
    /**
     * @param array $orderData
     * @return mixed
     * @throws NotSupportedException
     */
    public function setOrderDataForPrePayment($orderData = array())
    {
    }
    /**
     * @param $orderData
     * @return mixed
     * @throws NotSupportedException
     */
    public function payOrderByPrePayment($orderData)
    {
    }
    /**
     * @return array
     */
    public function getFieldsValues()
    {
    }
    /**
     * @return bool
     */
    public function isAllowEditPayment()
    {
    }
    /**
     * @return bool
     */
    public function isCheckable()
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     */
    public function check(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param \SplObjectStorage $cloneEntity
     *
     * @return Service
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * @return bool
     */
    public function isCustom()
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    public function getParamsBusValue(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return bool
     */
    public function isRequested()
    {
    }
    /**
     * @param $requestId
     * @return ServiceResult
     * @throws NotSupportedException
     */
    public function checkMovementListStatus($requestId)
    {
    }
    /**
     * @param $requestId
     * @return ServiceResult
     * @throws NotSupportedException
     */
    public function getMovementList($requestId)
    {
    }
    /**
     * @param Request $request
     * @return ServiceResult
     */
    public function processAccountMovementList(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param $movementList
     * @param string $registryType
     * @return ServiceResult
     */
    private function applyAccountMovementList($movementList, $registryType = \Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER)
    {
    }
    /**
     * @param $item
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    private function findEntityIds($item)
    {
    }
    /**
     * @return bool
     */
    public function isTuned()
    {
    }
    /**
     * @return array
     */
    public function getDemoParams()
    {
    }
    /**
     * @param $mode
     */
    public function setTemplateMode($mode)
    {
    }
    /**
     * @return Context
     */
    public function getContext() : \Bitrix\Sale\PaySystem\Context
    {
    }
    /**
     * @param Payment $payment
     * @return bool
     */
    public function isRecurring(\Bitrix\Sale\Payment $payment) : bool
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     */
    public function repeatRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     */
    public function cancelRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
}