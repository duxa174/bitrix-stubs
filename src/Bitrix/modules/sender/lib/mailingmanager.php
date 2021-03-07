<?php

namespace Bitrix\Sender;

class MailingManager
{
    /* @var Exception $error */
    protected static $error = null;
    /**
     * @return Exception
     */
    public static function getErrors()
    {
    }
    /**
     * @return string
     * @deprecated
     */
    public static function getAgentNamePeriod()
    {
    }
    /**
     * @param $mailingChainId
     * @return string
     * @deprecated
     */
    public static function getAgentName($mailingChainId)
    {
    }
    /**
     * @param null $mailingId
     * @param null $mailingChainId
     * @throws \Bitrix\Main\ArgumentException
     * @deprecated
     */
    public static function actualizeAgent($mailingId = null, $mailingChainId = null)
    {
    }
    /**
     * Send letter.
     *
     * @param integer $letterId Letter ID.
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function chainSend($letterId)
    {
    }
    /**
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function checkSend()
    {
    }
    /**
     * Check period letters.
     *
     * @param bool $isAgentExec Is agent exec.
     * @return string
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function checkPeriod($isAgentExec = true)
    {
    }
    /**
     * @param \DateTime $date
     * @param $daysOfMonth
     * @param $dayOfWeek
     * @param $timesOfDay
     * @return \DateTime|null
     */
    protected static function getDateExecute(\DateTime $date, $daysOfMonth, $dayOfWeek, $timesOfDay)
    {
    }
}