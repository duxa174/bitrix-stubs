<?php

/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$canRead = $USER->CanDoOperation('security_session_settings_read');