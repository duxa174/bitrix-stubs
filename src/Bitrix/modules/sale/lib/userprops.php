<?php

namespace Bitrix\Sale;

class OrderUserProperties
{
    private $profiles = array();
    private static $instance;
    function __construct()
    {
    }
    /**
     * @return OrderUserProperties
     */
    public static function getInstance()
    {
    }
    /**
     * @param array $parameters
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @param $parameters
     */
    public static function loadFromDB($parameters)
    {
    }
    /**
     * @param $personTypeId
     * @param $userId
     * @return bool
     */
    public static function getFirstId($personTypeId, $userId)
    {
    }
    /**
     * @param $profileId
     * @param $personTypeId
     * @param $userId
     * @return bool
     */
    public static function checkCorrect($profileId, $personTypeId, $userId)
    {
    }
    /**
     * Collect profile information
     *
     * @param int $userId
     * @param int|null $personTypeId
     * @param int|null $profileId
     *
     * @return Result
     */
    public static function loadProfiles($userId, $personTypeId = null, $profileId = null)
    {
    }
    /**
     * Get customer profile values
     *
     * @param $profileId
     *
     * @return array
     */
    public static function getProfileValues($profileId)
    {
    }
}