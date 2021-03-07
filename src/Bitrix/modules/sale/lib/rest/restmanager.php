<?php

namespace Bitrix\Sale\Rest;

class RestManager
{
    //RegisterModuleDependences("rest", "onRestGetModule", "sale", "\\Bitrix\\Sale\\Rest\\RestManager", "onRestGetModule");
    //RegisterModuleDependences("rest", "OnRestServiceBuildDescription", "sale", "\\Bitrix\\Sale\\Rest\\RestManager", "onRestServiceBuildDescription");
    ///rest/event.bind.json?auth=423f8e5b0000cdb90000cdb8000000010000030eb629c718430b3c900e901aa414b84c&auth_type=0&event=OnSaleOrderSaved&handler=http://evgenik.office.bitrix.ru/handler/
    ///rest/event.bind.json?auth=423f8e5b0000cdb90000cdb8000000010000030eb629c718430b3c900e901aa414b84c&auth_type=0&event=OnSaleBeforeOrderDelete&handler=http://evgenik.office.bitrix.ru/handler/
    //	public static function onRestGetModule()
    //	{
    //		return ['MODULE_ID' => 'sale'];
    //	}
    public static function onRestServiceBuildDescription()
    {
    }
    public static function processEvent(array $params, array $handlerFields)
    {
    }
}