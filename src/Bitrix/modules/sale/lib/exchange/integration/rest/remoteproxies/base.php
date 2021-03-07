<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies;

class Base implements \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    protected $batchItemCollection;
    public function cmd($pageType, $fields)
    {
    }
    public function batch($pageType, $list)
    {
    }
    protected function setBatchItemCollection($batchItemCollection)
    {
    }
}