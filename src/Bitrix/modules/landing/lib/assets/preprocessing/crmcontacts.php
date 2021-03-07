<?php

namespace Bitrix\Landing\Assets\PreProcessing;

class CrmContacts
{
    protected const DEFAULT_COMPANY = 'Company24';
    protected const DEFAULT_PHONES = ['+123456789'];
    protected const DEFAULT_EMAILS = ['info@company24.com'];
    protected const DEFAULT_CONTACTS = [self::COMPANY_KEY => self::DEFAULT_COMPANY, self::PHONES_KEY => self::DEFAULT_PHONES, self::EMAILS_KEY => self::DEFAULT_EMAILS];
    protected const COMPANY_KEY = 'company';
    protected const PHONES_KEY = 'phones';
    protected const EMAILS_KEY = 'emails';
    public const STATUS_CRM_OK = 10;
    public const STATUS_CRM_DEFAULT = 11;
    public const STATUS_CRM_NO_SALESCENTER = 12;
    public const STATUS_CONNECTOR_OK = 20;
    public const STATUS_CONNECTOR_OLD_CRM = 21;
    public const STATUS_CONNECTOR_DEFAULT = 22;
    public const STATUS_SMN_DEFAULT = 30;
    protected static $status;
    /**
     * Processing fonts in the block content.
     * @param Block $block Block instance.
     * @return void
     */
    public static function processing(\Bitrix\Landing\Block $block) : void
    {
    }
    /**
     * Find CRM contacts for default company
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getContacts() : array
    {
    }
    /**
     * Get status. Status is where from getting contacts
     * @return mixed
     */
    public static function getStatus()
    {
    }
}