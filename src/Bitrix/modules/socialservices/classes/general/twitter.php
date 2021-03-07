<?php

class CSocServTwitter extends \CSocServAuth
{
    const ID = "Twitter";
    public function GetSettings()
    {
    }
    public function GetFormHtml($arParams)
    {
    }
    public function GetOnClickJs($arParams)
    {
    }
    public function getUrl($arParams)
    {
    }
    public function Authorize()
    {
    }
    public function GetUserMessage($socServUserArray, $sinceId = '1')
    {
    }
    public function setUser($userId)
    {
    }
    public function getFriendsList($limit, &$next)
    {
    }
    public static function sendMessage($uid, $message)
    {
    }
    public function TwitterUserId($userId)
    {
    }
    public static function SendUserFeed($userId, $message, $messageId)
    {
    }
}
class CTwitterInterface
{
    const REQUEST_URL = "https://api.twitter.com/oauth/request_token";
    const AUTH_URL = "https://api.twitter.com/oauth/authenticate";
    const TOKEN_URL = "https://api.twitter.com/oauth/access_token";
    const API_URL = "https://api.twitter.com/1.1/users/show.json";
    const POST_URL = "https://api.twitter.com/1.1/statuses/update.json";
    const SEARCH_URL = "https://api.twitter.com/1.1/search/tweets.json";
    const FRIENDS_URL = "https://api.twitter.com/1.1/friends/list.json";
    const MESSAGE_URL = "https://api.twitter.com/1.1/direct_messages/new.json";
    protected $appID;
    protected $appSecret;
    protected $token = \false;
    protected $tokenVerifier = \false;
    protected $tokenSecret = \false;
    protected $oauthArray;
    public function __construct($appID = \false, $appSecret = \false, $token = \false, $tokenVerifier = \false, $tokenSecret = \false)
    {
    }
    protected function GetDefParams()
    {
    }
    public function GetRequestToken($callback)
    {
    }
    public function RedirectAuthUrl()
    {
    }
    public function GetAccessToken()
    {
    }
    public function GetUserInfo($user_id)
    {
    }
    public function getUserFriends($user_id, $limit, &$next)
    {
    }
    public function sendMessage($user_id, $uid, $message)
    {
    }
    public function SetOauthKeys($socServUserId)
    {
    }
    public function SearchByHash($hash, $socServUserArray, $sinceId)
    {
    }
    private function GetAllPages($arResult)
    {
    }
    private function GetAllPagesNotAuth($arResult)
    {
    }
    public function SendTwit($socServUserId, $message, $messageId)
    {
    }
    private function GetUserPerms($userXmlId)
    {
    }
    protected function urlencode($mixParams)
    {
    }
    protected function GetSignatureString($arParams, $url)
    {
    }
    protected function BuildQuery($params)
    {
    }
    protected function BuildSignature($sigString)
    {
    }
}