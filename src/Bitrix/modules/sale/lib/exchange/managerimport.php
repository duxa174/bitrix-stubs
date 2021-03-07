<?php

namespace Bitrix\Sale\Exchange;

final class ManagerImport extends \Bitrix\Sale\Exchange\ManagerBase
{
    /** @var ICollision $collision */
    protected $collision = null;
    /** @var ICriterion $criterion */
    protected $criterion = null;
    /**
     * @return string
     */
    public static function getDirectionType()
    {
    }
    /**
     * @param ImportBase $entity
     */
    public static function configure(\Bitrix\Sale\Exchange\ImportBase $entity)
    {
    }
    /**
     * Add instance of this manager to collection
     * @param $typeId
     * @param ISettingsImport $settings
     * @param ICollision $collision
     * @param ICriterion $criterion
     * @return mixed
     * @throws ArgumentOutOfRangeException
     * @internal
     */
    public static function registerInstance($typeId, \Bitrix\Sale\Exchange\ISettingsImport $settings, \Bitrix\Sale\Exchange\ICollision $collision = null, \Bitrix\Sale\Exchange\ICriterion $criterion = null)
    {
    }
    /**
     * @param $typeId
     * @return ISettingsImport
     * @throws ArgumentOutOfRangeException
     */
    public static function getSettingsByType($typeId)
    {
    }
}