<?php

namespace Bitrix\Main\Mail;

class Event
{
    const SEND_RESULT_NONE = 'N';
    const SEND_RESULT_SUCCESS = 'Y';
    const SEND_RESULT_ERROR = 'F';
    const SEND_RESULT_PARTLY = 'P';
    const SEND_RESULT_TEMPLATE_NOT_FOUND = '0';
    /**
     * @param array $data
     * @return string
     * @throws Main\ArgumentTypeException
     */
    public static function sendImmediate(array $data)
    {
    }
    /**
     * Send mail event
     *
     * @param array $data Params of event
     * @return Main\Entity\AddResult
     */
    public static function send(array $data)
    {
    }
    /**
     * @param array $arEvent
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function handleEvent(array $arEvent)
    {
    }
}