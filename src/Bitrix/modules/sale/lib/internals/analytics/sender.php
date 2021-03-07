<?php

namespace Bitrix\Sale\Internals\Analytics;

/**
 * Class Sender
 * @package Bitrix\Sale\Internals\Analytics
 */
final class Sender
{
    protected const URL = 'https://util.1c-bitrix.ru/analytics.php';
    /** @var Provider $provider */
    private $provider;
    /**
     * Service constructor.
     * @param Provider $provider
     */
    public function __construct(\Bitrix\Sale\Internals\Analytics\Provider $provider)
    {
    }
    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     */
    public function sendForPeriod(\Bitrix\Main\Type\DateTime $dateFrom, \Bitrix\Main\Type\DateTime $dateTo) : bool
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     */
    private function getCommonData() : array
    {
    }
    /**
     * @param array $request
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    private static function signRequest(array $request) : string
    {
    }
}