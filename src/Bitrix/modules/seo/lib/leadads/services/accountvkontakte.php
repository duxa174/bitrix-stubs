<?php

namespace Bitrix\Seo\LeadAds\Services;

/**
 * Class AccountVkontakte
 *
 * @package Bitrix\Seo\LeadAds\Services
 */
class AccountVkontakte extends \Bitrix\Seo\LeadAds\Account
{
    const TYPE_CODE = \Bitrix\Seo\LeadAds\Service::TYPE_VKONTAKTE;
    const URL_ACCOUNT_LIST = 'https://vk.com/groups?tab=admin';
    const URL_INFO = 'https://vk.com/page-19542789_53868676';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME');
    /**
     * Get row by id.
     *
     * @param string $id ID.
     * @return array|mixed|null
     */
    public function getRowById($id)
    {
    }
    /**
     * Get list.
     *
     * @return \Bitrix\Seo\Retargeting\Response
     */
    public function getList()
    {
    }
    /**
     * Get profile.
     *
     * @return array|null
     */
    public function getProfile()
    {
    }
}