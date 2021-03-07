<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\CRM;

interface IContact extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function adds($list);
    public function getList($select = [], $filter, $order = [], $pageNavigation);
}