<?php

class CUserCounter extends \CAllUserCounter
{
    public static function Set($user_id, $code, $value, $site_id = \SITE_ID, $tag = '', $sendPull = \true)
    {
    }
    public static function Increment($user_id, $code, $site_id = \SITE_ID, $sendPull = \true, $increment = 1)
    {
    }
    /**
     * @deprecated
     * @param $user_id
     * @param $code
     * @param string $site_id
     * @param bool $sendPull
     * @param int $decrement
     * @return bool
     */
    public static function Decrement($user_id, $code, $site_id = \SITE_ID, $sendPull = \true, $decrement = 1)
    {
    }
    public static function IncrementWithSelect($sub_select, $sendPull = \true, $arParams = array())
    {
    }
    public static function Clear($user_id, $code, $site_id = \SITE_ID, $sendPull = \true, $bMultiple = \false)
    {
    }
    public static function DeleteByCode($code)
    {
    }
    protected static function dbIF($condition, $yes, $no)
    {
    }
    // legacy function
    public static function ClearByUser($user_id, $site_id = \SITE_ID, $code = self::ALL_SITES, $bMultiple = \false, $sendPull = \true)
    {
    }
}
class CUserCounterPage extends \CAllUserCounterPage
{
    public static function checkSendCounter()
    {
    }
}