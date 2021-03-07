<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Batchable;

abstract class Proxy extends \Bitrix\Sale\Exchange\Integration\Service\Batchable\Base
{
    /**
     * @return Integration\Rest\RemoteProxies\CRM\Contact | Integration\Rest\RemoteProxies\CRM\Company | Integration\Rest\RemoteProxies\CRM\Activity | Integration\Rest\RemoteProxies\CRM\Deal
     */
    protected static abstract function getProxy();
    public static function proxyList(array $filter)
    {
    }
    public static function proxyAdds(array $list)
    {
    }
    protected static function prepareFieldsAdds($fields)
    {
    }
}