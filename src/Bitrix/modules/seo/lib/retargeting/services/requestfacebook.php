<?php

namespace Bitrix\Seo\Retargeting\Services;

class RequestFacebook extends \Bitrix\Seo\Retargeting\ProxyRequest
{
    const TYPE_CODE = 'facebook';
    const REST_METHOD_PREFIX = 'seo.client.ads.facebook';
    protected function directQuery(array $params = array())
    {
    }
}