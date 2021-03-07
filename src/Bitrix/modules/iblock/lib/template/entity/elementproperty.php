<?php

namespace Bitrix\Iblock\Template\Entity;

class ElementProperty extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $iblockId = 0;
    protected $properties = array();
    protected $elementLinkProperties = array();
    protected $sectionLinkProperties = array();
    /**
     * @param integer $id Iblock element identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Set the iblock of the element.
     *
     * @param integer $iblockId Iblock identifier.
     *
     * @return void
     */
    public function setIblockId($iblockId)
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
class ElementPropertyUserField extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
{
    /** @var array  */
    private $property = null;
    /**
     * @param integer $key  Iblock element identifier.
     * @param array|mixed $property Iblock property array.
     */
    function __construct($key, $property)
    {
    }
    /**
     * Actual work method which have to retrieve data from the DB.
     *
     * @return mixed
     */
    protected function load()
    {
    }
    /**
     * Retruns GetPublicViewHTML handler function for $this->property.
     * Returns false if no handler defined.
     *
     * @return callable|false
     */
    protected function getFormatFunction()
    {
    }
}
class ElementPropertyEnum extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
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
class ElementPropertyElement extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
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
class ElementPropertySection extends \Bitrix\Iblock\Template\Entity\LazyValueLoader
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