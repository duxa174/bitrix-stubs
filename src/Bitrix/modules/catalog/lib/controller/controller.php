<?php

namespace Bitrix\Catalog\Controller;

class Controller extends \Bitrix\Rest\Integration\Controller\Base
{
    const IBLOCK_READ = 'iblock_admin_display';
    const IBLOCK_ELEMENT_READ = 'element_read';
    const IBLOCK_ELEMENT_EDIT = 'element_edit';
    const IBLOCK_ELEMENT_DELETE = 'element_delete';
    const IBLOCK_SECTION_READ = 'section_read';
    const IBLOCK_SECTION_EDIT = 'section_edit';
    const IBLOCK_SECTION_DELETE = 'section_delete';
    const IBLOCK_ELEMENT_EDIT_PRICE = 'element_edit_price';
    const IBLOCK_SECTION_SECTION_BIND = 'section_section_bind';
    const IBLOCK_ELEMENT_SECTION_BIND = 'section_element_bind';
    const IBLOCK_EDIT = 'iblock_edit';
    protected function createViewManager(\Bitrix\Main\Engine\Action $action)
    {
    }
    protected static function getApplication()
    {
    }
    protected static function getGlobalUser()
    {
    }
    protected static function getNavData($start, $orm = false)
    {
    }
}