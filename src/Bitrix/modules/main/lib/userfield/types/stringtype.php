<?php

namespace Bitrix\Main\UserField\Types;

/**
 * Class StringType
 * @package Bitrix\Main\UserField\Types
 */
class StringType extends \Bitrix\Main\UserField\Types\BaseType
{
    public const USER_TYPE_ID = 'string', RENDER_COMPONENT = 'bitrix:main.field.string';
    public static function getDescription() : array
    {
    }
    /**
     * This function is called when new properties are added. We only support mysql data types.
     *
     * This function is called to construct the SQL column creation query
     * to store non-multiple property values.
     * Values of multiple properties are not stored in rows, but in columns
     * (as in infoblocks) and the type of such a field in the database is always text
     *
     * @return string
     */
    public static function getDbColumnType() : string
    {
    }
    /**
     * This function is called before saving the property metadata to the database.
     *
     * It should 'clear' the array with the settings of the instance of the property type.
     * In order to accidentally / intentionally no one wrote down any garbage there.
     *
     * @param array $userField An array describing the field. Warning! this description of the field has not yet been saved to the database!
     * @return array An array that will later be serialized and stored in the database.
     */
    public static function prepareSettings(array $userField) : array
    {
    }
    /**
     * @param null|array $userField
     * @param array $additionalSettings
     * @return array
     */
    public static function getFilterData(?array $userField, array $additionalSettings) : array
    {
    }
    /**
     * This function is validator.
     * Called from the CheckFields method of the $ USER_FIELD_MANAGER object,
     * which can be called from the Add / Update methods of the property owner entity.
     * @param array $userField
     * @param string|array $value
     * @return array
     */
    public static function checkFields(array $userField, $value) : array
    {
    }
    /**
     * This function should return a representation of the field value for the search.
     * It is called from the OnSearchIndex method of the object $ USER_FIELD_MANAGER,
     * which is also called the update function of the entity search index.
     * For multiple values, the VALUE field is an array.
     * @param array $userField
     * @return string|null
     */
    public static function onSearchIndex(array $userField) : ?string
    {
    }
    //<editor-fold desc="Events and methods..."  defaultstate="collapsed">
    /**
     * You can register the onBeforeGetPublicView event handler
     * and customize the display by manipulating the metadata of a custom property.
     * \Bitrix\Main\EventManager::getInstance()->addEventHandler(
     * 'main',
     * 'onBeforeGetPublicView',
     * array('CUserTypeString', 'onBeforeGetPublicView')
     * );
     * You can do the same for editing:
     * onBeforeGetPublicEdit (EDIT_COMPONENT_NAME è EDIT_COMPONENT_TEMPLATE)
     */
    /*
    	public static function onBeforeGetPublicView($event)
    	{
    		$params = $event->getParameters();
    		$arUserField = &$params[0];
    		$arAdditionalParameters = &$params[1];
    		if ($arUserField['USER_TYPE_ID'] == 'string')
    		{
    			$arUserField['VIEW_COMPONENT_NAME'] = 'my:system.field.view';
    			$arUserField['VIEW_COMPONENT_TEMPLATE'] = 'string';
    		}
    	}
    */
    /**
     * You can register the onGetPublicView event handler
     * and display the property as you need.
     * \Bitrix\Main\EventManager::getInstance()->addEventHandler(
     * 'main',
     * 'onGetPublicView',
     * array('CUserTypeString', 'onGetPublicView')
     * );
     * You can do the same for editing: onGetPublicEdit
     */
    /*
    	public static function onGetPublicView($event)
    	{
    		$params = $event->getParameters();
    		$arUserField = $params[0];
    		$arAdditionalParameters = $params[1];
    		if ($arUserField['USER_TYPE_ID'] == 'string')
    		{
    			$html = 'demo string';
    			return new \Bitrix\Main\EventResult(\Bitrix\Main\EventResult::SUCCESS, $html);
    		}
    	}
    */
    /**
     * You can register the onAfterGetPublicView event handler
     * and modify the html before displaying it.
     * \Bitrix\Main\EventManager::getInstance()->addEventHandler(
     * 'main',
     * 'onAfterGetPublicView',
     * array('CUserTypeString', 'onAfterGetPublicView')
     * );
     * You can do the same for editing: onAfterGetPublicEdit
     */
    /*
    	public static function onAfterGetPublicView($event)
    	{
    		$params = $event->getParameters();
    		$arUserField = $params[0];
    		$arAdditionalParameters = $params[1];
    		$html = &$params[2];
    		if ($arUserField['USER_TYPE_ID'] == 'string')
    		{
    			$html .= '!';
    		}
    	}
    */
    /**
     * This function is called before storing the values in the database.
     * Called from the Update method of the $ USER_FIELD_MANAGER object.
     * For multiple values, the function is called several times.
     * @param array $arUserField
     * @param $value
     * @return string
     */
    /*	static function OnBeforeSave($arUserField, $value)
    	{
    		if(strlen($value)>0)
    			return ''.round(doubleval($value), $arUserField['SETTINGS']['PRECISION']);
    	}*/
    //</editor-fold>
}