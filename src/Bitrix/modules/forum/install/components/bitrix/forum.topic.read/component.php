<?php

/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param string $componentName
 * @param CBitrixComponent $this
 */
$path = \str_replace(array("\\", "//"), "/", \dirname(__FILE__) . "/functions.php");