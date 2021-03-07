<?php

/** @var CIBlockResult $rsElements */
$rsElements = \CIBlockElement::GetList($grid_sort["sort"], $arFilter, \false, $grid_options->GetNavParams(), $arSelect);