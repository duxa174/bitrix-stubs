<?php

class CIBlockElement extends \CAllIBlockElement
{
    ///////////////////////////////////////////////////////////////////
    // Function returns lock status of element (red, yellow, green)
    ///////////////////////////////////////////////////////////////////
    public static function WF_GetLockStatus($ID, &$locked_by, &$date_lock)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Locking element
    ///////////////////////////////////////////////////////////////////
    public static function WF_Lock($LAST_ID, $bWorkFlow = \true)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Unlock element
    ///////////////////////////////////////////////////////////////////
    public static function WF_UnLock($LAST_ID, $bWorkFlow = \true)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // List the history items
    ///////////////////////////////////////////////////////////////////
    function WF_GetHistoryList($ELEMENT_ID, &$by, &$order, $arFilter = array(), &$is_filtered)
    {
    }
    function prepareSql($arSelectFields = array(), $arFilter = array(), $arGroupBy = \false, $arOrder = array("SORT" => "ASC"))
    {
    }
    /**
     * List of elements.
     *
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return integer|CIBlockResult
     */
    public static function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update element function
    ///////////////////////////////////////////////////////////////////
    function Update($ID, $arFields, $bWorkFlow = \false, $bUpdateSearch = \true, $bResizePictures = \false, $bCheckDiskQuota = \true)
    {
    }
    function SetPropertyValues($ELEMENT_ID, $IBLOCK_ID, $PROPERTY_VALUES, $PROPERTY_CODE = \false)
    {
    }
    function GetRandFunction()
    {
    }
    function GetShowedFunction()
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update list of elements w/o any events
    ///////////////////////////////////////////////////////////////////
    protected function UpdateList($arFields, $arFilter = array())
    {
    }
    /**
     * @param mixed $order
     * @return string
     */
    protected function getIdOrder($order)
    {
    }
}