<?php

namespace Bitrix\Main\UserConsent\Internals;

class UserConsentItemTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Get map.
     *
     * @return array
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    /**
     * Set user consent items.
     *
     * @param integer $userConsentId User Consent Id.
     * @param array $items Items.
     * @throws \Exception
     */
    public static function addItems(int $userConsentId, array $items) : void
    {
    }
    /**
     * Get user consent items.
     *
     * @param integer $userConsentId User Consent Id.
     * @return array
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getItems(int $userConsentId) : array
    {
    }
    /**
     * Remove user consent items.
     *
     * @param int $userConsentId User Consent Id.
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function removeItems(int $userConsentId) : void
    {
    }
}