<?php

/**
 * Class CUserTypeIBlockElement
 * @deprecated deprecated since main 20.0.800
 */
class CUserTypeIBlockElement extends \CUserTypeEnum
{
    private static $iblockIncluded = \null;
    function getUserTypeDescription()
    {
    }
    function prepareSettings($userField)
    {
    }
    function getSettingsHtml($userField, $additionalParameters, $varsFromForm)
    {
    }
    function checkFields($userField, $value)
    {
    }
    function getList($userField)
    {
    }
    protected static function getEnumList(&$userField, $additionalParameters = array())
    {
    }
    function onSearchIndex($userField)
    {
    }
    public static function isIblockIncluded() : bool
    {
    }
}
class CIBlockElementEnum extends \CDBResult
{
    function getTreeList($iblockId, $activeFilter = 'N')
    {
    }
    function getNext($textHtmlAuto = \true, $useTilda = \true)
    {
    }
}
function getIblockElementLinkById($id)
{
}