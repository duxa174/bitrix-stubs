<?php

namespace Bitrix\Sale\Location\Admin;

abstract class NameHelper extends \Bitrix\Sale\Location\Admin\Helper
{
    #####################################
    #### Entity settings
    #####################################
    public static function getEntityRoadCode()
    {
    }
    public static function getColumns($page)
    {
    }
    // get part of the whole field map for responsibility zone of the current entity
    // call this only with self::
    public static function getMap($page)
    {
    }
    #####################################
    #### CRUD wrappers
    #####################################
    // generalized filter to orm filter proxy
    public static function getParametersForList($proxed)
    {
    }
    ##############################################
    ##############################################
    ##############################################
    public static function validateUpdateRequest($data)
    {
    }
    public static function proxyUpdateRequest($data)
    {
    }
    // an adapter from CAdminList to ORM getList() logic
    public static function proxyListRequest($page)
    {
    }
    public static function getNameToDisplay($id)
    {
    }
    #####################################
    #### Entity-specific
    #####################################
    public static function getLanguageList()
    {
    }
    public static function getTranslatedName($names, $languageId)
    {
    }
    // extracts NAME data from known data, rather than do a separate query for it
    public static function extractNames(&$data)
    {
    }
    public static function checkIsNameField($code)
    {
    }
    public static function getNameMap()
    {
    }
    #####################################
    #### Utilitary functions
    #####################################
    public static function translitFromUTF8($string)
    {
    }
    public static function mapLanguage($lid)
    {
    }
}