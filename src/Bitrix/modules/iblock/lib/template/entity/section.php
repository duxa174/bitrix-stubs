<?php

namespace Bitrix\Iblock\Template\Entity;

class Section extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $property = null;
    protected $iblock = null;
    protected $parent = null;
    protected $sections = null;
    protected $catalog = null;
    /**
     * @param integer $id Iblock section identifier.
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