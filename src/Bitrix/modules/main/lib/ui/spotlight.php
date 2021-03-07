<?php

namespace Bitrix\Main\UI;

class Spotlight
{
    const USER_TYPE_OLD = "OLD";
    const USER_TYPE_NEW = "NEW";
    const USER_TYPE_ALL = "ALL";
    const CATEGORY_NAME = "spotlight";
    private $id;
    private $userType;
    private $userTimeSpan;
    private $lifetime;
    private $startDate = null;
    private $endDate = null;
    /**
     * Spotlight constructor.
     *
     * @param string $id Unique identifier
     *
     * @throws ArgumentTypeException
     */
    public function __construct($id)
    {
    }
    /**
     * @param bool $userId
     *
     * @return bool
     */
    public function isAvailable($userId = false)
    {
    }
    public function getActivationDate()
    {
    }
    public function activate($activationDate = false)
    {
    }
    public function deactivate()
    {
    }
    public function isViewed($userId)
    {
    }
    public function getViewDate($userId)
    {
    }
    public function setViewDate($userId, $date = false)
    {
    }
    public function unsetViewDate($userId)
    {
    }
    private function getViewDateOptionName()
    {
    }
    private function getActDateOptionName()
    {
    }
    private function getRegisterDate($userId)
    {
    }
    private function getUserId($userId = false)
    {
    }
    private function getUser($userId)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @return string
     */
    public function getUserType()
    {
    }
    /**
     * @param string $userType
     */
    public function setUserType($userType)
    {
    }
    public static function getUserTypes()
    {
    }
    /**
     * @return int
     */
    public function getUserTimeSpan()
    {
    }
    /**
     * @param int $userTimeSpan
     */
    public function setUserTimeSpan($userTimeSpan)
    {
    }
    /**
     * @return int
     */
    public function getLifetime()
    {
    }
    /**
     * @param int $lifetime
     */
    public function setLifetime($lifetime)
    {
    }
    /**
     * @return int|null
     */
    public function getStartDate()
    {
    }
    /**
     * @param int|null $startDate
     */
    public function setStartDate($startDate)
    {
    }
    /**
     * @return int|null
     */
    public function getEndDate()
    {
    }
    /**
     * @param int|null $endDate
     */
    public function setEndDate($endDate)
    {
    }
}