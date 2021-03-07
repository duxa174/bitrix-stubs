<?php

namespace Bitrix\Sale\Controller;

class Tracking extends \Bitrix\Main\Engine\Controller
{
    private $manager;
    const PERMISSION_READ = 'D';
    const PERMISSION_WRITE = 'W';
    public function __construct(\Bitrix\Main\Request $request = null)
    {
    }
    public function getStatusByShipmentIdAction(int $shipmentId, string $trackingNumber = '')
    {
    }
    protected function checkPermission($permissionType)
    {
    }
    protected static function getApplication()
    {
    }
}