<?php

namespace Bitrix\Sale\Cashbox\Internals\Analytics;

/**
 * Class Cachbox
 * @package Bitrix\Sale\Internals\Analytics
 */
final class Provider extends \Bitrix\Sale\Internals\Analytics\Provider
{
    private const TYPE = 'cashbox';
    /**
     * @return string
     */
    public static function getCode() : string
    {
    }
    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    protected function getProviderData(\Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : array
    {
    }
    /**
     * @return string[]
     */
    private function getCashboxHandlers() : array
    {
    }
    /**
     * @param string $cashboxHandler
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function isCheckExists(string $cashboxHandler, \Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : bool
    {
    }
    /**
     * @param string $cashboxHandler
     * @return array|array[]|null[]
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getCashboxIdList(string $cashboxHandler) : array
    {
    }
    /**
     * @param array $data
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    protected function getHash(array $data) : string
    {
    }
}