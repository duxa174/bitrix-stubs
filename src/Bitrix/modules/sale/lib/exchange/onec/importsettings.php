<?php

namespace Bitrix\Sale\Exchange\OneC;

class ImportSettings extends \Bitrix\Sale\Exchange\OneC\SettingsBase implements \Bitrix\Sale\Exchange\ISettingsImport
{
    /**
     * @return array|null
     * @throws Main\ArgumentNullException
     */
    protected static function loadCurrentSettings()
    {
    }
    /**
     * @param $entityTypeId
     * @return bool
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function isImportableFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return mixed
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function paySystemIdFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return mixed
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function paySystemIdDefaultFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return mixed
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function shipmentServiceFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return mixed
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function shipmentServiceDefaultFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function finalStatusIdFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function finalStatusOnDeliveryFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function changeStatusFor($entityTypeId)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function canCreateOrder($entityTypeId)
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
    public function getCurrency()
    {
    }
    /**
     * @param $entityTypeId
     * @return array
     * @throws Main\ArgumentTypeException
     * @throws Main\NotSupportedException
     */
    public function getCollisionResolve($entityTypeId)
    {
    }
    /**
     * @return Exchange\ISettingsImport
     */
    public static function getCurrent()
    {
    }
}