<?php

namespace Bitrix\Sale\Internals\Analytics;

/**
 * Class Provider
 * @package Bitrix\Sale\Internals\Analytics
 */
abstract class Provider
{
    /**
     * @return string
     */
    public static abstract function getCode() : string;
    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return array
     */
    protected abstract function getProviderData(\Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : array;
    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return array
     */
    public function getData(\Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : array
    {
    }
    /**
     * @param array $data
     * @return string
     */
    protected abstract function getHash(array $data) : string;
}