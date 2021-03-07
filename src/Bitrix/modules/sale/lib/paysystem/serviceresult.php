<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class ServiceResult
 * @package Bitrix\Sale\PaySystem
 */
class ServiceResult extends \Bitrix\Main\Entity\Result
{
    const MONEY_COMING = 'money_coming';
    const MONEY_LEAVING = 'money_leaving';
    private $psData = array();
    private $resultApplied = true;
    private $operationType = null;
    private $template = '';
    private $paymentUrl = '';
    /**
     * @param array $psData
     */
    public function setPsData($psData)
    {
    }
    /**
     * @return array
     */
    public function getPsData()
    {
    }
    /**
     * @return bool
     */
    public function isResultApplied()
    {
    }
    /**
     * @param $operationType
     */
    public function setOperationType($operationType)
    {
    }
    /**
     * @return null
     */
    public function getOperationType()
    {
    }
    /**
     * @param $resultApplied
     */
    public function setResultApplied($resultApplied)
    {
    }
    /**
     * @return string
     */
    public function getTemplate()
    {
    }
    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
    }
    /**
     * @return string
     */
    public function getPaymentUrl() : string
    {
    }
    /**
     * @param $paymentUrl
     */
    public function setPaymentUrl($paymentUrl) : void
    {
    }
    /**
     * @return Error[]
     */
    public function getBuyerErrors() : array
    {
    }
    /**
     * @return array
     */
    public function getBuyerErrorMessages() : array
    {
    }
    /**
     * @return Internals\CollectionFilterIterator
     */
    public function getBuyerErrorIterator() : \Bitrix\Sale\Internals\CollectionFilterIterator
    {
    }
}