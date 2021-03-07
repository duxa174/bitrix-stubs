<?php

/*
$arTest = array(
	"http://bsm6.business.ru.mysql.max/bitrix/admin/php_command_line.php?lang=ru", //ASCII
	"http://www.yandex.ru/yandsearch?text=%D0%B1%D1%8B%D0%BB%D0%BE+", //Yndex utf
	"http://www.yandex.ru/yandsearch?text=%E1%E8%F2&rpt=rad", //Yandex koi
	"http://www.google.cn/search?hl=zh-CN&ie=GB2312&q=%CB%F9%D3%D0%CD%F8%D2%B3&btnG=Google+%CB%D1%CB%F7&meta=", //China multibyte
	"http://www.google.ru/search?hl=ru&q=%D0%BF%D1%80%D0%B8%D0%B2%D0%B5%D1%82&btnG=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA+%D0%B2+Google&lr=&aq=f", //russian utf
);
foreach($arTest as $test)
{
	echo $test,":",(is_utf8_url($test)? "Y": "N"),"<hr>\n";
}
*/
class CStatisticSort
{
    var $field = \false;
    function __construct($field = "")
    {
    }
    public static function Sort(&$ar, $field)
    {
    }
    function Compare($ar1, $ar2)
    {
    }
}
// fix HTTP_REFERER, r1, r2 for  google ads
function __GoogleAd($set_new_adv = \false, $r1 = \false, $r2 = \false, $s = "http://pagead2.googlesyndication.com/")
{
}
// returns referer site parameters
function __GetReferringSite(&$protocol, &$server_name, &$server_name_wo_port, &$PAGE_FROM, $URL_FROM = \false)
{
}
// referer1 and referer2 initialization
function __SetReferer($referer, $syn)
{
}
function __SetNoKeepStatistics()
{
}
function __SortLinkStat($ar1, $ar2)
{
}
function __IsHiddenLink($link)
{
}
function __ModifyATags($matches)
{
}
function GetCookieString($arrCookie = \false)
{
}
function __GetCurrentPage()
{
}
function __GetCurrentDir()
{
}
function __GetPage($page = \false, $with_imp_params = \true, $curdir = \false)
{
}
function __GetFullCurPage($page = \false, $with_imp_params = \true)
{
}
function __GetFullReferer($referer = \false)
{
}
function __GetFullRequestUri($url = \false, $host = \false, $port = \false, $protocol = \false)
{
}
// returns base currency
function GetStatisticBaseCurrency()
{
}
function CleanUpResultCsv(&$item)
{
}
function PrepareResultQuotes(&$item)
{
}
function LoadEventsBySteps($csvfile, $time_step, $next_line, &$step_processed, &$step_loaded, &$step_duplicate, $check_unique = "Y", $base_currency = "", &$next_pos)
{
}
function GetStatPathID($URL, $PREV_PATH_ID = "")
{
}
function stat_session_register($var_name)
{
}
function get_guest_md5()
{
}
function GetEventSiteID()
{
}
function GetStatGroupSiteID()
{
}
function SendDailyStatistics()
{
}
function crc32ex($s)
{
}
function AdminListCheckDate(&$lAdmin, $arDates)
{
}
function StatAdminListFormatURL($url, $arOptions = array())
{
}
function is_utf8_url($url)
{
}