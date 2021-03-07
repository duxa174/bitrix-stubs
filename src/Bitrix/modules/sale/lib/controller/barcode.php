<?php

namespace Bitrix\Sale\Controller;

class Barcode extends \Bitrix\Main\Engine\Controller
{
    const PERMISSION_READ = 'D';
    public function isBarcodeExistAction(string $barcode, int $basketId, int $orderId, int $storeId)
    {
    }
    protected function checkPermission($permissionType)
    {
    }
    protected static function getApplication()
    {
    }
}