<?php

namespace Bitrix\Sale\Exchange;

/**
 * Interface IConverter
 * @package Bitrix\Sale\Exchange
 * @deprecated
 */
interface IConverter
{
    /**
     * @param $documentImport
     * @return array
     */
    public function resolveParams($documentImport);
    /**
     * @param null $entity
     * @param array $fields
     */
    public static function sanitizeFields($entity = null, array &$fields, \Bitrix\Sale\Exchange\ISettings $settings);
    public function externalize(array $fields);
}