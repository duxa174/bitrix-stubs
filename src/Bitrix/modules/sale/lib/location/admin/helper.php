<?php

namespace Bitrix\Sale\Location\Admin;

abstract class Helper
{
    const DEBUG_MODE_OPT = 'location2_debug_mode';
    const IMPORT_PAGE_URL = 'sale_location_import.php';
    const REINDEX_PAGE_URL = 'sale_location_reindex.php';
    const MIGRATION_PAGE_URL = 'sale_location_migration.php';
    const LOCATION_LINK_DATA_CACHE_TAG = 'sale-location-data';
    #####################################
    #### Entity settings
    #####################################
    public abstract function getEntityRoadMap();
    public static function getEntityRoadCode()
    {
    }
    // this should be overlapped for each ancestor
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
    // columns shown in all grids
    public static function getListGridColumns()
    {
    }
    // columns shown in all filters
    public static function getFilterColumns()
    {
    }
    // columns shown in all forms
    public static function getDetailPageRows()
    {
    }
    // generalized filter to orm filter proxy
    public static function getParametersForList($proxed)
    {
    }
    /*
     * $parameters: array of keys: FILTER (generalized), ID, OPERATION
     */
    public static function performGridOperations($parameters)
    {
    }
    // get data to display in a form
    public static function getFormData($id)
    {
    }
    public static function makeSafeDisplay(&$value, $code)
    {
    }
    ##############################################
    ##############################################
    ##############################################
    public static function validateUpdateRequest($data)
    {
    }
    // this function could be much more complicated in the derivative classes
    public static function proxyUpdateRequest($data)
    {
    }
    // an adapter from CAdminList + CAdminFilter to ORM getList() logic
    // deprecated: too strong relation with admin grid, replaced with getParametersForList
    public static function proxyListRequest($page)
    {
    }
    // crud over entity: add
    public static function add($data)
    {
    }
    // crud over entity: update
    public static function update($primary, $data)
    {
    }
    // crud over entity: delete
    public static function delete($primary)
    {
    }
    // function calculates limit and offset for sql select query, based on current request and session
    // variables, then forms fake old-style database result
    public static function getList($parameters = array(), $tableId = false, $navigation = 20, $params = array())
    {
    }
    public static function convertToArray($data)
    {
    }
    // deprecated: not optimal
    public static function getIdsByFilter($listFilter)
    {
    }
    public static function getPrimaryFieldName()
    {
    }
    // returns element name by it`s primary
    public static function getNameToDisplay($id)
    {
    }
    public static function getListUrl($parameters = array())
    {
    }
    public static function getEditUrl($parameters = array())
    {
    }
    public static function getImportUrl()
    {
    }
    public static function getReindexUrl()
    {
    }
    public static function getMigrationUrl()
    {
    }
    public static function getUrl($page, $parameters = array())
    {
    }
    #####################################
    #### Utilily methods for CRUD
    #####################################
    // deprecated: too strong relation with admin grid
    public static function checkUseFilter()
    {
    }
    public static function readMap($entityRoadCode, $page = 'list')
    {
    }
    protected static function getFilterModifier($type)
    {
    }
    protected static function packUrlParameters($parameters = array())
    {
    }
    protected static function getEntityClass($code = '')
    {
    }
    public static function getWidgetAppearance()
    {
    }
    protected static function normalizeList($list, $expectNumeric = true)
    {
    }
    // proxy between $_REQUEST and resulting array to save links between entites and locations
    public static function prepareLinksForSaving($connectorClass, $links)
    {
    }
    public static function resetLocationsForEntity($entityId, $locations, $entityName, $expectCodes = false)
    {
    }
}