<?php

namespace Bitrix\Sale\Exchange;

trait PackageTrait
{
    /**
     * @param ImportBase $item
     * @param array $fields
     * @param null $order
     */
    protected static function load(\Bitrix\Sale\Exchange\ImportBase $item, array $fields, $order = null)
    {
    }
    /**
     * @param array $fields
     * @return array
     */
    protected function getProductsItems(array $fields)
    {
    }
    /**
     * @param $type_id
     * @param OneC\DocumentBase[] $documents
     * @return bool
     */
    protected function hasDocumentByTypeId($type_id, array $documents)
    {
    }
    /**
     * @param $type_id
     * @param OneC\DocumentBase[] $documents
     * @return OneC\DocumentBase|null
     */
    protected function getDocumentByTypeId($type_id, array $documents)
    {
    }
    /**
     * @param $type_id
     * @param ImportBase[] $items
     * @return ImportBase|null
     */
    protected function getEntityByTypeId($type_id, array $items)
    {
    }
    /**
     * @param array $list
     * @return bool
     */
    protected function deliveryServiceExists(array $list)
    {
    }
}