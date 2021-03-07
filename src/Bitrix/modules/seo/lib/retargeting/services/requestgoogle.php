<?php

namespace Bitrix\Seo\Retargeting\Services;

class RequestGoogle extends \Bitrix\Seo\Retargeting\ProxyRequest
{
    const TYPE_CODE = 'google';
    const REST_METHOD_PREFIX = 'seo.client.ads.google';
}