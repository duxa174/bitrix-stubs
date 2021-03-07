<?php

class CSaleDelivery2PaySystem
{
    public static $arFirstDS = array();
    public static $arFirstPS = array();
    protected static function convertDeliveryIds($oldDeliveryIds = array(), $oldProfiles = array())
    {
    }
    public static function GetList($arFilter = array(), $arGroupBy = \false, $arSelectFields = array())
    {
    }
    protected static function isRecordExists($dlvId, $profile, $paySystemId, $records)
    {
    }
    protected static function getFullDeliveryList()
    {
    }
    protected static function getDeliveryChildrenList()
    {
    }
    protected static function getFullPaySystemList()
    {
    }
    public static function isPaySystemApplicable($paySystemId, $deliveryId)
    {
    }
    public static function UpdateDelivery($ID, $arFields)
    {
    }
    /**
     * UpdatePaySystem
     *
     * @param int $ID Pay system id.
     * @param array $arFields delivery idenificators.
     *
     * @return bool true if success or false otherwise.
     */
    public static function UpdatePaySystem($ID, $arFields)
    {
    }
    public static function Delete($arFilter)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function convertEmptyAllAgent()
    {
    }
}