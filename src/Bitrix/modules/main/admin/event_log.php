<?php

function CheckFilter()
{
}
/** @global string $by  */
/** @global string $order  */
$rsData = \CEventLog::GetList(array($by => $order), $arFilter, $arNavParams);