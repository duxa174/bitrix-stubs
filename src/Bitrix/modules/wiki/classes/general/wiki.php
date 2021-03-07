<?php

class CWiki
{
    /**
     *
     *
     * @var CIBlockElement
     */
    var $cIB_E = \null;
    const PAGE_UPDATED_CACHE_ID = "WIKI_PAGE_UPDATED_";
    const GET_BY_NAME_CACHE_ID = "WIKI_BY_NAME_CACHE_ID_";
    const CWIKI_CACHE_TTL = 36000000;
    /** @var ErrorCollection */
    protected $errorCollection;
    function __construct()
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function Recover($HISTORY_ID, $ID, $IBLOCK_ID)
    {
    }
    function UpdateHistory($ID, $IBLOCK_ID, $modifyComment = \false)
    {
    }
    function UpdateCategory($ID, $IBLOCK_ID, $arCats)
    {
    }
    //TODO: Delete (check) all comments
    function Delete($ID, $IBLOCK_ID)
    {
    }
    function AddImage($ID, $IBLOCK_ID, $arImage)
    {
    }
    function DeleteImage($IMAGE_ID, $ID, $IBLOCK_ID)
    {
    }
    function Rename($ID, $arFields, $bUpdateSearch = \true)
    {
    }
    /**
     * Renames inner links, and categories on wiki pages
     * alternatively you must do that manualy, after page, or catgory was renamed.
     * @param int $iBlockId (mandatory)- id of iblock witch contain page, or category.
     * @param str $oldName (mandatory)- old page or category name.
     * @param str $newName (mandatory)- new page or category name.
     * @param int $iBlockSectId (optional) - id of iBlock section witch contain page, or category.
     *			if wiki used with socnet groups, this param must be setted, otherwise all pages of all soc. groups
     *			will be changed.
     * @return int the amount of changed pages.
     */
    function RenameLinkOnPages($iBlockId, $oldName, $newName, $iBlockSectId = \false)
    {
    }
    function RenameCategoryOnPage($pageText, $oldCategoryName, $newCategoryName)
    {
    }
    static function SetDefaultPage($IBLOCK_ID, $NAME)
    {
    }
    static function GetDefaultPage($IBLOCK_ID)
    {
    }
    function GetCategory($NAME, $IBLOCK_ID)
    {
    }
    /**
     *
     *
     *
     * @param int $ID
     * @return array
     */
    public static function GetElementById($ID, $arFilter)
    {
    }
    /**
     * @param string $NAME (mandatory) - the name of page
     * @param array $arFilter (mandatory) - the filter for CIBlockElement::GetList
     * @param array $arComponentParams (optional) - params of the calling wiki component
     *		  using indexes: CACHE_TIME, PATH_TO_SEARCH, IN_COMPLEX, SEF_MODE, OPER_VAR, ELEMENT_NAME
     *		  necessary for: building search tag links
     * @return array
     */
    public static function GetElementByName($NAME, $arFilter, $arComponentParams = array())
    {
    }
    /**
     * @return \Bitrix\Main\ErrorCollection
     */
    public function getErrors()
    {
    }
    public function CleanCacheById($ID, $iBlockId = \false)
    {
    }
    public function CleanCache($ID = \false, $Name = \false, $iBlockId = \false)
    {
    }
    private static function GetIdForCacheByName($iBlockId, $iSocCatId, $elementName)
    {
    }
    public static function UnMarkPageAsUpdated($iBlockId, $iSocCatId, $name)
    {
    }
    public static function IsPageUpdated($iBlockId, $iSocCatId, $name, $cacheTime = self::CWIKI_CACHE_TTL)
    {
    }
    private static function MarkPageAsUpdated($iBlockId, $iSocCatId, $name)
    {
    }
    private static function GetCacheIdForPageUpdated($iBlockId, $iSocCatId, $name)
    {
    }
}