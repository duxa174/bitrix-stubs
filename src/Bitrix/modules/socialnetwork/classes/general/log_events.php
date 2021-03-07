<?php

class CAllSocNetLogEvents
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteNoDemand($userID)
    {
    }
    function DeleteByUserAndEntity($userID, $entityType, $entityID)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    function GetByID($ID)
    {
    }
    /***************************************/
    /**********      UTIL        ***********/
    /***************************************/
    public static function AutoSubscribe($userID, $entityType, $entityID)
    {
    }
    public static function GetSQL($user_id, $arMyEntities, $transport, $visible, $table_alias = "L")
    {
    }
    function GetSQLForEvent($entity_type, $entity_id, $event_id, $user_id, $transport = \false, $visible = \true, $arOfEntities = array())
    {
    }
}