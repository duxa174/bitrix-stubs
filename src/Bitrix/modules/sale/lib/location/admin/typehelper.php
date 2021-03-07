<?php

namespace Bitrix\Sale\Location\Admin;

class TypeHelper extends \Bitrix\Sale\Location\Admin\NameHelper
{
    const LIST_PAGE_URL = 'sale_location_type_list.php';
    const EDIT_PAGE_URL = 'sale_location_type_edit.php';
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
    public static function getTypeCodeIdMapCached()
    {
    }
    public static function getTypes($params = array('LANGUAGE_ID' => LANGUAGE_ID))
    {
    }
}