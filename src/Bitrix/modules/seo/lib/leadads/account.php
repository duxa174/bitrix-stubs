<?php

namespace Bitrix\Seo\LeadAds;

/**
 * Class Account
 *
 * @package Bitrix\Seo\LeadAds
 */
abstract class Account extends \Bitrix\Seo\Retargeting\Account implements \Bitrix\Seo\Retargeting\IRequestDirectly
{
    const URL_ACCOUNT_LIST = '';
    const URL_INFO = '';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME');
    protected $accountId;
    protected $pageId;
    /**
     * Account constructor.
     *
     * @param null|string $accountId Account ID.
     */
    public function __construct($accountId = null)
    {
    }
    /**
     * Get profile cached.
     *
     * @return Retargeting\Response
     */
    public function getProfileCached()
    {
    }
    /**
     * Get url account list.
     *
     * @return string
     */
    public static function getUrlAccountList()
    {
    }
    /**
     * Get url info.
     *
     * @return string
     */
    public static function getUrlInfo()
    {
    }
    /**
     * Get group auth adapter.
     *
     * @param string $type Type.
     * @return Retargeting\AuthAdapter
     */
    public static function getGroupAuthAdapter($type)
    {
    }
}