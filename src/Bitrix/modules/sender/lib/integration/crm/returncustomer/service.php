<?php

namespace Bitrix\Sender\Integration\Crm\ReturnCustomer;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\Crm\ReturnCustomer
 */
class Service
{
    /**
     * Return true if can use.
     *
     * @return bool
     */
    public static function canUse()
    {
    }
    /**
     * Service can be used, but is not available because of plan.
     *
     * @return bool
     */
    public static function isAvailable()
    {
    }
    /**
     * Return true if current user can use.
     *
     * @return bool
     */
    public static function canCurrentUserUse()
    {
    }
    /**
     * Return true if lead enabled.
     *
     * @return bool
     */
    public static function isLeadEnabled()
    {
    }
    /**
     * Get crm entity type ID by recipient type.
     *
     * @param string $recipientType Recipient type.
     * @return bool
     */
    public static function getTypeIdByRecipientType($recipientType)
    {
    }
    /**
     * Get crm entity type ID by recipient type ID.
     *
     * @param int $recipientTypeId Recipient type ID.
     * @return int|null
     */
    public static function getTypeIdByRecipientTypeId($recipientTypeId)
    {
    }
}