<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
/**
 * Bitrix vars
 * @global CUser $USER
 * @global CMain $APPLICATION
 */
$strError = "";
/** @global string $by */
/** @global string $order */
$rsData = \CSiteTemplate::GetList(array($by => $order), array('TYPE' => $isEditingMessageThemePage ? 'mail' : ''), array("ID", "NAME", "DESCRIPTION", "SCREENSHOT", "SORT"));