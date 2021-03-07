<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class TabHandler
 * The hairs of this class can penetrate to iblock module, section edit admin page, tab Trading platforms.
 * @package Bitrix\Sale\TradingPlatform
 */
abstract class TabHandler
{
    public $name = "";
    public $description = "";
    public abstract function action($arArgs);
    public abstract function check($arArgs);
    public abstract function showTabSection($divName, $arArgs, $bVarsFromForm);
}