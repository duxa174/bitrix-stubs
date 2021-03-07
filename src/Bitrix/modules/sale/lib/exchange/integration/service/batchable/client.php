<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Batchable;

abstract class Client extends \Bitrix\Sale\Exchange\Integration\Service\Batchable\Proxy
{
    public static function resolveFieldsValuesFromOrderList(array $params)
    {
    }
    public static function getUserCollectionFromOrderList(array $params)
    {
    }
    protected static function collapseUserList(array $list)
    {
    }
    protected static abstract function getUsersFieldsValues(array $indexes);
    //resolveClients
    protected static function loadUserCollection($indexes)
    {
    }
    protected static function getUserCollectionByTypeId(\Bitrix\Sale\Exchange\Integration\Service\User\Container\Collection $collection, $typeId)
    {
    }
}