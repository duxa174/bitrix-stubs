<?php

class CIMRestService extends \IRestService
{
    public static function OnRestServiceBuildDescription()
    {
    }
    public static function OnRestAppDelete($arParams)
    {
    }
    /* User api */
    public static function userGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function userList($arParams, $offset, \CRestServer $server)
    {
    }
    public static function userBusinessList($arParams, $offset, \CRestServer $server)
    {
    }
    /* Status api */
    public static function userStatusGet($params, $n, \CRestServer $server)
    {
    }
    public static function userStatusSet($params, $n, \CRestServer $server)
    {
    }
    public static function userStatusIdleStart($params, $n, \CRestServer $server)
    {
    }
    public static function userStatusIdleEnd($params, $n, \CRestServer $server)
    {
    }
    /* Dialog api */
    public static function dialogGet($arParams, $offset, \CRestServer $server)
    {
    }
    public static function dialogMessagesGet($arParams, $offset, \CRestServer $server)
    {
    }
    public static function dialogUsersGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function dialogWriting($arParams, $n, \CRestServer $server)
    {
    }
    public static function dialogRead($arParams, $n, \CRestServer $server)
    {
    }
    public static function dialogReadAll($arParams, $n, \CRestServer $server)
    {
    }
    public static function dialogUnread($arParams, $n, \CRestServer $server)
    {
    }
    /* Search api */
    public static function searchUser($arParams, $offset, \CRestServer $server)
    {
    }
    public static function searchDepartment($arParams, $offset, \CRestServer $server)
    {
    }
    public static function searchChat($arParams, $offset, \CRestServer $server)
    {
    }
    public static function searchLastGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function searchLastAdd($arParams, $n, \CRestServer $server)
    {
    }
    public static function searchLastDelete($arParams, $n, \CRestServer $server)
    {
    }
    /* Recent api */
    public static function recentGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function recentList($arParams, $n, \CRestServer $server)
    {
    }
    public static function recentPin($arParams, $n, \CRestServer $server)
    {
    }
    public static function recentHide($arParams, $n, \CRestServer $server)
    {
    }
    public static function recentUnread($arParams, $n, \CRestServer $server)
    {
    }
    /* Promotion api */
    public static function promotionGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function promotionRead($arParams, $n, \CRestServer $server)
    {
    }
    /* Department api */
    public static function departmentGet($arParams, $offset, \CRestServer $server)
    {
    }
    public static function departmentManagersGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function departmentEmployeesGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function departmentColleaguesList($arParams, $offset, \CRestServer $server)
    {
    }
    /* ChatAPI */
    public static function chatCreate($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatSetOwner($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatSetManager($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUpdateColor($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUpdateTitle($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUpdateAvatar($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUserAdd($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUserDelete($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatUserList($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatMute($arParams, $n, \CRestServer $server)
    {
    }
    public static function chatParentJoin($arParams, $n, \CRestServer $server)
    {
    }
    public static function botList($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageAdd($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageDelete($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageUpdate($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageLike($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageCommand($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageShare($arParams, $n, \CRestServer $server)
    {
    }
    public static function messageUserGet($arParams, $offset, \CRestServer $server)
    {
    }
    public static function notifyAdd($arParams, $n, \CRestServer $server)
    {
    }
    public static function notifyDelete($arParams, $n, \CRestServer $server)
    {
    }
    public static function notifyRead($arParams, $n, \CRestServer $server)
    {
    }
    public static function diskFolderGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function diskFileCommit($arParams, $n, \CRestServer $server)
    {
    }
    public static function diskFileDelete($arParams, $n, \CRestServer $server)
    {
    }
    public static function diskFileSave($arParams, $n, \CRestServer $server)
    {
    }
    public static function counterGet($arParams, $n, \CRestServer $server)
    {
    }
    public static function notImplemented($arParams, $n, \CRestServer $server)
    {
    }
    /* BotAPI */
    public static function botRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function botUnRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function botUpdate($arParams, $n, \CRestServer $server)
    {
    }
    public static function botMessageAdd($arParams, $n, \CRestServer $server)
    {
    }
    public static function botMessageUpdate($arParams, $n, \CRestServer $server)
    {
    }
    public static function botMessageDelete($arParams, $n, \CRestServer $server)
    {
    }
    public static function botMessageLike($arParams, $n, \CRestServer $server)
    {
    }
    public static function botSendTyping($arParams, $n, \CRestServer $server)
    {
    }
    public static function onCommandAdd($arParams, $arHandler)
    {
    }
    public static function onBotMessageAdd($arParams, $arHandler)
    {
    }
    public static function onBotMessageUpdate($arParams, $arHandler)
    {
    }
    public static function onBotMessageDelete($arParams, $arHandler)
    {
    }
    public static function onBotJoinChat($arParams, $arHandler)
    {
    }
    public static function onBotDelete($arParams, $arHandler)
    {
    }
    public static function commandRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function commandUnRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function commandUpdate($arParams, $n, \CRestServer $server)
    {
    }
    public static function commandAnswer($arParams, $n, \CRestServer $server)
    {
    }
    public static function appRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function appUnRegister($arParams, $n, \CRestServer $server)
    {
    }
    public static function appUpdate($arParams, $n, \CRestServer $server)
    {
    }
    private static function getAccessToken($appId, $userId)
    {
    }
    private static function bindEvent($appId, $appCode, $bitrixEventModule, $bitrixEventName, $restEventName, $restEventHandler)
    {
    }
    private static function unbindEvent($appId, $appCode, $bitrixEventModule, $bitrixEventName, $restEventName, $skipCheck = \false)
    {
    }
    public static function mobileConfigGet($params, $n, \CRestServer $server)
    {
    }
    public static function callUserRegister($params, $n, \CRestServer $server)
    {
    }
    public static function callUserUpdate($params, $n, \CRestServer $server)
    {
    }
    public static function callChannelPublicList($params, $n, \CRestServer $server)
    {
    }
    public static function videoconfShareChange($params, $n, \CRestServer $server)
    {
    }
    private static function getBotId($arParams, \CRestServer $server)
    {
    }
    /* Utils */
    public static function objectEncode($data, $options = [])
    {
    }
    public static function getServerAddress()
    {
    }
}