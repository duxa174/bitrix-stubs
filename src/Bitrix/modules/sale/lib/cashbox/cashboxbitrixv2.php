<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxBitrixV2
 * @package Bitrix\Sale\Cashbox
 */
class CashboxBitrixV2 extends \Bitrix\Sale\Cashbox\CashboxBitrix
{
    const CODE_VAT_0 = 'vat0';
    const CODE_VAT_10 = 'vat10';
    const CODE_VAT_20 = 'vat20';
    const CODE_CALC_VAT_10 = 'vat110';
    const CODE_CALC_VAT_20 = 'vat120';
    /**
     * @param Check $check
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @param $checkType
     * @param $vat
     * @return mixed
     */
    private function mapVatValue($checkType, $vat)
    {
    }
    /**
     * @return array
     */
    private function getPaymentObjectMap()
    {
    }
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @return array
     */
    protected function getCheckTypeMap()
    {
    }
    /**
     * @param int $modelId
     * @return array
     */
    public static function getSettings($modelId = 0)
    {
    }
    /**
     * @param Main\HttpRequest $request
     * @return array
     */
    public static function extractSettingsFromRequest(\Bitrix\Main\HttpRequest $request)
    {
    }
    /**
     * @return array
     */
    public static function getSupportedKkmModels()
    {
    }
    /**
     * @return bool
     */
    public static function isSupportedFFD105()
    {
    }
    /**
     * @param array $data
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getCashboxList(array $data)
    {
    }
    /**
     * @param $kkmId
     * @param array $settings
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected static function convertSettings($kkmId, array $settings)
    {
    }
}