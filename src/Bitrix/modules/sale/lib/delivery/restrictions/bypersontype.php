<?php

namespace Bitrix\Sale\Delivery\Restrictions;

class ByPersonType extends \Bitrix\Sale\Delivery\Restrictions\Base
{
    /**
     * @param $personTypeId
     * @param array $params
     * @param int $deliveryId
     * @return bool
     */
    public static function check($personTypeId, array $params, $deliveryId = 0)
    {
    }
    /**
     * @param Entity $entity
     * @return int
     */
    public static function extractParams(\Bitrix\Sale\Internals\Entity $entity)
    {
    }
    /**
     * @return mixed
     */
    public static function getClassTitle()
    {
    }
    /**
     * @return mixed
     */
    public static function getClassDescription()
    {
    }
    /**
     * @param $deliveryId
     * @return array
     */
    public static function getParamsStructure($deliveryId = 0)
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