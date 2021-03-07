<?php

class CPerfmonHitList extends \CAdminListPage
{
    function getSelectedFields()
    {
    }
    function getDataSource($arOrder, $arFilter, $arSelect)
    {
    }
    function getFooter()
    {
    }
}
class CPerfmonHitListColumnFullDate extends \CAdminListColumn
{
    function getRowView($arRes)
    {
    }
}
class CPerfmonListColumnRequestUri extends \CAdminListColumn
{
    public $max_display_url = 0;
    function __construct($id, $info, $max_display_url)
    {
    }
    function getRowView($arRes)
    {
    }
}
class CPerfmonListColumnTemplate extends \CAdminListColumnNumber
{
    public $template = "";
    function __construct($id, $info, $precision, $template)
    {
    }
    function getRowView($arRes)
    {
    }
    function replace($match)
    {
    }
}