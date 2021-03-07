<?php

namespace Bitrix\Mail\Helper;

/**
 * Class Recipient
 * @package Bitrix\Mail\Helper
 */
class Recipient
{
    /**
     * Builds unique code for BX.UI.Selector selector.
     *
     * @param string $email Email.
     *
     * @return string
     */
    public static function buildUniqueEmailCode($email)
    {
    }
    /**
     * Load last used Rcpt.
     *
     * @param string $emailTo Add this email to the result list.
     * @param integer $limit Limit list length.
     *
     * @return array Data preformed for BX.UI.Selector selector with email only mode enabled.
     *
     * @throws Main\SystemException
     */
    public static function loadLastRcpt($emailTo = null, $limit = 10)
    {
    }
    /**
     * Load mail contacts - users with EXTERNAL_AUTH_ID = email.
     *
     * @param array $filter Filter.
     * @param integer $limit Limit list length.
     *
     * @return array  Data preformed for BX.UI.Selector selector with email only mode enabled.
     *
     * @throws Main\SystemException
     */
    public static function loadMailContacts($filter = [], $limit = 20)
    {
    }
    /**
     * Load mail contacts from CRM - users with EXTERNAL_AUTH_ID = email and contact crm entity.
     *
     * @param array $filter Filter.
     * @param integer $limit Limit list length.
     * @return array  Data preformed for BX.UI.Selector selector with email only mode enabled.
     *
     * @throws Main\LoaderException
     */
    public static function loadCrmMailContacts($filter = [], $limit = 20)
    {
    }
}