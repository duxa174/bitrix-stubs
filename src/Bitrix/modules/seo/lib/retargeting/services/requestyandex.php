<?php

namespace Bitrix\Seo\Retargeting\Services;

class RequestYandex extends \Bitrix\Seo\Retargeting\ProxyRequest
{
    const TYPE_CODE = 'yandex';
    const REST_METHOD_PREFIX = 'seo.client.ads.yandex';
    protected function directQuery(array $params = array())
    {
    }
}