<?php

namespace Bitrix\Iblock\InheritedProperty;

class IblockValues extends \Bitrix\Iblock\InheritedProperty\BaseValues
{
    /**
     * @param integer $iblockId Iblock identifier.
     */
    public function __construct($iblockId)
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
     * Returns unique identifier of the iblock.
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
     * Returns all the parents of the iblock which is empty array.
     *
     * @return array[]\Bitrix\Iblock\InheritedProperty\BaseValues
     */
    public function getParents()
    {
    }
    /**
     * Returns all calculated values of inherited properties
     * for iblock.
     *
     * @return array[string]string
     */
    public function queryValues()
    {
    }
    /**
     * Clears iblock values DB cache
     *
     * @return void
     */
    function clearValues()
    {
    }
}