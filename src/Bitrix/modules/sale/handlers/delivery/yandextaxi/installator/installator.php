<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Installator;

/**
 * Class Installator
 * @package Sale\Handlers\Delivery\YandexTaxi\Installator
 * @internal
 */
final class Installator
{
    /**
     * @param int $serviceId
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function install(int $serviceId) : \Bitrix\Main\Result
    {
    }
    /**
     * @param int $serviceId
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function installOrderProperties(int $serviceId) : \Bitrix\Main\Result
    {
    }
    /**
     * @param int $serviceId
     * @return Result
     * @throws \Exception
     */
    protected function installExtraServices(int $serviceId) : \Bitrix\Main\Result
    {
    }
    protected function installClaimsDbTable()
    {
    }
    protected function installRestriction(int $serviceId)
    {
    }
}