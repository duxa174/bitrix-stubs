<?php

class CIBlockSection extends \CAllIBlockSection
{
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool $bIncCnt
     * @param array $arSelect
     * @param array|false $arNavStartParams
     * @return CIBlockResult
     */
    public static function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array(), $bIncCnt = \false, $arSelect = array(), $arNavStartParams = \false)
    {
    }
    ///////////////////////////////////////////////////////////////////
    // Update list of sections w/o any events
    ///////////////////////////////////////////////////////////////////
    protected function UpdateList($arFields, $arFilter = array())
    {
    }
    /**
     * @param array $order
     * @param array $filter
     * @param array $select
     * @return bool
     */
    private static function checkUfFields(array $order, array $filter, array $select) : bool
    {
    }
}