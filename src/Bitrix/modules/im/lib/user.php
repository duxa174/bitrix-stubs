<?php

namespace Bitrix\Im;

class User
{
    private static $instance = array();
    private $userId = 0;
    private $userData = null;
    static $formatNameTemplate = null;
    const FILTER_LIMIT = 50;
    const PHONE_ANY = 'phone_any';
    const PHONE_WORK = 'work_phone';
    const PHONE_PERSONAL = 'personal_phone';
    const PHONE_MOBILE = 'personal_mobile';
    const PHONE_INNER = 'uf_phone_inner';
    const SERVICE_ANY = 'service_any';
    const SERVICE_ZOOM = 'zoom';
    const SERVICE_SKYPE = 'skype';
    function __construct($userId = null)
    {
    }
    /**
     * @param null $userId
     * @return User
     */
    public static function getInstance($userId = null)
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @return string
     */
    public function getFullName($safe = true)
    {
    }
    /**
     * @return string
     */
    public function getName($safe = true)
    {
    }
    /**
     * @return string
     */
    public function getLastName($safe = true)
    {
    }
    /**
     * @return string
     */
    public function getAvatar()
    {
    }
    /**
     * @return string
     */
    public function getAvatarHr()
    {
    }
    /**
     * @return string
     */
    public function getStatus()
    {
    }
    /**
     * @return string
     */
    public function getIdle()
    {
    }
    /**
     * @return string
     */
    public function getLastActivityDate()
    {
    }
    /**
     * @return string
     */
    public function getMobileLastDate()
    {
    }
    /**
     * @return string
     */
    public function getBirthday()
    {
    }
    /**
     * @return string
     */
    public function getAvatarId()
    {
    }
    /**
     * @return string
     */
    public function getWorkPosition($safe = false)
    {
    }
    /**
     * @return string
     */
    public function getGender()
    {
    }
    /**
     * @return string
     */
    public function getExternalAuthId()
    {
    }
    /**
     * @return string
     */
    public function getWebsite()
    {
    }
    /**
     * @return string
     */
    public function getEmail()
    {
    }
    /**
     * @param string $type
     * @return string
     */
    public function getPhone($type = self::PHONE_ANY)
    {
    }
    /**
     * @param string $type
     * @return string
     */
    public function getService($type = self::PHONE_ANY)
    {
    }
    /**
     * @return string
     */
    public function getColor()
    {
    }
    /**
     * @return string
     */
    public function getTzOffset()
    {
    }
    /**
     * @return bool
     */
    public function isOnline()
    {
    }
    /**
     * @return bool
     */
    public function isExtranet()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @return bool
     */
    public function isAbsent()
    {
    }
    /**
     * @return bool
     */
    public function isNetwork()
    {
    }
    /**
     * @return bool
     */
    public function isBot()
    {
    }
    /**
     * @return bool
     */
    public function isConnector()
    {
    }
    /**
     * @return bool
     */
    public function isExists()
    {
    }
    /**
     * @return array|null
     */
    public function getFields()
    {
    }
    /**
     * @return array|null
     */
    public function getPhones()
    {
    }
    /**
     * @return array|null
     */
    public function getServices()
    {
    }
    /**
     * @return array|null
     */
    public function getDepartments()
    {
    }
    /**
     * Returns an array describing the user.
     *
     * @param array $options
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getArray($options = [])
    {
    }
    /**
     * @return array|null
     */
    private function getParams()
    {
    }
    public static function uploadAvatar($avatarUrl = '', $hash = '')
    {
    }
    /**
     * @return bool
     */
    public static function clearStaticCache()
    {
    }
    public static function isOpenlinesOperator($userId = null)
    {
    }
    public static function getList($params)
    {
    }
    public static function getListParams($params)
    {
    }
    public static function getBusiness($userId = null, $options = array())
    {
    }
    public static function getMessages($userId = null, $options = array())
    {
    }
    public static function formatNameFromDatabase($fields)
    {
    }
    public static function formatFullNameFromDatabase($fields)
    {
    }
}