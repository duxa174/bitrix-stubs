<?php

namespace Bitrix\Iblock\InheritedProperty;

abstract class BaseValues
{
    /** @var integer */
    protected $iblockId = null;
    /** @var array[string][string]string */
    protected $values = false;
    /** @var ValuesQueue */
    protected $queue = null;
    /**
     * @param integer $iblockId Iblock identifier.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Returns the identifier of the iblock of the entity.
     *
     * @return integer
     */
    public function getIblockId()
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
    public abstract function getType();
    /**
     * Returns unique identifier of the entity
     *
     * @return integer
     */
    public abstract function getId();
    /**
     * Creates an entity which will be used to process the templates.
     *
     * @return \Bitrix\Iblock\Template\Entity\Base
     */
    public abstract function createTemplateEntity();
    /**
     * Returns all the parents of the entity.
     *
     * @return array[]\Bitrix\Iblock\InheritedProperty\BaseValues
     */
    public function getParents()
    {
    }
    /**
     * Returns it's first parent if exists one.
     * Otherwise returns null.
     *
     * @return \Bitrix\Iblock\InheritedProperty\BaseValues|null
     */
    public function getParent()
    {
    }
    /**
     * Returns all calculated values of inherited properties
     * for this entity.
     *
     * @return array[string]string
     */
    public function getValues()
    {
    }
    /**
     * Returns value of the inherited property.
     * The result is html encoded string.
     *
     * @param string $propertyCode Mnemonic code.
     * @return string
     */
    public function getValue($propertyCode)
    {
    }
    /**
     * Queries templates for this entity.
     * Then processes them in order to get
     * calculated values.
     *
     * @return array[string][string]string
     */
    public function queryValues()
    {
    }
    /**
     * Checks if there are some templates exists for this set of values.
     *
     * @return boolean
     */
    public function hasTemplates()
    {
    }
    /**
     * Clears entity values DB cache
     *
     * @return void
     */
    abstract function clearValues();
    /**
     * Must be called on template delete.
     *
     * @param integer $ipropertyId Identifier of the inherited property.
     *
     * @return void
     */
    public function deleteValues($ipropertyId)
    {
    }
    /**
     * Helper method to save batch values.
     *
     * @param string $tableName Where to insert data.
     * @param array  $fields Fields list.
     * @param array  $rows Data to insert.
     *
     * @return void
     */
    protected function insertValues($tableName, $fields, $rows)
    {
    }
    /**
     * Puts a mark for and element or section to be queried from the database.
     *
     * @param integer $iblockId IBlock identifier.
     * @param integer $id Element or section identifier.
     *
     * @return void
     */
    public static function queue($iblockId, $id)
    {
    }
}