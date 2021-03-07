<?php

namespace Bitrix\Sale\Exchange;

final class ManagerExport extends \Bitrix\Sale\Exchange\ManagerBase
{
    const SALE_MODE = 1;
    const B24_MODE = 2;
    const SALE_B24_MODE = 3;
    const B24_SALE_MODE = 4;
    /**
     * @return string
     */
    public static function getDirectionType()
    {
    }
    /**
     * @param ImportBase $entity
     */
    public static function configure(\Bitrix\Sale\Exchange\ImportBase $entity)
    {
    }
    /**
     * Add instance of this manager to collection
     * @param $typeId
     * @param ISettingsExport $settings
     * @return mixed
     * @internal
     */
    public static function registerInstance($typeId, \Bitrix\Sale\Exchange\ISettingsExport $settings)
    {
    }
    public static function isSaleMode()
    {
    }
    public static function isB24Mode()
    {
    }
    public static function isSaleB24Mode()
    {
    }
    public static function isB24SaleMode()
    {
    }
    public static function getMode()
    {
    }
    public static function isCRMCompatibility()
    {
    }
}