<?php

namespace Bitrix\Seo\Checkout\Services;

/**
 * Class RequestYandex
 * @package Bitrix\Seo\Checkout\Services
 */
class RequestYandex extends \Bitrix\Seo\Checkout\Request
{
    const TYPE_CODE = 'yandex';
    /**
     * Query.
     *
     * @param array $params Parameters.
     * @return mixed
     * @throws \Bitrix\Main\SystemException
     */
    public function query(array $params = array())
    {
    }
}