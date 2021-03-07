<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */
/*******************************************************
Converts ISO to UNICODE
********************************************************/
function iso2uni($isoline)
{
}
/*******************************************************
Creates image to draw on
********************************************************/
function CreateImageHandle($width, $height, $background = "FFFFFF", $truecolor = \true)
{
}
/******************************************************
Send proper headers for image
*******************************************************/
function ShowImageHeader($ImageHandle)
{
}
/******************************************************
Returns some color
*******************************************************/
function GetArrSaveDecColor($arr)
{
}
function GetNextRGB($base_color, $total)
{
}
function GetBNextRGB($base_color, $total, $start_color = "999900", $end_color = "99FFFF")
{
}
/*******************************************************
Graph data debug
*******************************************************/
function EchoGraphData($arrayX, $MinX, $MaxX, $arrayY, $MinY, $MaxY, $arrX, $arrY, $die = \true)
{
}
/*******************************************************
Makes proper X axis (date)
*******************************************************/
function GetArrayX($arrX, &$MinX, &$MaxX, $max_grid = 15, $min_grid = 10)
{
}
function GetArrayY($arrY, &$MinY, &$MaxY, $max_grid = 15, $first_null = "Y", $integers = \false)
{
}
/******************************************************************************
* $colorString - Color. Example 'FFFFFF' or '#FF0000'
* ReColor - function converting HEX to DEC color
******************************************************************************/
function ReColor($colorString)
{
}
function DrawCoordinatGrid($arrayX, $arrayY, $width, $height, $ImageHandle, $bgColor = "FFFFFF", $gColor = 'B1B1B1', $Color = "000000", $dD = 15, $FontWidth = 2, $arrTTF_FONT = \false)
{
}
function Bar_Diagram($ImageHandle, $arData, $MinY, $MaxY, $gridInfo)
{
}
function Graf($arrayX, $arrayY, $ImageHandle, $MinX, $MaxX, $MinY, $MaxY, $Color = 'FF0000', $dashed = "N", $thikness = 2, $antialiase = \true)
{
}
function Draw_Sector($ImageHandle, $start, $end, $color, $diameter, $centerX, $centerY)
{
}
function Circular_Diagram($ImageHandle, $arr, $background_color, $diameter, $centerX, $centerY, $antialiase = \true)
{
}
function Clean_Circular_Diagram($ImageHandle, $background_color, $diameter, $centerX, $centerY)
{
}
function _a_set_pixel($im, $x, $y, $filled, $fgcolors)
{
}
function _a_frac($x)
{
}
function _a_draw_line($im, $x1, $y1, $x2, $y2, $fgcolors, $dashed = "N", $dash = 5, $white = 2)
{
}
function _a_draw_ellipse($im, $x1, $y1, $x2, $y2, $fgcolors, $half = \false)
{
}
function getSafeColors()
{
}