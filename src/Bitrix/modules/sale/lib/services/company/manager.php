<?php

namespace Bitrix\Sale\Services\Company;

class Manager
{
    /**
     * @param $parameters
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getList($parameters)
    {
    }
    /**
     * @param $id
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     */
    public static function getById($id)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @param int $mode
     * @return array
     */
    public static function getListWithRestrictions(\Bitrix\Sale\Internals\Entity $entity, $mode = \Bitrix\Sale\Services\Company\Restrictions\Manager::MODE_CLIENT)
    {
    }
    /**
     * @param Internals\Entity $entity
     * @param int $mode
     * @return int
     */
    public static function getAvailableCompanyIdByEntity(\Bitrix\Sale\Internals\Entity $entity, $mode = \Bitrix\Sale\Services\Company\Restrictions\Manager::MODE_CLIENT)
    {
    }
    /**
     * Returns entity link name for connection with Locations
     * @return string
     */
    public static function getLocationConnectorEntityName()
    {
    }
    /**
     * @param $id
     *
     * @return array
     */
    public static function getUserCompanyList($id)
    {
    }
}