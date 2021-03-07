<?php

namespace Bitrix\Iblock\PropertyIndex;

class Dictionary
{
    protected $iblockId = 0;
    protected $cache = array();
    protected static $exists = array();
    /**
     * @param integer $iblockId Information block identifier.
     */
    public function __construct($iblockId)
    {
    }
    /**
     * Returns information block identifier.
     *
     * @return integer
     */
    public function getIblockId()
    {
    }
    /**
     * Internal method to get database table name for storing values.
     *
     * @return string
     */
    public function getTableName()
    {
    }
    /**
     * Checks if dictionary exists in the database.
     * Returns true on success.
     *
     * @return boolean
     */
    public function isExists()
    {
    }
    /**
     * Returns validators for VALUE field.
     * This is an internal method for eAccelerator compatibility.
     *
     * @return array[]\Bitrix\Main\Entity\Validator\Base
     */
    public static function validateValue()
    {
    }
    /**
     * Creates new dictionary for information block.
     * You have to be sure that dictionary does not exists.
     *
     * @return void
     */
    public function create()
    {
    }
    /**
     * Deletes existing dictionary in the database.
     * You have to check that dictionary exists before calling this method.
     *
     * @return void
     */
    public function drop()
    {
    }
    /**
     * Returns unique number presentation of the string.
     *
     * @param string  $value           Value for dictionary lookup.
     * @param boolean $addWhenNotFound Add new value to the dictionary if none found.
     *
     * @return int
     */
    public function getStringId($value, $addWhenNotFound = true)
    {
    }
    /**
     * Returns string by its identifier in the dictionary.
     *
     * @param integer $valueId Value identifier for dictionary lookup.
     *
     * @return string
     */
    public function getStringById($valueId)
    {
    }
    /**
     * Returns array of string by its identifier in the dictionary.
     *
     * @param array $valueIDs Value identifier for dictionary lookup.
     *
     * @return array
     */
    public function getStringByIds($valueIDs)
    {
    }
}