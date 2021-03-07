<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class RequestResult
 * @package Bitrix\Sale\Delivery\Requests
 */
class RequestResult extends \Bitrix\Sale\Delivery\Requests\Result
{
    protected $externalId = '';
    protected $internalId = 0;
    const ERROR_NOT_FOUND = 1;
    /**
     * @return string
     */
    public function getExternalId()
    {
    }
    /**
     * @param string $externalId
     */
    public function setExternalId($externalId)
    {
    }
    /**
     * @return string
     */
    public function getInternalId()
    {
    }
    /**
     * @param string $internalId
     */
    public function setInternalId($internalId)
    {
    }
}