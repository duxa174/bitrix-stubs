<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2016 Bitrix
 */
class CAdminFilter
{
    public $id;
    private $popup;
    private $arItems = array();
    private $arOptFlt = array();
    private static $defaultSort = 100;
    private static $defaultPresetSort = 50;
    private $url = \false;
    private $tableId = \false;
    const SESS_PARAMS_NAME = "main.adminFilter";
    public function __construct($id, $popup = \false, $arExtraParams = array())
    {
    }
    private function err_mess()
    {
    }
    private function AddItem($arItem, $bInsertFirst = \false)
    {
    }
    private function CheckFields($arFields)
    {
    }
    private function FieldsExcess($arFields)
    {
    }
    private function FieldsDelHiddenEmpty($arFields)
    {
    }
    /**
     * Sets default rows, witch will be shown to user when he comes to page for the first time/
     * This function must be called on admin page with the filter initialization.
     * For example: $oFilter->SetDefaultRows("find_created, find_menu_id");
     *
     * @param str rows - rows identificators separated by commas ("rowid_1, rowid_2, ...")
     * @return bool
     */
    public function SetDefaultRows($rows)
    {
    }
    public static function SetDefaultRowsOption($filterId, $rows)
    {
    }
    /**
     * Sets new filter tab with collection of fields and values
     * This function must be called on admin page with the filter initialization.
     * For example: $oFilter->AddPreset(array(
     *									"ID" => "preset1",
     *									"NAME" => "Test filter",
     *									"SORT" => 100,
     *									"SORT_FIELD" => array ("name" => "asc"),
     *									"FIELDS" => array(
     *										"find_name"=>"Smith",
     *										"find_id"=>"15"
     *										)
     *									));
     *
     * @param array $arFields = array(
     *								"ID" =>  filter id,
     *								"NAME" => filter name,
     *								"SORT" = > filter sorting order. Default value - 100, for presets - 50;
     *								"SORT_FIELD" => array("Table column name" => "sort order"),
     *								"FIELDS" => array(
     *											"field1_name" => "field1_value",
     *											"field2_name" => "field2_value",
     *											...
     * 												)
     *							)
     * @return bool
     */
    public function AddPreset($arFields)
    {
    }
    private function FindItemByPresetId($strID)
    {
    }
    private function FindItemByID($strID)
    {
    }
    public function AddPresetToBase($arFields)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function GetList($aSort = array(), $arFilter = array(), $getCommon = \true)
    {
    }
    private static function Cmp($a, $b)
    {
    }
    public function Begin()
    {
    }
    /**
     * @param bool|array $aParams
     */
    public function Buttons($aParams = \false)
    {
    }
    public function End()
    {
    }
    //experemental
    //extracting filter params from cookie and transfer them to session
    private function GetParamsFromCookie()
    {
    }
    //experemental
    private function IsFiltered()
    {
    }
    private function PrintSaveOptionsDIV()
    {
    }
    public static function UnEscape($aFilter)
    {
    }
}