<?php

/** @var CMain $APPLICATION */
$STAT_RIGHT = $APPLICATION->GetGroupRight("statistic");
function advlist_format_alt($value, $total, $title)
{
}
function advlist_format_link($value, $is_back, $group, $alt, $url = "", $show_money)
{
}
function event_format_link($value, $total, $is_back, $group, $url, $show_money)
{
}
/**
 * @param CAdminList $lAdmin
 * @param boolean $show_money
 * @param boolean $get_total_events
 *
 * @return integer
 */
function create_event_list(&$lAdmin, $show_money = \false, $get_total_events = \false)
{
}