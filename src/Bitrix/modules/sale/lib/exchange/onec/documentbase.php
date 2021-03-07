<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class DocumentBase
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class DocumentBase
{
    const CML_LANG_ID = 'ru';
    /** @var Fields */
    protected $fields;
    function __construct()
    {
    }
    /**
     * @return array
     */
    protected static function getMessage()
    {
    }
    /**
     * @return array
     */
    protected static function getMessageExport()
    {
    }
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
    /**
     * @param array $values
     * @internal param array $fields
     */
    public function setFields(array $values)
    {
    }
    /**
     * @param $name
     * @param $value
     */
    public function setField($name, $value)
    {
    }
    /**
     * @param $name
     * @return null|string
     */
    public function getField($name)
    {
    }
    /**
     * @return array
     */
    public function getFieldValues()
    {
    }
    /**
     * @return int
     */
    public function getId()
    {
    }
    /**
     * @return null|string
     */
    public function getExternalId()
    {
    }
    /**
     * @param array $document
     * @return int
     */
    public static function resolveRawDocumentTypeId(array $document)
    {
    }
    /**
     * @param array string
     * @return int
     */
    public static function resolveDocumentTypeId($operation)
    {
    }
    public static function resolveDocumentTypeName($typeId)
    {
    }
    /**
     * @param $value
     * @param $fieldName
     * @param array $fieldsInfo
     * @param array $document
     * @return null
     */
    public static function resolveItemsArrayParams($value, $fieldName, array $fieldsInfo, array $document)
    {
    }
    /**
     * @param array $document
     * @param array $fieldsInfo
     * @return array|null
     */
    protected static function resolveItemsParams(array $document, array $fieldsInfo)
    {
    }
    /**
     * @param array $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveCashBoxCheksParams(array $value, array $fieldsInfo)
    {
    }
    /**
     * @param array $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveTraitsParams(array $value, array $fieldsInfo)
    {
    }
    /**
     * @param array $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveTaxParams(array $value, array $fieldsInfo)
    {
    }
    /**
     * @param array $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveDiscountsParams(array $value, array $fieldsInfo)
    {
    }
    /**
     * @param $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveUnitParams($value, array $fieldsInfo)
    {
    }
    /**
     * @param $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveMarkingGroupParams($value, array $fieldsInfo)
    {
    }
    /**
     * @param array $value
     * @param array $fieldsInfo
     * @return null
     */
    protected static function resolveMarkingParams(array $value, array $fieldsInfo)
    {
    }
    /**
     * @param array $fields
     * @return array|null
     */
    protected static function fillItemsFields(array $fields)
    {
    }
    /**
     * @param $value
     * @param null $fieldInfo
     */
    protected static function internalizeFields(&$value, $fieldInfo = null)
    {
    }
    /**
     * @param $value
     * @return float
     */
    protected static function toFloat($value)
    {
    }
    /**
     * @param $value
     * @return int
     */
    protected static function toInt($value)
    {
    }
    /**
     * @param array $document
     * @return array
     */
    public static function prepareFieldsData(array $document)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     */
    protected static function getFieldsInfo()
    {
    }
    public function openNodeDirectory($level, $name)
    {
    }
    public function closeNodeDirectory($level, $name)
    {
    }
    protected function formatXMLNode($level, $name, $value, $parameters = array())
    {
    }
    /**
     * @param int $level
     * @return string
     */
    public function output($level = 0)
    {
    }
    /**
     * @param array $fields
     * @return string
     */
    protected function outputXml(array $fields, $level = 0)
    {
    }
    /**
     * @param $code
     * @return string
     */
    public static function getLangByCodeField($code)
    {
    }
    protected function outputXmlRekValue($level, $name, $value)
    {
    }
    protected function outputXmlUnits($level, $name, $list)
    {
    }
    protected function outputXmlBaseUnit($level, $name, $value)
    {
    }
    protected function outputXmlItems($level, $name, $items)
    {
    }
    protected function outputXmlAddress($level, $addresses)
    {
    }
    protected function outputXmlStories($level, $name, $stories)
    {
    }
    protected function outputXmlTaxRates($level, $name, $taxes)
    {
    }
    protected function outputXmlTaxes($level, $name, $taxes)
    {
    }
    protected function outputXmlDiscounts($level, $name, $discounts)
    {
    }
    public function getNameNodeDocument()
    {
    }
}