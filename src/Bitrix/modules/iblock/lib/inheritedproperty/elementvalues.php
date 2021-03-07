<?php

namespace Bitrix\Iblock\InheritedProperty;

class ElementValues extends \Bitrix\Iblock\InheritedProperty\BaseValues
{
    protected $sectionId = 0;
    protected $elementId = 0;
    /**
     * @param integer $iblockId Iblock identifier.
     * @param integer $elementId Element identifier.
     */
    public function __construct($iblockId, $elementId)
    {
    }
    /**
     * Returns the table name where values will be stored.
     *
     * @return string
     */
    public function getValueTableName()
    {
    }
    /**
     * Returns type of the entity which will be stored into DB.
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Returns unique identifier of the element.
     *
     * @return integer
     */
    public function getId()
    {
    }
    /**
     * Creates an entity which will be used to process the templates.
     *
     * @return \Bitrix\Iblock\Template\Entity\Base
     */
    public function createTemplateEntity()
    {
    }
    /**
     * Sets parent to minimal value from array or to $sectionId.
     *
     * @param array[]integer|integer $sectionId Section identifier.
     *
     * @return void
     */
    public function setParents($sectionId)
    {
    }
    /**
     * Returns all the parents of the element which is
     * array with one element: parent section with minimal identifier or iblock.
     *
     * @return array[]\Bitrix\Iblock\InheritedProperty\BaseValues
     */
    public function getParents()
    {
    }
    /**
     * Returns all calculated values of inherited properties
     * for this element.
     *
     * @return array[string]string
     */
    public function queryValues()
    {
    }
    /**
     * Clears element values DB cache
     *
     * @return void
     */
    function clearValues()
    {
    }
}