<?php

namespace Bitrix\Sale\Internals\Analytics;

/**
 * Class Agent
 * @package Bitrix\Sale\Internals\Analytics
 */
abstract class Agent
{
    private const LAST_SEND_DATE = '~last_send_date_';
    private const LAST_ATTEMPT_DATE = '~last_attempt_date_';
    /**
     * @return string
     */
    protected static abstract function getProviderCode() : string;
    /**
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function send() : void
    {
    }
    /**
     * @param DateTime $nextExecutionAgentDate
     */
    protected static function createAgent(\Bitrix\Main\Type\DateTime $nextExecutionAgentDate) : void
    {
    }
    /**
     * @return DateTime
     * @throws \Bitrix\Main\ObjectException
     */
    private static function getSuccessNextExecutionAgentDate() : \Bitrix\Main\Type\DateTime
    {
    }
    /**
     * @return DateTime
     * @throws \Bitrix\Main\ObjectException
     */
    private static function getFailureNextExecutionAgentDate() : \Bitrix\Main\Type\DateTime
    {
    }
    /**
     * @return DateTime
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    private static function getLastSendDate() : \Bitrix\Main\Type\DateTime
    {
    }
    /**
     * @return DateTime
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    private static function getLastAttemptDate() : \Bitrix\Main\Type\DateTime
    {
    }
    /**
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    private static function updateDate() : void
    {
    }
}