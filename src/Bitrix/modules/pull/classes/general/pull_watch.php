<?php

class CAllPullWatch
{
    const bucket_size = 100;
    private static $arUpdate = array();
    private static $arInsert = array();
    public static function Add($userId, $tag, $immediate = \false)
    {
    }
    public static function DeferredSql($userId = \false)
    {
    }
    public static function Delete($userId, $tag = \null)
    {
    }
    public static function Extend($userId, $tags)
    {
    }
    public static function AddToStack($tag, $parameters, $channelType = \CPullChannel::TYPE_PRIVATE)
    {
    }
    public static function GetUserList($tag)
    {
    }
}