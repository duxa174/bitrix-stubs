<?php

namespace Bitrix\Sale\Location\Name;

abstract class NameEntity extends \Bitrix\Main\Entity\DataManager
{
    public static function getLanguageFieldName()
    {
    }
    public abstract function getReferenceFieldName();
    /**
     * Add translations for $primaryOwner
     * @param mixed $primaryOwner Primary key of the item
     * @param string[] $names A set of translations for the item
     * 
     * @return void
     */
    public static function addMultipleForOwner($primaryOwner, $names = array())
    {
    }
    /**
     * Update translations for $primaryOwner
     * @param mixed $primaryOwner Primary key of the item
     * @param string[] $names A set of translations for the item
     * 
     * @return void
     */
    public static function updateMultipleForOwner($primaryOwner, $names)
    {
    }
    /**
     * Delete translations for $primaryOwner
     * @param mixed $primaryOwner Primary key of the item
     * 
     * @return void
     */
    public static function deleteMultipleForOwner($primaryOwner)
    {
    }
    /**
     * Get existed translations for $primaryOwner and add only non-existed ones from $names
     * @param mixed $primaryOwner Primary key of the item
     * @param string[] $names A set of translations for the item
     * 
     * @return void
     */
    public static function addAbsentForOwner($primaryOwner, $names, $behaviour = array('TREAT_EMPTY_AS_ABSENT' => true))
    {
    }
    /**
     * This method is for internal use only. It may be changed without any notification further, or even mystically disappear.
     * 
     * @access private
     */
    public static function deleteMultipleByParentRangeSql($sql)
    {
    }
    protected static function checkEmpty($item)
    {
    }
}