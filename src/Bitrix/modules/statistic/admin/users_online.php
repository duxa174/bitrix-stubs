<?php

/** @var $APPLICATION CMain */
$STAT_RIGHT = $APPLICATION->GetGroupRight("statistic");
/** @global $by string */
/** @global $order string */
$oSort = new \CAdminSorting($sTableID, "s_session_time", "desc");