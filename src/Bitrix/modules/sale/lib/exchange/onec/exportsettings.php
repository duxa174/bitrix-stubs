<?php

namespace Bitrix\Sale\Exchange\OneC;

class ExportSettings extends \Bitrix\Sale\Exchange\OneC\SettingsBase implements \Bitrix\Sale\Exchange\ISettingsExport
{
    /**
     * @return array|null
     * @throws ArgumentNullException
     */
    protected static function loadCurrentSettings()
    {
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * @return string
     */
    public function getReplaceCurrency()
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     */
    public function groupPermissionFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     */
    public function finalStatusFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     */
    public function payedFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     */
    public function allowDeliveryFor($entityTypeId)
    {
    }
    /**
     * @return ISettingsExport
     */
    public static function getCurrent()
    {
    }
}