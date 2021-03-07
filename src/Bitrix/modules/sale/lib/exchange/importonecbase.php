<?php

namespace Bitrix\Sale\Exchange;

abstract class ImportOneCBase extends \Bitrix\Sale\Exchange\ImportPattern
{
    use \Bitrix\Sale\Exchange\LoggerTrait;
    use \Bitrix\Sale\Exchange\BaseTrait;
    const EVENT_ON_EXCHANGE_CONFIGURE_IMPORTER = 'OnExchangeConfigureImporter';
    const DELIVERY_SERVICE_XMLID = 'ORDER_DELIVERY';
    /** @var  Fields */
    protected $fields;
    protected static $config;
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
     * @param array $items
     * @return Result
     */
    protected function checkFields(array $items)
    {
    }
    /**
     * @return Result
     */
    public static function checkSettings()
    {
    }
    public static function configuration()
    {
    }
    protected static function setConfig($option = '', $value = true)
    {
    }
    /**
     * @param ImportBase $item
     * @return Result
     * @throws ArgumentException
     * @internal
     */
    protected function modifyEntity($item)
    {
    }
    /**
     * @param array $rawFields
     * @return Result
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function parse(array $rawFields)
    {
    }
    /**
     * @param DocumentBase $document
     * @return ImportBase
     */
    protected function convertDocument(\Bitrix\Sale\Exchange\OneC\DocumentBase $document)
    {
    }
    protected abstract function resolveOwnerEntityTypeId($typeId);
    /**
     * @param array $fields
     * @return int
     */
    protected function resolveDocumentTypeId(array $fields)
    {
    }
    /**
     * @return array
     */
    protected static function getMessage()
    {
    }
    /**
     * @return string
     */
    public function getDirectionType()
    {
    }
    /**
     * @param ImportBase[] $items
     * @return Result
     */
    protected function logger(array $items)
    {
    }
}