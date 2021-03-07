<?php

class CAdminListColumn
{
    public $id = "";
    public $info = array();
    function __construct($id, $info)
    {
    }
    function getRowView($arRes)
    {
    }
    function getRowEdit($arRes)
    {
    }
    function getFilterInput()
    {
    }
}
class CAdminListColumnList extends \CAdminListColumn
{
    public $list = array();
    function __construct($id, $info, array $list = array())
    {
    }
    function getRowView($arRes)
    {
    }
    function getRowEdit($arRes)
    {
    }
    function getFilterInput()
    {
    }
}
class CAdminListColumnNumber extends \CAdminListColumn
{
    public $precision = 0;
    function __construct($id, $info, $precision)
    {
    }
    function getRowView($arRes)
    {
    }
}
class CAdminListPage
{
    protected $pageTitle = "";
    protected $sTableID = "";
    protected $navLabel = "";
    protected $sort = \null;
    protected $list = \null;
    protected $data = \null;
    protected $columns = array();
    /**
     * @param string $pageTitle
     * @param string $sTableID
     * @param boolean|array[] $arSort
     * @param string $navLabel
     */
    function __construct($pageTitle, $sTableID, $arSort = \false, $navLabel = "")
    {
    }
    function addColumn(\CAdminListColumn $column)
    {
    }
    function initFilter()
    {
    }
    function getFilter()
    {
    }
    function getHeaders()
    {
    }
    function getSelectedFields()
    {
    }
    function getDataSource($arOrder, $arFilter, $arSelect)
    {
    }
    function getOrder()
    {
    }
    function getFooter()
    {
    }
    function getContextMenu()
    {
    }
    function displayFilter()
    {
    }
    function show()
    {
    }
}
/**
 * Formats float number according to flags.
 *
 * @param float $num Number value to be formatted.
 * @param integer $dec How many digits after decimal point.
 * @param integer $mode Output mode.
 *
 * @return string
**/
function perfmon_NumberFormat($num, $dec = 2, $mode = 0)
{
}