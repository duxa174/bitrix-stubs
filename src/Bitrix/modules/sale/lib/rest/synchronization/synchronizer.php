<?php

namespace Bitrix\Sale\Rest\Synchronization;

/**
 * Class Synchronizer
 * @package Bitrix\Sale\Rest\Synchronization
 * @intrnal
 */
final class Synchronizer
{
    protected $request;
    const SYNCHRONIZER_MARKER_ERROR = 'SYNCHRONIZER_ERROR';
    const MODE_SAVE = 'save';
    const MODE_DELETE = 'delete';
    public function __construct()
    {
    }
    public function incomingReplication($id = '', $xmlId = '', $action = '', $accessToken = '')
    {
    }
    public function onSaleOrderSaved(\Bitrix\Sale\Order $order)
    {
    }
    public function onSaleBeforeOrderDelete(\Bitrix\Sale\Order $order)
    {
    }
    public static function outcomingReplication(\Bitrix\Sale\Order $order, $mode)
    {
    }
    public function refreshToken()
    {
    }
    public function requesPrepareData(array $fields)
    {
    }
    protected function import(array $fields)
    {
    }
    protected static function addMarkedTimelineExternalSystem($externalOrderId, array $params)
    {
    }
    /**
     * @param array $params
     * запись в историю осуществляется только для БУС. Для Б24 изменения по заказу пишутся в тайм лайн
     */
    private static function addActionOrderHistory(array $params)
    {
    }
    protected static function getSites()
    {
    }
}