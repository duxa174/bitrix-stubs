<?php

namespace Bitrix\Socialservices;

/**
 * Integration with Bitrix24.Network
 * @package bitrix
 * @subpackage socialservices
 */
class Network
{
    const ERROR_SEARCH_STRING_TO_SHORT = 'ERROR_SEARCH_STRING_TO_SHORT';
    const ERROR_SEARCH_USER_NOT_FOUND = 'ERROR_SEARCH_USER_NOT_FOUND';
    const ERROR_REGISTER_USER = 'ERROR_REGISTER_USER';
    const ERROR_SOCSERV_TRANSPORT = 'ERROR_SOCSERV_TRANSPORT';
    const ERROR_NETWORK_IN_NOT_ENABLED = 'ERROR_NETWORK_IN_NOT_ENABLED';
    const ERROR_INCORRECT_PARAMS = 'ERROR_INCORRECT_PARAMS';
    const EXTERNAL_AUTH_ID = 'replica';
    const ADMIN_SESSION_KEY = "SS_B24NET_STATE";
    /** @var  ErrorCollection */
    public $errorCollection = null;
    protected static $lastUserStatus = null;
    function __construct()
    {
    }
    /**
     * Returns if option is turned on
     *
     * @return bool
     */
    public function isOptionEnabled()
    {
    }
    /**
     * Returns if network communication is avalable for current user
     *
     * @return boolean
     */
    public function isEnabled()
    {
    }
    /**
     * Enables network communication. Returns true on success.
     *
     * @param boolean $enable Pass true to enable and false to disable.
     *
     * @return boolean
     */
    public function setEnable($enable = true)
    {
    }
    /**
     * Searches the network for users by email or nickname.
     * Returns array on success and null on failure.
     * Check errorCollection public member for errors description.
     *
     * @param string $search Search query string.
     * @return array|null
     */
    public function searchUser($search)
    {
    }
    public static function sendMobileApplicationLink($phone, $language_id)
    {
    }
    /**
     * @param integer $networkId
     * @param string $lastSearch
     *
     * @return array|null
     */
    public function getUser($networkId, $lastSearch = '')
    {
    }
    /**
     * @param array $networkIds
     * @param string $lastSearch
     *
     * @return array|null
     */
    public function getUsers($networkIds, $lastSearch = '')
    {
    }
    /**
     * @param int $networkId
     * @param string $lastSearch
     *
     * @return integer|false
     */
    public function addUserById($networkId, $lastSearch = '')
    {
    }
    /**
     * @param array $networkIds
     * @param string $lastSearch
     *
     * @return array|boolean
     */
    public function addUsersById($networkIds, $lastSearch = '')
    {
    }
    /**
     * Add new user to b_user table.
     * Returns its identifier or false on failure.
     *
     * @param array $params
     *
     * @return integer|false
     */
    public function addUser($params)
    {
    }
    /**
     * @param integer $userId
     *
     * @return integer|null
     */
    public static function getNetworkId($userId)
    {
    }
    /**
     * @param string $networkId
     *
     * @return integer|null
     */
    public static function getUserId($networkId)
    {
    }
    /**
     * @param array $networkIds
     *
     * @return array|null
     */
    public static function getUsersId($networkIds)
    {
    }
    /**
     * @param array $params
     *
     * @return array|false
     */
    public static function formatUserParam($params)
    {
    }
    /**
     * Prepares and shows popup offerring current user to attach bitrix24.net account
     */
    public static function displayAdminPopup(array $params = array())
    {
    }
    public static function initAdminPopup(array $params = array())
    {
    }
    public static function getAuthUrl($mode = "page", $addScope = null)
    {
    }
    public static function setAdminPopupSession()
    {
    }
    public static function clearAdminPopupSession($userId)
    {
    }
    protected static function getShowOptions()
    {
    }
    public static function getAdminPopupSession()
    {
    }
    public static function setRegisterSettings($settings = array())
    {
    }
    public static function getRegisterSettings()
    {
    }
    protected static function updateRegisterSettings()
    {
    }
    public static function getLastBroadcastCheck()
    {
    }
    public static function setLastBroadcastCheck()
    {
    }
    public static function checkBroadcastData()
    {
    }
    public static function processBroadcastData($data)
    {
    }
    public static function setLastUserStatus($status)
    {
    }
    public static function getLastUserStatus()
    {
    }
}