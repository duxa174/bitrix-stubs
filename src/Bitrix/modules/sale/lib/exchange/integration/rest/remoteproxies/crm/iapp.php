<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\CRM;

interface IApp extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function optionSet($options);
}