<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxBitrix
 * @package Bitrix\Sale\Cashbox
 */
class CashboxBitrix extends \Bitrix\Sale\Cashbox\Cashbox
{
    const TYPE_Z_REPORT = 1;
    /**
     * @param Check $check
     * @return array
     */
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @param $id
     * @return array
     */
    public function buildZReportQuery($id)
    {
    }
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param array $cashbox
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     * @throws \Exception
     */
    public static function saveCashbox(array $cashbox)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function getCashboxDefaultEmail()
    {
    }
    /**
     * @param $cashboxId
     */
    protected static function showAlarmMessage($cashboxId)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    public static function getCashboxList(array $data)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    public static function applyPrintResult(array $data)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    protected static function extractCheckData(array $data)
    {
    }
    /**
     * @param $data
     * @return array
     */
    private static function getCheckLinkParams($data)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    protected static function extractZReportData(array $data)
    {
    }
    /**
     * @return array
     */
    protected function getCheckTypeMap()
    {
    }
    /**
     * @param $qr
     * @return array
     */
    private static function parseQrParam($qr)
    {
    }
    /**
     * @param $errorCode
     * @throws Main\NotImplementedException
     * @return int
     */
    protected static function getErrorType($errorCode)
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
    public static function getGeneralRequiredFields()
    {
    }
    /**
     * @return array
     */
    public static function getSupportedKkmModels()
    {
    }
}