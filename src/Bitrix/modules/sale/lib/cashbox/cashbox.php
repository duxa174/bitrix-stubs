<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Cashbox
 * @package Bitrix\Sale\Cashbox
 */
abstract class Cashbox
{
    const UUID_TYPE_CHECK = 'check';
    const UUID_TYPE_REPORT = 'report';
    const UUID_DELIMITER = '|';
    const EVENT_ON_GET_CUSTOM_CASHBOX_HANDLERS = 'OnGetCustomCashboxHandlers';
    /** @var array $fields */
    private $fields = array();
    /**
     * @throws Main\LoaderException
     * @return void
     */
    public static function init()
    {
    }
    public static function getCode()
    {
    }
    /**
     * @return array
     */
    public static function getHandlerList()
    {
    }
    /**
     * @param array $settings
     * @return Cashbox|null
     */
    public static function create(array $settings)
    {
    }
    /**
     * Base constructor.
     * @param $settings
     */
    private function __construct($settings)
    {
    }
    /**
     * @param $name
     * @return mixed
     */
    public function getField($name)
    {
    }
    /**
     * @return Ofd|null
     */
    public function getOfd()
    {
    }
    /**
     * @param Check $check
     * @return array
     */
    public abstract function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check);
    /**
     * @param $id
     * @return array
     */
    public abstract function buildZReportQuery($id);
    /**
     * @throws NotImplementedException
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param $name
     * @param $code
     * @return mixed
     */
    public function getValueFromSettings($name, $code)
    {
    }
    /**
     * @param array $linkParams
     * @return string
     */
    public function getCheckLink(array $linkParams)
    {
    }
    /**
     * @param $errorCode
     * @throws NotImplementedException
     * @return int
     */
    protected static function getErrorType($errorCode)
    {
    }
    /**
     * @param array $data
     * @throws NotImplementedException
     * @return array
     */
    protected static function extractCheckData(array $data)
    {
    }
    /**
     * @param array $data
     * @throws NotImplementedException
     * @return array
     */
    protected static function extractZReportData(array $data)
    {
    }
    /**
     * @param array $data
     * @return Result
     */
    public static function applyCheckResult(array $data)
    {
    }
    /**
     * @param array $data
     * @return Result
     */
    public static function applyZReportResult(array $data)
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
     * @return Result
     */
    public function validate()
    {
    }
    protected function validateFields($fields)
    {
    }
    protected function isRequiredField($field) : bool
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
     * @param $modelId
     * @return array
     */
    private function getRequiredFields()
    {
    }
    /**
     * @return array
     */
    public static function getGeneralRequiredFields()
    {
    }
    /**
     * @param $type
     * @param $id
     * @return string
     */
    protected static function buildUuid($type, $id)
    {
    }
    /**
     * @param $uuid
     * @return array
     */
    protected static function parseUuid($uuid)
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
    public function isCheckable()
    {
    }
    /**
     * @return bool
     */
    public static function isSupportedFFD105()
    {
    }
}