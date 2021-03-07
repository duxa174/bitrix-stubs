<?php

namespace Bitrix\Sale\Location\Admin;

class SiteLocationHelper extends \Bitrix\Sale\Location\Admin\Helper
{
    const LIST_PAGE_URL = 'sale_location_zone_list.php';
    const EDIT_PAGE_URL = 'sale_location_zone_edit.php';
    #####################################
    #### Entity settings
    #####################################
    /**
     * Function returns class name for an attached entity
     * @return string Entity class name
     */
    public function getEntityRoadMap()
    {
    }
    #####################################
    #### CRUD wrappers
    #####################################
    public static function proxyUpdateRequest($data)
    {
    }
    public static function proxyListRequest($page)
    {
    }
    // block add handle, nothing to add
    public static function add($data)
    {
    }
    // specific updater
    public static function update($siteId, $data)
    {
    }
    // block delete handle, nothing to delete
    public static function delete($primary)
    {
    }
    // avoid paging here, kz its based on ID which is absent for this table
    public static function getList($parameters = array(), $tableId = false, $navigation = 20, $params = array())
    {
    }
    public static function getFormData($id)
    {
    }
    public static function getNameToDisplay($siteId)
    {
    }
    #####################################
    #### Entity-specific
    #####################################
    public static function tryParseSiteId($sid)
    {
    }
}