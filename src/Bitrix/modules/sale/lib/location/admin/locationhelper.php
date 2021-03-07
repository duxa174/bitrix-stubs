<?php

namespace Bitrix\Sale\Location\Admin;

final class LocationHelper extends \Bitrix\Sale\Location\Admin\NameHelper
{
    const LIST_PAGE_URL = 'sale_location_node_list.php';
    const EDIT_PAGE_URL = 'sale_location_node_edit.php';
    const MENU_MAX_ITEMS_IN = 100;
    const MENU_LOCATION_PARENT_TAG = 'menu_sale_location_tree';
    const MENU_ITEMS_QUERY_STRING_TAG = 'menu_sale_location_tree';
    const MENU_ITEMS_QUERY_STRING_DELIMITER = ':';
    const URL_PARAM_PARENT_ID = 'PARENT_ID';
    const URL_PARAM_ID = 'id';
    #####################################
    #### Entity settings
    #####################################
    /**
     * Function returns instructions from where and which columns we take to show in UI
     * @return string Entity class name
     */
    public function getEntityRoadMap()
    {
    }
    ##############################################
    ##############################################
    ##############################################
    public static function getFilterColumns()
    {
    }
    public static function getListGridColumns()
    {
    }
    // generalized filter to orm filter proxy
    public static function getParametersForList($proxed)
    {
    }
    public static function getFormData($id)
    {
    }
    ##############################################
    ##############################################
    ##############################################
    // high-level validators used when accepting data typed in form. There can be some misspelling, etc, so additional buisness-logic required
    public static function validateUpdateRequest($data)
    {
    }
    public static function proxyUpdateRequest($data)
    {
    }
    public static function proxyListRequest($page = 'list')
    {
    }
    // crud over entity: update
    public static function update($primary, $data, $batch = false)
    {
    }
    // crud over entity: delete
    public static function delete($primary, $batch = false)
    {
    }
    #####################################
    #### Entity-specific
    #####################################
    public static function checkFirstImportDone()
    {
    }
    public static function getParentId($id)
    {
    }
    public static function getExternalData($id)
    {
    }
    public static function getExternalServicesList()
    {
    }
    /**
     * @deprecated
     * 
     * Use TypeHelper::getTypes() instead
     */
    public static function getTypeList()
    {
    }
    public static function getExternalMap()
    {
    }
    public static function checkRequestIsMenuRequest()
    {
    }
    public static function getLocationSubMenu()
    {
    }
    // transcendental thing that makes location menu work
    public static function packItemsQueryString($parameters = array())
    {
    }
    public static function unPackItemsQueryString()
    {
    }
    public static function getListUrl($parent = false, $parameters = array())
    {
    }
    public static function getEditUrl($node = false, $parameters = array())
    {
    }
    public static function appendMenuChildren(&$attachTo, $attachWhat, $index, $queryParams)
    {
    }
    public static function getLocationStringById($primary, $behaviour = array('INVERSE' => false, 'DELIMITER' => ', ', 'LANGUAGE_ID' => LANGUAGE_ID))
    {
    }
    public static function getLocationStringByCode($primary, $behaviour = array('INVERSE' => false, 'DELIMITER' => ', ', 'LANGUAGE_ID' => LANGUAGE_ID))
    {
    }
    protected static function getLocationStringByCondition($condition, $behaviour = array('INVERSE' => false, 'DELIMITER' => ', ', 'LANGUAGE_ID' => LANGUAGE_ID))
    {
    }
    public static function getLocationsByZip($zip, $parameters = array())
    {
    }
    public static function getZipByLocation($locationCode, $parameters = array())
    {
    }
    public static function checkLocationMigrated()
    {
    }
    // checks if new location enabled or not
    public static function checkLocationEnabled()
    {
    }
    // informers
    public static function informAdminLocationDatabaseFailure()
    {
    }
    public static function deleteInformer($informerTag)
    {
    }
    /**
     * @deprecated
     */
    public static function getLocationPathDisplay($primary)
    {
    }
}