<?php

namespace Bitrix\Sale\TradingPlatform\Vk;

/**
 * Class ExecuteException
 * Throw various errors occuring during vk-export
 *
 * @package Bitrix\Sale\TradingPlatform\Vk
 */
class ExecuteException extends \Bitrix\Main\SystemException
{
    protected $errCode;
    protected $method;
    protected $needLink = false;
    const API_DESC_PAGE = 'https://new.vk.com/dev/errors';
    public function __construct($message = "", $errCode = "", $method = "", \Exception $previous = NULL)
    {
    }
    /**
     * Return formatted message for showing
     *
     * @return string
     */
    public function getFullMessage()
    {
    }
}