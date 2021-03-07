<?php

namespace Bitrix\MessageService\Sender;

class Limitation
{
    private static $options;
    private static $optionName = 'sender.limitation.daily';
    private static $defaultLimit = 0;
    public static function getDailyLimits()
    {
    }
    public static function getDailyLimit($senderId, $fromId)
    {
    }
    public static function setDailyLimit($senderId, $fromId, $limit)
    {
    }
    public static function checkDailyLimit($senderId, $fromId)
    {
    }
    public static function getRetryTime()
    {
    }
    public static function setRetryTime(array $params)
    {
    }
    /**
     * @param array $options
     * @return bool
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function setOptions(array $options)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function getOptions()
    {
    }
    /**
     * @param $optionName
     * @param $optionValue
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @internal param array $options
     */
    private static function setOption($optionName, $optionValue)
    {
    }
    /**
     * @param $optionName
     * @param mixed $defaultValue
     * @return mixed|null
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private static function getOption($optionName, $defaultValue = null)
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function clearOptions()
    {
    }
}