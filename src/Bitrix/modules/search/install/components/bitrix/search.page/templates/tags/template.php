<?php

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$arCloudParams = array("SEARCH" => $arResult["REQUEST"]["~QUERY"], "TAGS" => $arResult["REQUEST"]["~TAGS"], "CHECK_DATES" => $arParams["CHECK_DATES"], "arrFILTER" => $arParams["arrFILTER"], "SORT" => $arParams["TAGS_SORT"], "PAGE_ELEMENTS" => $arParams["TAGS_PAGE_ELEMENTS"], "PERIOD" => $arParams["TAGS_PERIOD"], "URL_SEARCH" => $arParams["TAGS_URL_SEARCH"], "TAGS_INHERIT" => $arParams["TAGS_INHERIT"], "FONT_MAX" => $arParams["FONT_MAX"], "FONT_MIN" => $arParams["FONT_MIN"], "COLOR_NEW" => $arParams["COLOR_NEW"], "COLOR_OLD" => $arParams["COLOR_OLD"], "PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"], "SHOW_CHAIN" => $arParams["SHOW_CHAIN"], "COLOR_TYPE" => $arParams["COLOR_TYPE"], "WIDTH" => $arParams["WIDTH"], "CACHE_TIME" => $arParams["CACHE_TIME"], "CACHE_TYPE" => $arParams["CACHE_TYPE"], "RESTART" => $arParams["RESTART"]);