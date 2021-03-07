<?php

namespace Bitrix\Mail;

class User
{
    /**
     * Creates mail user
     *
     * @param array $fields User fields.
     * @return int|false
     */
    public static function create($fields)
    {
    }
    /**
     * Runs user login
     *
     * @return void
     */
    public static function login()
    {
    }
    /**
     * Returns mail user ID
     *
     * @param array &$params Auth params.
     * @return int|false
     */
    public static function onLoginExternal(&$params)
    {
    }
    /**
     * Returns User-Entity unique email and entry point URL
     *
     * @param string $siteId Site ID.
     * @param int $userId User ID.
     * @param string $entityType Entity type ID.
     * @param int $entityId Entity ID.
     * @param string $entityLink Entity URL.
     * @param string $backurl Back URL.
     * @return array|false
     */
    public static function getReplyTo($siteId, $userId, $entityType, $entityId, $entityLink = null, $backurl = null)
    {
    }
    /**
     * Returns Site-User-Entity unique email
     *
     * @param string $siteId Site ID.
     * @param int $userId User ID.
     * @param string $entityType Entity type ID.
     * @return array|false
     */
    public static function getForwardTo($siteId, $userId, $entityType)
    {
    }
    /**
     * Sends email related events
     *
     * @param string $to Recipient email.
     * @param array $message Message.
     * @param string &$error Error.
     * @return bool
     */
    public static function onEmailReceived($to, $message, &$error)
    {
    }
    /**
     * Agent method, retrieves stored user message and sends an event
     */
    public static function sendEventAgent($messageId = 0, $cnt = 0)
    {
    }
    /**
     * Returns email users group
     *
     * @return array
     */
    public static function getMailUserGroup()
    {
    }
    public static function getDefaultEmailFrom($serverName = false)
    {
    }
    public static function getUserData($userList, $nameTemplate)
    {
    }
    public static function handleSiteUpdate($fields)
    {
    }
    public static function handleServerNameUpdate()
    {
    }
    public static function clearTokensCache()
    {
    }
}