<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class Converter
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
abstract class Converter implements \Bitrix\Sale\Exchange\IConverter
{
    const MEASURE_CODE_DEFAULT = 796;
    const KOEF_DEFAULT = 1;
    const CURRENCY_RATE_DEFAULT = 1;
    /** @var ISettings */
    protected $settings = null;
    protected $entityTypeId;
    protected $documentTypeId;
    /** @var Converter[]|null  */
    private static $instances = null;
    /**
     * @param int $typeId Type ID.
     * @return Converter
     * @deprecated
     */
    public static function getInstance($typeId)
    {
    }
    /**
     * @return array
     */
    protected abstract function getFieldsInfo();
    /**
     * @return ISettings
     */
    public function getSettings()
    {
    }
    public function getEntityTypeId()
    {
    }
    public function getDocmentTypeId()
    {
    }
    public function init(\Bitrix\Sale\Exchange\ISettings $settings, $entityTypeId = \Bitrix\Sale\Exchange\EntityType::UNDEFINED, $documentTypeId = \Bitrix\Sale\Exchange\OneC\DocumentType::UNDEFINED)
    {
    }
    /**
     * @param $value
     * @param mixed
     */
    protected function externalizeField(&$value, $fieldInfo = null)
    {
    }
    /**
     * @param $value
     * @return string
     */
    protected static function toText($value)
    {
    }
    /**
     * @param string $code
     * @return string
     */
    public static function normalizeExternalCode($code)
    {
    }
    /**
     * @param $rekv
     * @param array $info
     * @return array
     */
    protected function externalizeRekv(array $rekv, array $info)
    {
    }
    /**
     * @param $rekv
     * @param array $info
     * @return array
     */
    protected function externalizeRekvValue($kRekv, $vRekv, array $info)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    protected function modifyTrim(array $fields)
    {
    }
    /**
     * @param $lid
     * @return string
     */
    protected static function getSiteNameByLid($lid)
    {
    }
    public function modifyItemIdByItemName($fields)
    {
    }
}