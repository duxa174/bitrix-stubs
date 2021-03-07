<?php

namespace Bitrix\Sale\PaySystem\Internals\Analytics;

/**
 * Class PaySystem
 * @package Bitrix\Sale\PaySystem\Internals\Analytics
 */
final class Provider extends \Bitrix\Sale\Internals\Analytics\Provider
{
    private const TYPE = 'paysystem';
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
     * @throws \Bitrix\Main\LoaderException
     */
    protected function getProviderData(\Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : array
    {
    }
    /**
     * @return string[]
     */
    private function getPaySystemHandlers() : array
    {
    }
    /**
     * @param string $paySystemHandler
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    private function getPayment(string $paySystemHandler, \Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : array
    {
    }
    /**
     * @param string $paySystemHandler
     * @return int[]
     * @throws \Bitrix\Main\ArgumentException
     */
    private function getPaySystemIdList(string $paySystemHandler) : array
    {
    }
    /**
     * @param array $data
     * @return string
     */
    protected function getHash(array $data) : string
    {
    }
}