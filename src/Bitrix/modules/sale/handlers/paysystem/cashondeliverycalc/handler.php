<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class CashOnDeliveryCalcHandler
 */
class CashOnDeliveryCalcHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler implements \Bitrix\Sale\PaySystem\IPayable
{
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
    {
    }
    /**
     * @param Payment $payment
     * @return float|int
     */
    public function getPrice(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param $params
     * @return array
     */
    private static function extractFromField($params)
    {
    }
    /**
     * @param $tarifs
     * @return array
     */
    private static function getTariffArrayCSV($tarifs)
    {
    }
    /**
     * @param int $paySystemId
     * @return array|mixed
     */
    public static function getValues($paySystemId = 0)
    {
    }
    /**
     * @param $tariff
     * @return string
     */
    public function prepareToField($tariff)
    {
    }
    /**
     * @param int $paySystemId
     * @return array
     */
    public static function getStructure($paySystemId = 0)
    {
    }
    /**
     * @param $tariffId
     * @param $tariffTitle
     * @param $arTarifs
     * @param $arConfig
     */
    private static function setTariffConfig($tariffId, $tariffTitle, $arTarifs, &$arConfig)
    {
    }
    private static function getRegionsList()
    {
    }
    /**
     * @param $regionNameLang
     * @return array|bool
     */
    public function getCMTarifsByRegionFromCsv($regionNameLang)
    {
    }
    /**
     * @return array
     */
    public static function getAllCMTarifsFromCsv()
    {
    }
}