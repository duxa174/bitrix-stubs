<?php

/**
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global CDataBase $DB
 **/
$canRead = $USER->CanDoOperation('security_iprule_settings_read');