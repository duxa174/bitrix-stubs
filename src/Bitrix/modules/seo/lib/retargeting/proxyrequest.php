<?php

namespace Bitrix\Seo\Retargeting;

class ProxyRequest extends \Bitrix\Seo\Retargeting\Request
{
    const REST_METHOD_PREFIX = '';
    /**
     * Request through cloud-adv service
     *
     * @param array $params Request params.
     * @return array|bool
     * @throws \Bitrix\Main\SystemException
     */
    public function query(array $params = array())
    {
    }
}