<?php

namespace Bitrix\Sale\BsmSiteMaster\Tools;

/**
 * Class SitePatcher
 * @package Bitrix\Sale\BsmSiteMaster\Tools
 */
class SitePatcher
{
    const HIDE_PANEL_FOR_USERS = "hide_panel_for_users";
    const ALL_USERS_ACCESS_CODE = "G2";
    const FORCE_ENABLE_SELF_HOSTED_COMPOSITE = "force_enable_self_hosted_composite";
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function unsetG2GroupFromHidePanel()
    {
    }
    /**
     * Enable composite using option in .settings.php
     */
    public static function enableComposite()
    {
    }
    /**
     * @return bool
     */
    private static function isCanEnableComposite()
    {
    }
}