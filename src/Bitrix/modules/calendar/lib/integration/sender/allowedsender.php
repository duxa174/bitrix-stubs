<?php

namespace Bitrix\Calendar\Integration\Sender;

class AllowedSender
{
    /**
     * Get list of allowed senders
     * @param int|null $forUserId For whom.
     * @return array
     */
    public static function getList($forUserId = null)
    {
    }
    /**
     * Is $email an allowed sender or not
     * @param string $email Sender email.
     * @param int|null $userId For whom.
     * @return bool
     */
    public static function isAllowed($email, $userId = null)
    {
    }
}