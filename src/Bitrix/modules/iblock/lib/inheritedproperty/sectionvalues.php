<?php

namespace Bitrix\Iblock\InheritedProperty;

class SectionValues extends \Bitrix\Iblock\InheritedProperty\BaseValues
{
    protected $sectionId = 0;
    /** @var ValuesQueue */
    protected $queue = null;
    /**
     * @param integer $iblockId Iblock identifier.
     * @param integer $sectionId Section identifier.
     */
    public function __construct($iblockId, $sectionId)
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
     * Returns unique identifier of the section.
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
     * Returns all the parents of the section which is
     * array with one element: parent section or iblock.
     *
     * @return array[]\Bitrix\Iblock\InheritedProperty\BaseValues
     */
    public function getParents()
    {
    }
    /**
     * Returns all calculated values of inherited properties
     * for this section.
     *
     * @return array[string]string
     */
    public function queryValues()
    {
    }
    /**
     * Clears section values DB cache
     *
     * @return void
     */
    function clearValues()
    {
    }
}