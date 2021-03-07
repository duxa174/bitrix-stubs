<?php

/**
 * Class CUserTypeIBlockSection
 * @deprecated deprecated since main 20.0.800
 */
class CUserTypeIBlockSection extends \CUserTypeEnum
{
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
class CIBlockSectionEnum extends \CDBResult
{
    function getTreeList($iblockId, $activeFilter = 'N')
    {
    }
    function getNext($textHtmlAuto = \true, $useTilda = \true)
    {
    }
}