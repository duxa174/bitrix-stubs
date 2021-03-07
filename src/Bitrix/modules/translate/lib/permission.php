<?php

namespace Bitrix\Translate;

class Permission
{
    const SOURCE = 'X';
    const WRITE = 'W';
    const READ = 'R';
    const DENY = 'D';
    /**
     * Checks user's access to path.
     *
     * @param string $path Path to check.
     *
     * @return bool
     */
    public static function isAllowPath($path)
    {
    }
    /**
     * Return true if current user can edit php.
     *
     * @param \CUser|Main\Engine\CurrentUser $checkUser Current user check for.
     *
     * @return bool
     */
    public static function canEditSource($checkUser)
    {
    }
    /**
     * Determines if current user is admin.
     *
     * @param \CUser|Main\Engine\CurrentUser $checkUser User.
     *
     * @return bool
     */
    public static function isAdmin($checkUser)
    {
    }
    /**
     * Return true if current user can view module pages.
     *
     * @param \CUser|Main\Engine\CurrentUser $checkUser User.
     *
     * @return bool
     */
    public static function canView($checkUser)
    {
    }
    /**
     * Return true if current user can edit on module pages.
     *
     * @param \CUser|Main\Engine\CurrentUser $checkUser User.
     *
     * @return bool
     */
    public static function canEdit($checkUser)
    {
    }
}