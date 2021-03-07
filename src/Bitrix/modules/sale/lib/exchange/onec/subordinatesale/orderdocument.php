<?php

namespace Bitrix\Sale\Exchange\OneC\SubordinateSale;

class OrderDocument extends \Bitrix\Sale\Exchange\OneC\OrderDocument
{
    /**
     * @return array
     */
    public static function getFieldsInfo()
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
     * @param $value
     * @return array|null
     */
    protected static function resolveSubordinateDocuments($value)
    {
    }
    protected static function unitFieldsInfo(&$info)
    {
    }
    /**
     * @param array $fields
     * @param int $level
     * @return string
     */
    protected function outputXml(array $fields, $level = 0)
    {
    }
}