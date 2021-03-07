<?php

namespace Bitrix\Landing\PublicAction;

class Role
{
    /**
     * Check feature enabled and if current user is admin.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function init()
    {
    }
    /**
     * Gets available roles.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList()
    {
    }
    /**
     * Gets rights for each site in this role.
     * @param int $id Role id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getRights($id)
    {
    }
    /**
     * Set rights for role.
     * @param int $id Role id.
     * @param array $rights Rights array ([[site_id] => [right1, right2]].
     * @param array $additional Addition rights array ([Rights::ADDITIONAL_RIGHTS]].
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setRights($id, array $rights, $additional = null)
    {
    }
    /**
     * Set new access codes for role and refresh all rights.
     * @param int $id Role id.
     * @param array $codes Codes array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function setAccessCodes($id, array $codes = array())
    {
    }
    /**
     * Return true if role model is switch on.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function isEnabled()
    {
    }
    /**
     * Switch on/off role model.
     * @param bool $mode Mode: on/off.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function enable($mode)
    {
    }
}