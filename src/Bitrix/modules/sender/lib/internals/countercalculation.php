<?php

namespace Bitrix\Sender\Internals;

class CounterCalculation
{
    private static $optionName = '~update_counters_16';
    public static $maxExecutionTime = 10;
    private static $startTime = null;
    private static $stages = array('RECIPIENT_READ' => '1', 'RECIPIENT_CLICK' => '2', 'RECIPIENT_UNSUB' => '3', 'POSTING_STATUS' => '4', 'POSTING_READ' => '5', 'POSTING_CLICK' => '6', 'POSTING_UNSUB' => '7', 'MAILING_SUBSCRIPTION' => '8', 'CONTACT_EMAIL_REGISTER' => '9', 'FINISH' => '');
    public static function wasCompleted($stageCode = 'FINISH')
    {
    }
    public static function setCompleted($stageCode = 'FINISH')
    {
    }
    public static function getCompletedPercent()
    {
    }
    private static function isTimeUp()
    {
    }
    public static function getExecutionTime()
    {
    }
    public static function update()
    {
    }
    public static function updateRecipientReadCounters($type)
    {
    }
    public static function updatePostingStatusCounters()
    {
    }
    public static function updatePostingReadCounters($type)
    {
    }
    public static function updateMailingSubscription()
    {
    }
    public static function updateContactEmailRegister()
    {
    }
    private static function getPostingStatusUpdateFields($postingId, $statusList)
    {
    }
    /**
     * Index letters.
     *
     * @return string
     */
    public static function updateRecipientsAgent()
    {
    }
}