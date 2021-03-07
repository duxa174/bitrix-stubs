<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderStatus
{
    public static function getEdit(\Bitrix\Sale\Order $order, \CUser $user, $showCancel, $showSaveButton)
    {
    }
    protected static function getCancelBlockHtml(\Bitrix\Sale\Order $order, array $data, $orderLocked = false)
    {
    }
    public static function getUserInfo($userId)
    {
    }
    protected static function prepareData(\Bitrix\Sale\Order $order)
    {
    }
    public static function getScripts(\Bitrix\Sale\Order $order, $userId)
    {
    }
    public static function getStatusesList($userId, $orderStatus = false)
    {
    }
    public static function getEditSimple($userId, $fieldName, $status)
    {
    }
    protected static function renderCreatorLink($data)
    {
    }
    protected static function renderUserCanceledLink($data)
    {
    }
    protected static function getJsObjName()
    {
    }
}