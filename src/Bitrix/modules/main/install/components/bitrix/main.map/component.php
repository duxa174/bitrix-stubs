<?php

/**
 * @var array $arParams
 * @var array $arResult
 * @global CUser $USER
 * @global CMain $APPLICATION
 */
$arrMainMenu = \explode(",", \COption::GetOptionString("main", "map_top_menu_type", "top"));
function GetTree($dir, $max_depth, $get_description = \false)
{
}
function GetTreeRecursive($PARENT_PATH, $level, $max_depth, $get_description = \false)
{
}
function CreateMapStructure($arMap)
{
}