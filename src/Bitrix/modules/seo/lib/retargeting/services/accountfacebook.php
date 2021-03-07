<?php

namespace Bitrix\Seo\Retargeting\Services;

class AccountFacebook extends \Bitrix\Seo\Retargeting\Account
{
    const TYPE_CODE = 'facebook';
    const REGIONS_LIST_CACHE_TTL = 60 * 60 * 24 * 30;
    // 1 month
    protected static $listRowMap = array('ID' => 'ACCOUNT_ID', 'NAME' => 'NAME');
    public function getList()
    {
    }
    public function getProfile()
    {
    }
    public function getRegionsList()
    {
    }
}