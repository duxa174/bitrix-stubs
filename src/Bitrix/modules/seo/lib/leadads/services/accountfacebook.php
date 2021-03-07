<?php

namespace Bitrix\Seo\LeadAds\Services;

class AccountFacebook extends \Bitrix\Seo\LeadAds\Account
{
    const TYPE_CODE = \Bitrix\Seo\LeadAds\Service::TYPE_FACEBOOK;
    const URL_ACCOUNT_LIST = 'https://www.facebook.com/bookmarks/pages';
    const URL_INFO = 'https://www.facebook.com/business/a/lead-ads';
    protected static $listRowMap = array('ID' => 'ID', 'NAME' => 'NAME');
    public function getRowById($id)
    {
    }
    public function getList()
    {
    }
    public function getProfile()
    {
    }
}