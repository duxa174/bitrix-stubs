<?php

namespace Bitrix\Iblock\Template\Entity;

class ElementSku extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $elementFields = null;
    protected $skuIblockId = null;
    protected $skuList = null;
    protected $property = null;
    protected $price = null;
    /**
     * @param integer $id Iblock element identifier.
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
     * Loads values from database.
     * Returns true on success.
     *
     * @return boolean
     */
    public function loadFromDatabase()
    {
    }
}