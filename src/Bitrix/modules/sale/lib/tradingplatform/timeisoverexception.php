<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class TimeIsOverException
 * Throws, then timelimit is over.
 * For multistep actions.
 * @package Bitrix\Sale\TradingPlatform
 */
class TimeIsOverException extends \Bitrix\Main\SystemException
{
    protected $endPosition;
    /**
     * @param string $message Message to show.
     * @param string  $endPosition Position from witch must be start ed next step.
     * @param \Exception $previous.
     */
    public function __construct($message = "", $endPosition = "", \Exception $previous = null)
    {
    }
    /**
     * Returns position from witch next step must be started.
     * @return string
     */
    public function getEndPosition()
    {
    }
}