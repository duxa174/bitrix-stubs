<?php

namespace Bitrix\Calendar\Integration\Bitrix24;

class Limitation
{
    const ICAL_EVENT_LIMIT_OPTION = "event_with_email_guest_amount";
    /**
     * Returns limitations for bitrix 24 for unpaid license
     * @return int (-1 if no limitation)
     */
    public static function getEventWithEmailGuestLimit()
    {
    }
    public static function getCountEventWithEmailGuestAmount()
    {
    }
    public static function setCountEventWithEmailGuestAmount($value = 0)
    {
    }
    public static function increaseEventWithEmailGuestAmount()
    {
    }
    public static function isEventWithEmailGuestAllowed()
    {
    }
}