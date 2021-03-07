<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class ConverterDocumentShipment
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class ConverterDocumentShipment extends \Bitrix\Sale\Exchange\OneC\Converter
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
     * @param Shipment|null $shipment
     * @param array $fields
     * @throws ArgumentException
     */
    public static function sanitizeFields($shipment = null, array &$fields, \Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
    public function externalize(array $fields)
    {
    }
    public function externalizeItems(array $taxes, array $info)
    {
    }
    public function externalizeStories(array $stories, array $info)
    {
    }
    public function externalizeTaxes(array $items, array $info)
    {
    }
    protected function getBasePriceDelivery($list = [])
    {
    }
}