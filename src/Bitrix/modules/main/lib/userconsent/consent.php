<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class Consent
 * @package Bitrix\Main\UserConsent
 */
class Consent
{
    const EVENT_NAME_LIST = 'OnUserConsentProviderList';
    /**
     * Add user consent by context data.
     *
     * @param integer $agreementId Agreement ID.
     * @param integer|null $originatorId Originator ID.
     * @param integer|null $originId Origin ID.
     * @param array $params Extra params like IP, URL or USER_ID.
     * @return integer|null
     */
    public static function addByContext($agreementId, $originatorId = null, $originId = null, array $params = array())
    {
    }
    /**
     * Get user consent added by context data.
     *
     * @param integer $agreementId Agreement ID.
     * @param integer|null $originatorId Originator ID.
     * @param integer|null $originId Origin ID.
     * @param array $params Extra params.
     * @return array|null
     */
    public static function getByContext($agreementId, $originatorId = null, $originId = null, $params = array())
    {
    }
    /**
     * Get origin data.
     *
     * @param string $originatorId Originator ID.
     * @param string|integer|null $originId Origin ID.
     * @return array|null
     */
    public static function getOriginData($originatorId, $originId = null)
    {
    }
    /**
     * Get items data.
     *
     * @param string $originatorId Originator ID.
     * @param array $items Source Items.
     * @return string|null
     */
    public static function getItems($originatorId, $items = [])
    {
    }
    /**
     * Get list.
     *
     * @return static[]
     */
    protected static function getList()
    {
    }
}