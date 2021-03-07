<?php

namespace Bitrix\Sale\PaySystem;

abstract class BaseServiceHandler
{
    const STREAM = 1;
    const STRING = 2;
    const TEST_URL = 'test';
    const ACTIVE_URL = 'active';
    protected $handlerType = '';
    protected $service = null;
    protected $extraParams = array();
    protected $initiateMode = self::STREAM;
    /** @var bool */
    protected $isClone = false;
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     */
    public abstract function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null);
    /**
     * BaseServiceHandler constructor.
     * @param $type
     * @param Service $service
     */
    public function __construct($type, \Bitrix\Sale\PaySystem\Service $service)
    {
    }
    /**
     * @param Payment|null $payment
     * @param string $template
     * @return ServiceResult
     */
    public function showTemplate(\Bitrix\Sale\Payment $payment = null, $template = '')
    {
    }
    /**
     * @param string $template
     * @return string
     */
    private function searchTemplate($template)
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    public function getParamsBusValue(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @return mixed|string
     */
    protected static function getName()
    {
    }
    /**
     * @param Payment $payment
     * @param $code
     * @return mixed
     */
    protected function getBusinessValue(\Bitrix\Sale\Payment $payment = null, $code)
    {
    }
    /**
     * @return array
     */
    public function getDescription()
    {
    }
    /**
     * @param $codes
     * @return array
     */
    protected function filterDescriptionCodes($codes)
    {
    }
    /**
     * @return array
     */
    protected function getBusinessCodes()
    {
    }
    /**
     * @return array
     */
    protected function getExtraParams()
    {
    }
    /**
     * @param array $values
     */
    public function setExtraParams(array $values)
    {
    }
    /**
     * @return array
     */
    public abstract function getCurrencyList();
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
     * @return array
     */
    public static function getHandlerModeList()
    {
    }
    /**
     * @param int $mode
     */
    public function setInitiateMode($mode)
    {
    }
    /**
     * @param Payment $payment
     * @param string $action
     * @return string
     */
    protected function getUrl(\Bitrix\Sale\Payment $payment = null, $action)
    {
    }
    /**
     * @param Payment $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @return array
     */
    protected function getUrlList()
    {
    }
    /**
     * @param \SplObjectStorage $cloneEntity
     *
     * @return BaseServiceHandler
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
     * @return string
     */
    public function getHandlerType()
    {
    }
    /**
     * @param $content
     */
    public function OnEndBufferContent(&$content)
    {
    }
    /**
     * @return array
     */
    public function getDemoParams()
    {
    }
    /**
     * @return bool
     */
    public function isTuned()
    {
    }
}