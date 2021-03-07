<?php

namespace Bitrix\Iblock\Template\Entity;

class ElementCatalog extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $price = null;
    protected $sku = null;
    protected $store = null;
    /**
     * @param integer $id Catalog product identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Used to find entity for template processing.
     *
     * @param string $entity What to find.
     *
     * @return \Bitrix\Iblock\Template\Entity\Base
     */
    public function resolve($entity)
    {
    }
    /**
     * Used to initialize entity fields from some external source.
     *
     * @param array $fields Entity fields.
     *
     * @return void
     */
    public function setFields(array $fields)
    {
    }
    /**
     * Loads values from database.
     * Returns true on success.
     *
     * @return boolean
     */
    protected function loadFromDatabase()
    {
    }
}
class ElementCatalogMeasure extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
{
    /**
     * Actual work method which have to retrieve data from the DB.
     *
     * @return mixed
     */
    protected function load()
    {
    }
}
class ElementCatalogStoreList extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
{
    /**
     * Actual work method which have to retrieve data from the DB.
     *
     * @return mixed
     */
    protected function load()
    {
    }
}