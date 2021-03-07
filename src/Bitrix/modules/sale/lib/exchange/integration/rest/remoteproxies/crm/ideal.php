<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\CRM;

interface IDeal extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function adds($list);
    public function contactItemsGet($id);
    public function contactItemsSet($id, $items);
}