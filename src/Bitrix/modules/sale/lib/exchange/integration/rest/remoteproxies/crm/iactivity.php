<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\CRM;

interface IActivity extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function adds($list);
}