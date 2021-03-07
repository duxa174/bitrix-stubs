<?php

class CSocServGooglePlusOAuth extends \CSocServGoogleOAuth
{
    const ID = "GooglePlusOAuth";
    const LOGIN_PREFIX = "GP_";
    public function getEntityOAuth($code = \false)
    {
    }
    public function GetSettings()
    {
    }
    public function getFriendsList($limit, &$next)
    {
    }
    public function getProfileUrl($uid)
    {
    }
}
class CGooglePlusOAuthInterface extends \CGoogleOAuthInterface
{
    const SERVICE_ID = "GooglePlusOAuth";
    const PROFILE_URL = 'https://www.googleapis.com/plus/v1/people/me';
    const FRIENDS_URL = 'https://www.googleapis.com/plus/v1/people/me/people/visible';
    const FRIENDS_FIELDS = 'items(displayName,emails,gender,id,image,name,nickname),nextPageToken,title,totalItems';
    protected $standardScope = array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me');
    public function getCurrentUser()
    {
    }
    public function getCurrentUserFriends($limit, &$next)
    {
    }
    protected function query($url)
    {
    }
}