<?php

namespace Bitrix\Seo\Retargeting\Services;

class AccountVkontakte extends \Bitrix\Seo\Retargeting\Account
{
    const TYPE_CODE = 'vkontakte';
    protected static $listRowMap = array('ID' => 'ACCOUNT_ID', 'NAME' => 'NAME');
    public function getList()
    {
    }
    public function getProfile()
    {
    }
}