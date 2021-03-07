<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\CRM;

interface IPlacement extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function binds(array $list);
    public function unbinds(array $list);
}