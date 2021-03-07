<?php

/** @var $request Main\HttpRequest */
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
/**
 * @global $find
 * @global $find_type
 * @global $find_id
 * @global $find_event_name
 * @global $find_event_name_id
 * @global $find_site
 * @global $find_language_id
 * @global $find_active
 * @global $find_sender
 * @global $find_receiver
 * @global $find_message
*/
$arFilterFields = array("find", "find_type", "find_id", "find_event_name", "find_event_name_id", "find_site", "find_language_id", "find_active", "find_sender", "find_receiver", "find_message");