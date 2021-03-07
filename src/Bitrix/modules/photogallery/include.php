<?php

// Spisok oshibok
// fatal'nye oshibki
// 100 - oshibka pri proverke sessii
// ne najdeny elementy
// 101 - ne najden infoblok
// 102 - ne najdena sekciya
// 103 - ne najden element infobloka
// 104 - ne najdena fotogalereya
// 105 - ne najden pol'zovatel'
// net prav
// 110 - dlya dostupa neobhodimo avtorizovat'sya
// 111 - net dostupa k infobloku
// 112 - net prav dlya sozdaniya galerei
// 113 - net prav dlya sozdaniya ewe odnoj galerei (single)
// Oshibki dannyh
// 200 - pustoj zapros
// 201 - ne ukazany obyazatel'nye parametry
// Pol'zovatel'skie oshibki (500-600)
function PhotoShowError($arError, $arShowFields = array("ID", "NAME"), $bShowErrorCode = \false)
{
}
function PhotoGetBrowser()
{
}
function PhotoDateFormat($format = "", $timestamp = "")
{
}
function PhotoFormatDate($strDate, $format = "DD.MM.YYYY HH:MI:SS", $new_format = "DD.MM.YYYY HH:MI:SS")
{
}
function PClearComponentCache($components, $arSite = array())
{
}
function PClearComponentCacheEx($iblockId = \false, $arSections = array(), $arGalleries = array(), $arUsers = array(), $clearCommon = \true)
{
}