<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxAtolFarmV4
 * @package Bitrix\Sale\Cashbox
 */
class CashboxAtolFarmV4 extends \Bitrix\Sale\Cashbox\CashboxAtolFarm
{
    const SERVICE_URL = 'https://online.atol.ru/possystem/v4';
    const SERVICE_TEST_URL = 'https://testonline.atol.ru/possystem/v4';
    const HANDLER_MODE_ACTIVE = 'ACTIVE';
    const HANDLER_MODE_TEST = 'TEST';
    const CODE_CALC_VAT_10 = 'vat110';
    const CODE_CALC_VAT_20 = 'vat120';
    /**
     * @param Check $check
     * @return array
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
     * @return array
     */
    private function getPaymentTypeMap()
    {
    }
    /**
     * @return string
     */
    private static function getDefaultServiceEmail()
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
     * @param $operation
     * @param $token
     * @param array $queryData
     * @return string
     * @throws Main\SystemException
     */
    protected function getRequestUrl($operation, $token, array $queryData = array())
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
     * @param array $checkData
     * @return Result
     */
    protected function validateCheckQuery(array $checkData)
    {
    }
    /**
     * @return bool
     */
    public static function isSupportedFFD105()
    {
    }
}