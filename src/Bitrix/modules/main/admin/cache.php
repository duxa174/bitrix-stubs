<?php

/** @var CUser $USER */
/** @var CMain $APPLICATION */
$isAdmin = $USER->CanDoOperation('cache_control');