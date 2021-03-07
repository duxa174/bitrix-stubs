<?php

namespace Bitrix\Seo\Analytics\Services;

class AccountInstagram extends \Bitrix\Seo\Analytics\Services\AccountFacebook
{
    const TYPE_CODE = 'instagram';
    /**
     * @return array
     */
    protected function getPublisherPlatforms()
    {
    }
    /**
     * @return bool
     */
    public function hasPublicPages()
    {
    }
    protected function prepareExpensesData($data)
    {
    }
}