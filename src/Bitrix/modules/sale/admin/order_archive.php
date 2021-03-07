<?php

/** Filter*/
//----------------------------------------------------------------------------------------------------------------------
$arFilterFields = array("filter_universal", "filter_order_id_from", "filter_id_from", "filter_order_id_to", "filter_id_to", "filter_account_number", "filter_date_from", "filter_date_to", "filter_date_archived_from", "filter_date_archived_to", "filter_lang", "filter_date_order_from", "filter_date_order_to", "filter_price_from", "filter_price_to", "filter_buyer", "filter_person_type", "filter_user_id", "filter_user_login", "filter_user_email", "filter_status");
/** Headers of table */
//----------------------------------------------------------------------------------------------------------------------
$arColumn2Field = array("ORDER_ID" => array("ID"), "ACCOUNT_NUMBER" => array("ACCOUNT_NUMBER"), "PRICE" => array("PRICE", "CURRENCY"), "DATE_INSERT" => array("DATE_INSERT"), "DATE_ARCHIVED" => array("DATE_ARCHIVED"));