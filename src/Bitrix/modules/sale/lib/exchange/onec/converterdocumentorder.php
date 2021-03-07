<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class ConverterDocumentOrder
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class ConverterDocumentOrder extends \Bitrix\Sale\Exchange\OneC\Converter
{
    /**
     * @return array
     */
    protected function getFieldsInfo()
    {
    }
    /**
     * @param $documentImport
     * @return array
     * @throws ArgumentException
     */
    public function resolveParams($documentImport)
    {
    }
    /**
     * @param null $order
     * @param array $fields
     * @throws ArgumentException
     */
    public static function sanitizeFields($order = null, array &$fields, \Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    public function externalize(array $fields)
    {
    }
    /**
     * @param $items
     * @param $info
     * @param array $params
     * @return array
     */
    public function externalizeItems(array $items, array $info)
    {
    }
    /**
     * @param $stories
     * @param $info
     * @param array $params
     * @return array
     */
    public function externalizeStories(array $stories, array $info)
    {
    }
    /**
     * @param $taxes
     * @param array $info
     * @return array
     */
    public function externalizeTaxes(array $taxes, array $info)
    {
    }
    /**
     * @param array $discounts
     * @param array $info
     * @return array
     */
    public function externalizeDiscounts(array $discount, array $info)
    {
    }
    /**
     * @param $code
     * @return mixed
     */
    private static function getCatalogMeasureByCode($code)
    {
    }
    /**
     * @param $id
     * @return array
     */
    private static function getStoreById($id)
    {
    }
    /**
     * @param $id
     * @return string
     */
    protected static function getStatusNameById($id)
    {
    }
}