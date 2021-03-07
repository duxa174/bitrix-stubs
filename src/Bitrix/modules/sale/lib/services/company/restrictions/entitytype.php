<?php

namespace Bitrix\Sale\Services\Company\Restrictions;

class EntityType extends \Bitrix\Sale\Services\Base\Restriction
{
    const ENTITY_NONE = 'N';
    const ENTITY_PAYMENT = 'P';
    const ENTITY_SHIPMENT = 'S';
    const ENTITY_ORDER = 'O';
    /**
     * @return string
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return string
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param int $entityId
     * @return array
     */
    public static function getParamsStructure($entityId = 0)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @return string
     */
    protected static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @param $params
     * @param array $restrictionParams
     * @param int $serviceId
     * @return bool
     */
    public static function check($params, array $restrictionParams, $serviceId = 0)
    {
    }
    /**
     * @param $mode
     * @return int
     */
    public static function getSeverity($mode)
    {
    }
}