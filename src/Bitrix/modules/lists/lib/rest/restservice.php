<?php

namespace Bitrix\Lists\Rest;

class RestService extends \IRestService
{
    const SCOPE = "lists";
    public static function onRestServiceBuildDescription()
    {
    }
    public static function getIblockTypeId(array $params, $n, \CRestServer $server)
    {
    }
    public static function addLists(array $params, $n, \CRestServer $server)
    {
    }
    public static function getLists(array $params, $n, \CRestServer $server)
    {
    }
    public static function updateLists(array $params, $n, \CRestServer $server)
    {
    }
    public static function deleteLists(array $params, $n, \CRestServer $server)
    {
    }
    public static function addSection(array $params, $n, \CRestServer $server)
    {
    }
    public static function getSection(array $params, $n, \CRestServer $server)
    {
    }
    public static function updateSection(array $params, $n, \CRestServer $server)
    {
    }
    public static function deleteSection(array $params, $n, \CRestServer $server)
    {
    }
    public static function addField(array $params, $n, \CRestServer $server)
    {
    }
    public static function getFields(array $params, $n, \CRestServer $server)
    {
    }
    public static function updateField(array $params, $n, \CRestServer $server)
    {
    }
    public static function deleteField(array $params, $n, \CRestServer $server)
    {
    }
    public static function getFieldTypes(array $params, $n, \CRestServer $server)
    {
    }
    public static function addElement(array $params, $n, \CRestServer $server)
    {
    }
    public static function getElement(array $params, $n, \CRestServer $server)
    {
    }
    public static function updateElement(array $params, $n, \CRestServer $server)
    {
    }
    public static function deleteElement(array $params, $n, \CRestServer $server)
    {
    }
    public static function getFileUrl(array $params, $n, \CRestServer $server)
    {
    }
    private static function throwError(array $errors, $message = "", $code = "")
    {
    }
    private static function getSanitizeFilter($filter, $availableFields, $listCustomFields)
    {
    }
    /**
     * @deprecated Constants are no longer used.
     */
    const ENTITY_LISTS_CODE_PREFIX = "REST";
    const ERROR_REQUIRED_PARAMETERS_MISSING = "ERROR_REQUIRED_PARAMETERS_MISSING";
    const ERROR_IBLOCK_ALREADY_EXISTS = "ERROR_IBLOCK_ALREADY_EXISTS";
    const ERROR_SAVE_IBLOCK = "ERROR_SAVE_IBLOCK";
    const ERROR_IBLOCK_NOT_FOUND = "ERROR_IBLOCK_NOT_FOUND";
    const ERROR_SAVE_FIELD = "ERROR_SAVE_FIELD";
    const ERROR_PROPERTY_ALREADY_EXISTS = "ERROR_PROPERTY_ALREADY_EXISTS";
    const ERROR_SAVE_ELEMENT = "ERROR_SAVE_ELEMENT";
    const ERROR_DELETE_ELEMENT = "ERROR_DELETE_ELEMENT";
    const ERROR_BIZPROC = "ERROR_BIZPROC";
}