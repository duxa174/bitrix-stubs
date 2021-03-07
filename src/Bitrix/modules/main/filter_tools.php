<?php

/*********************************************************************
							Фильтр
*********************************************************************/
function CheckFilterDates($date1, $date2, &$date1_wrong, &$date2_wrong, &$date2_less_date1)
{
}
function InitFilterEx($arName, $varName, $action = "set", $session = \true, $FilterLogic = "FILTER_logic")
{
}
function DelFilterEx($arName, $varName, $session = \true, $FilterLogic = "FILTER_logic")
{
}
function InitFilter($arName)
{
}
function DelFilter($arName)
{
}
function GetFilterHiddens($var = "filter_", $button = array("filter" => "Y", "set_filter" => "Y"))
{
}
function GetFilterParams($var = "filter_", $bDoHtmlEncode = \true, $button = array("filter" => "Y", "set_filter" => "Y"))
{
}
// устаревшая функция, оставлена для совместимости
function GetFilterStr($arr, $button = "set_filter")
{
}
function ShowExactMatchCheckbox($name, $title = \false)
{
}
function GetUrlFromArray($arr)
{
}
function ShowAddFavorite($filterName = \false, $btnName = "set_filter", $module = "statistic", $alt = \false)
{
}
function IsFiltered($strSqlSearch)
{
}
function ResetFilterLogic($FilterLogic = "FILTER_logic")
{
}
function ShowFilterLogicHelp()
{
}
function ShowLogicRadioBtn($FilterLogic = "FILTER_logic")
{
}
function GetFilterQuery($field, $val, $procent = "Y", $ex_sep = array(), $clob = "N", $div_fields = "Y", $clob_upper = "N")
{
}
function GetFilterSqlSearch($arSqlSearch = array(), $FilterLogic = "FILTER_logic")
{
}
function BeginFilter($sID, $bFilterSet, $bShowStatus = \true)
{
}
function EndFilter($sID = "")
{
}
function BeginNote($sParams = "")
{
}
function EndNote()
{
}
function ShowSubMenu($aMenu)
{
}
/*********************************************************************
							Сортировка
*********************************************************************/
function InitSorting($Path = \false, $sByVar = "by", $sOrderVar = "order")
{
}
function SortingEx($By, $Path = \false, $sByVar = "by", $sOrderVar = "order", $Anchor = "nav_start")
{
}