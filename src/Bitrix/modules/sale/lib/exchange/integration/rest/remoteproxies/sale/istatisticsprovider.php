<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\Sale;

interface IStatisticsProvider extends \Bitrix\Sale\Exchange\Integration\Rest\RemoteProxies\ICmd
{
    public function add(array $fields);
    public function getList($select = [], $filter, $order = [], $pageNavigation);
}