<?php

namespace Bitrix\Sale\Location\Admin;

class GroupHelper extends \Bitrix\Sale\Location\Admin\NameHelper
{
    const LIST_PAGE_URL = 'sale_location_group_list.php';
    const EDIT_PAGE_URL = 'sale_location_group_edit.php';
    #####################################
    #### Entity settings
    #####################################
    /**
     * Function returns class name for an attached entity
     * 
     * @return string Entity class name
     */
    public function getEntityRoadMap()
    {
    }
    #####################################
    #### CRUD wrappers
    #####################################
    public static function add($data)
    {
    }
    public static function update($gId, $data)
    {
    }
    public static function updateFields($gId, $data)
    {
    }
    public static function delete($gId)
    {
    }
}