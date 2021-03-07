<?php

namespace Bitrix\Sale\Exchange\Integration;

final class Router
{
    const LOG_DIR = '/bitrix/modules/sale/lib/exchange/integration/log';
    const LOG_PATH = 'router_request.log';
    protected $fields;
    public function __construct()
    {
    }
    public function check()
    {
    }
    protected function checkToken($accessToken, $refreshToken)
    {
    }
    public function redirect()
    {
    }
    protected function getPlacement()
    {
    }
    protected function resolveTypeId($typeId)
    {
    }
    protected function getBySourceEntity($sourceEntityTypeId = '', $sourceEntityId = '', $destinationEntityTypeId = '', $destinationEntityId = '')
    {
    }
    protected function getByDestinationEntity($sourceEntityTypeId = '', $sourceEntityId = '', $destinationEntityTypeId = '', $destinationEntityId = '')
    {
    }
    protected function requestJsonDecode($request)
    {
    }
    /**
     * @param $params
     * @return void
     */
    protected function log($params)
    {
    }
    protected function isOnLog()
    {
    }
}