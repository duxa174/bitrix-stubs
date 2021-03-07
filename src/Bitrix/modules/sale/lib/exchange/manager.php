<?php

namespace Bitrix\Sale\Exchange;

final class Manager
{
    private static $instance = null;
    /** @var ISettings $settings */
    protected $settings = null;
    /** @var ICollision $collision */
    protected $collision = null;
    /** @var ICriterion $criterion */
    protected $criterion = null;
    /** @var LoggerDiag $logger */
    protected $logger = null;
    /**
     * @return static
     */
    private static function getInstance()
    {
    }
    /**
     * @param $typeId
     * @return Entity\OrderImport|Entity\PaymentCardImport|Entity\PaymentCashImport|Entity\PaymentCashLessImport|Entity\ShipmentImport|Entity\UserProfileImport|ProfileImport
     */
    public static function createImport($typeId)
    {
    }
    /**
     * Add instance of this manager to collection
     * @param $typeId
     * @param ISettings $settings
     * @param ICollision $collision
     * @param ICriterion $criterion
     * @return mixed
     * @throws ArgumentOutOfRangeException
     * @internal
     */
    public static function registerInstance($typeId, \Bitrix\Sale\Exchange\ISettings $settings, \Bitrix\Sale\Exchange\ICollision $collision = null, \Bitrix\Sale\Exchange\ICriterion $criterion = null)
    {
    }
    /**
     * Get import by Type ID.
     * @param $typeId
     * @return null|static
     * @throws ArgumentOutOfRangeException
     */
    private static function getImportByType($typeId)
    {
    }
    /**
     * @param $typeId
     * @return ISettings
     * @throws ArgumentOutOfRangeException
     */
    public static function getSettingsByType($typeId)
    {
    }
}