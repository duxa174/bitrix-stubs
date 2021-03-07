<?php

class CBitrixRestEntity extends \IRestService
{
    const ENTITY_IBLOCK_CODE_PREFIX = 'APP';
    const ERROR_ENTITY_ALREADY_EXISTS = 'ERROR_ENTITY_ALREADY_EXISTS';
    const ERROR_ENTITY_NOT_FOUND = 'ERROR_ENTITY_NOT_FOUND';
    const ERROR_SECTION_NOT_FOUND = 'ERROR_SECTION_NOT_FOUND';
    const ERROR_ITEM_NOT_FOUND = 'ERROR_ITEM_NOT_FOUND';
    const ERROR_PROPERTY_NOT_FOUND = 'ERROR_PROPERTY_NOT_FOUND';
    const ERROR_PROPERTY_ALREADY_EXISTS = 'ERROR_PROPERTY_ALREADY_EXISTS';
    const ERROR_UNSUPPORTED_PROPERTY_TYPE = 'ERROR_UNSUPPORTED_PROPERTY_TYPE';
    const ERROR_UNSUPPORTED_PROPERTY_TYPE_CHANGE = 'ERROR_UNSUPPORTED_PROPERTY_TYPE_CHANGE';
    private static $arAllowedOperations = array('', '!', '<', '<=', '>', '>=', '><', '!><', '?', '=', '!=', '%', '!%', '');
    public static function OnRestServiceBuildDescription()
    {
    }
    public static function entityAdd($params, $n, $server)
    {
    }
    public static function entityGet($params, $n, $server)
    {
    }
    public static function entityRights($params, $n, $server)
    {
    }
    public static function entityUpdate($params, $n, $server)
    {
    }
    public static function entityDelete($params, $n, $server)
    {
    }
    public static function entitySectionGet($params, $n, $server)
    {
    }
    public static function entitySectionAdd($params, $n, $server)
    {
    }
    public static function entitySectionUpdate($params, $n, $server)
    {
    }
    public static function entitySectionDelete($params, $n, $server)
    {
    }
    public static function entityItemGet($params, $n, $server)
    {
    }
    public static function entityItemAdd($params, $n, $server)
    {
    }
    public static function entityItemUpdate($params, $n, $server)
    {
    }
    public static function entityItemDelete($params, $n, $server)
    {
    }
    public static function entityItemPropertyGet($params, $n, $server)
    {
    }
    public static function entityItemPropertyAdd($params, $n, $server)
    {
    }
    public static function entityItemPropertyUpdate($params, $n, $server)
    {
    }
    public static function entityItemPropertyDelete($params, $n, $server)
    {
    }
    public static function Clean($appId)
    {
    }
    protected static function checkIblockType()
    {
    }
    protected static function getIBlock($code, $bSkipCheck = \false)
    {
    }
    protected static function getIBlocks($server)
    {
    }
    protected static function getItemProperty($property, $entity, $server)
    {
    }
    protected static function getItemProperties($entity, $server)
    {
    }
    protected static function checkParams(&$params)
    {
    }
    protected static function checkItemParams(&$params)
    {
    }
    protected static function checkSectionParams(&$params)
    {
    }
    protected static function checkItemPropertyParams(&$params)
    {
    }
    protected static function checkEntity($entity, $server)
    {
    }
    protected static function checkItemProperty($property, $entity, $server)
    {
    }
    protected static function parseEntity($iblock, \CRestServer $server)
    {
    }
    protected static function getEntityIBlockCode($entity, \CRestServer $server)
    {
    }
    protected static function getIBlockType()
    {
    }
    protected static function prepareItem($params, $arIBlock, $server)
    {
    }
    protected static function prepareSection($params, $arIBlock, $server)
    {
    }
    protected static function checkFilter($arFilter, $bChangeLogic = \true)
    {
    }
    protected static function checkSectionFilter($arFilter, $bChangeLogic = \true)
    {
    }
    protected static function checkRights($arRights)
    {
    }
    protected static function getFile($fileId)
    {
    }
}