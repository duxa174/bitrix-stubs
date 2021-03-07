<?php

namespace Bitrix\Sale;

class Fuser
{
    function __construct()
    {
    }
    /**
     * Return fuserId.
     *
     * @param bool $skipCreate		Create, if not exist.
     * @return int|null
     */
    public static function getId($skipCreate = false)
    {
    }
    /**
     * Update session data
     *
     * @param int $id				FuserId.
     * @return void
     */
    protected static function updateSession($id)
    {
    }
    /**
     * Return fuser code.
     *
     * @return int
     */
    protected static function getCode()
    {
    }
    /**
     * Return fuserId for user.
     *
     * @param int $userId			User Id.
     * @return false|int
     * @throws Main\ArgumentException
     */
    public static function getIdByUserId($userId)
    {
    }
    /**
     * Return user by fuserId.
     *
     * @param int $fuserId		Fuser Id.
     * @return int
     * @throws Main\ArgumentException
     */
    public static function getUserIdById($fuserId)
    {
    }
    /**
     * Delete fuserId over several days.
     *
     * @param int $days			Interval.
     * @return void
     */
    public static function deleteOld($days)
    {
    }
    /**
     * Create new fuserId for user.
     *
     * @param int $userId				User id.
     * @return Main\Entity\AddResult
     * @throws \Exception
     */
    protected static function createForUserId($userId)
    {
    }
}