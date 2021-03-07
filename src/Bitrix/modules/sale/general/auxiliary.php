<?php

/***********************************************************************/
/***********  CSaleAuxiliary  ******************************************/
/***********************************************************************/
class CAllSaleAuxiliary
{
    function PrepareItemMD54Where($val, $key, $operation, $negative, $field, &$arField, &$arFilter)
    {
    }
    //********** CHECK **************//
    function CheckAccess($userID, $itemMD5, $periodLength, $periodType)
    {
    }
    //********** ADD, UPDATE, DELETE **************//
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteByUserID($userID)
    {
    }
    //********** EVENTS **************//
    function OnUserDelete($userID)
    {
    }
    //********** AGENTS **************//
    function DeleteOldAgent($periodLength, $periodType)
    {
    }
}