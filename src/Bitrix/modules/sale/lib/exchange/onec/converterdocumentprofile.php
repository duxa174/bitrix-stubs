<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class ConverterDocumentProfile
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class ConverterDocumentProfile extends \Bitrix\Sale\Exchange\OneC\Converter
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
     * @param null $entity
     * @param array $fields
     */
    public static function sanitizeFields($entity = null, array &$fields, \Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
    public function externalize(array $fields)
    {
    }
    /**
     * @param array $fields
     * @return bool
     */
    protected function isFiz(array $fields)
    {
    }
    /**
     * @param $fields
     * @param null $fieldsInfo
     * @return array
     */
    public function externalizeArrayFields($fields, $fieldsInfo, $key = null)
    {
    }
    /**
     * @param array $original
     * @param array $replace
     */
    private function replaceNameFields(array &$original, array $replace)
    {
    }
    /**
     * @param array $fields
     * @return string
     */
    private function getXmlId(array $fields)
    {
    }
}