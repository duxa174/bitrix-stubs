<?php

class CAllPullStack
{
    // receive messages on stack
    // only works in PULL mode
    public static function Get($channelId, $lastId = 0)
    {
    }
    // add a message to stack
    public static function AddByChannel($channelId, $params = array())
    {
    }
    public static function AddByUser($userId, $arMessage, $channelType = 'private')
    {
    }
    public static function AddByUsers($users, $arMessage, $channelType = 'private')
    {
    }
    public static function AddShared($arMessage, $channelType = 'shared')
    {
    }
    public static function AddBroadcast($arMessage)
    {
    }
}