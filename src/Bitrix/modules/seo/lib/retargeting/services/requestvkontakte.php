<?php

namespace Bitrix\Seo\Retargeting\Services;

class RequestVkontakte extends \Bitrix\Seo\Retargeting\ProxyRequest
{
    const TYPE_CODE = 'vkontakte';
    const REST_METHOD_PREFIX = 'seo.client.ads.vkontakte';
    protected function directQuery(array $params = array())
    {
    }
}