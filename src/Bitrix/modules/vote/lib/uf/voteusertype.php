<?php

namespace Bitrix\Vote\Uf;

final class VoteUserType
{
    const TYPE_NEW_ATTACH = 'NewAttach';
    const TYPE_SAVED_ATTACH = 'SavedAttach';
    const NEW_VOTE_PREFIX = 'n';
    /**
     * @return array
     */
    public static function getUserTypeDescription()
    {
    }
    /**
     * @param $userField
     * @return string
     */
    public static function getDBColumnType($userField)
    {
    }
    /**
    * @param string $entityId BLOG_POST.
    * @param integer $ID Blog ID.
    * @param array $fields Array (
    			[ID] => 29,
    			[URL] => "",
    			[BLOG] => "",
    			...).
    * @return void
    */
    public static function onBeforePostUserFieldUpdate($entityId, $ID, $fields)
    {
    }
    /**
    * Prepares data("SETTINGS") for serialization in functions CUserTypeEntity::Add & CUserTypeEntity::Update
    * @param array $userField Array (
    			[ID] => 29
    			[ENTITY_ID] => BLOG_POST
    			[FIELD_NAME] => UF_BLOG_POST_VOTE
    			[USER_TYPE_ID] => vote
    			[XML_ID] => UF_BLOG_POST_VOTE
    			[SORT] => 100
    			[MULTIPLE] => N
    			[MANDATORY] => N
    			[SHOW_FILTER] => N
    			[SHOW_IN_LIST] => Y
    			[EDIT_IN_LIST] => Y
    			[IS_SEARCHABLE] => N
    			[SETTINGS] => Array
    				(
    					[CHANNEL_ID] => 1
    					[UNIQUE] => 40
    					[UNIQUE_IP_DELAY] => Array
    						(
    							[DELAY] =>
    							[DELAY_TYPE] => S
    						)
    
    					[NOTIFY] => I
    				)
    
    			[EDIT_FORM_LABEL] => UF_BLOG_POST_VOTE
    			[LIST_COLUMN_LABEL] =>
    			[LIST_FILTER_LABEL] =>
    			[ERROR_MESSAGE] =>
    			[HELP_MESSAGE] =>
    			[USER_TYPE] => Array
    				(
    					[USER_TYPE_ID] => vote
    					[CLASS_NAME] => Bitrix\Vote\Uf\VoteUserType
    					[DESCRIPTION] => "Vote"
    					[BASE_TYPE] => int
    				)
    			[VALUE] => 27
    			[ENTITY_VALUE_ID] => 247)).
    * @return array
    */
    public static function prepareSettings($userField)
    {
    }
    /**
     * Checks CHANNEL or creates add vote group.
     * @param array &$params Settings array.
     * @return boolean
     */
    public static function checkSettings(&$params)
    {
    }
    /**
     * Shows data form in admin part when you edit or add usertype.
     * @param bool $userField UserField array.
     * @param string $htmlControl HtmlControl.
     * @param bool $varsFromForm Get params from $_REQUEST.
     * @return string
     */
    public static function getSettingsHTML($userField = false, $htmlControl, $varsFromForm)
    {
    }
    /**
     * @param array $userField UserField array.
     * @param array $value Value.
     * @return string
     */
    public static function getEditFormHTML($userField, $value, $bVarsFromForm = false)
    {
    }
    /**
     * @param array $userField UserField array.
     * @param mixed $value Value for Vote.
     * @return string
     */
    public static function getPublicViewHTML($userField, $value)
    {
    }
    /**
     * @return string
     */
    public static function getFilterHTML()
    {
    }
    /**
     * @param array $userField UserField array.
     * @param array $htmlControl HTML Control.
     * @return string
     */
    public static function getAdminListViewHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField UserField array.
     * @param array $htmlControl HTML Control.
     * @return string
     */
    public static function getAdminListEditHTML($userField, $htmlControl)
    {
    }
    /**
     * @param array $userField UserField array.
     * @param array $htmlControl HTML Control.
     * @return string
     */
    public static function getAdminListEditHTMLMulty($userField, $htmlControl)
    {
    }
    /**
     * Checks fields of vote date before saving.
     * @param array $userField UserFiled array.
     * @param mixed $value Always singular value.
     * @param bool $userId False means current user id.
     * @return array
     */
    public static function checkFields($userField, $value, $userId = false)
    {
    }
    /**
     * @param array $userField UserFiled array.
     * @return string
     */
    public static function onSearchIndex($userField)
    {
    }
    /**
     * Called in all cases Mutiple=Y and Multiple=N
     * @param array $userField UserFiled array.
     * @param string $value Number of attach or n0, n1...
     * @param int $userId User ID.
     * @return int|string
     */
    public static function onBeforeSave($userField, $value, $userId = false)
    {
    }
    /**
     * @param array $userField
     * @param int $newEntityId
     * @param $attachedId
     * @param object $implementer
     * @param bool $userId
     * @return array|int|string
     * @throws \Bitrix\Main\ObjectException
     */
    public static function onBeforeCopy(array $userField, int $newEntityId, $attachedId, $implementer, $userId = false)
    {
    }
    /**
     * @param array $userField UserFiled array.
     * @param string $value Number of attach or n0, n1...
     * @return void
     */
    public static function onDelete($userField, $value)
    {
    }
    /**
     * Detect: this is already exists attachedObject or new object.
     * @param mixed $value Integer if it ia an attach or n1, n2 in case unsaved attach.
     * @return array
     */
    public static function detectType($value)
    {
    }
    private static function getOrCheckUserId($userId = false)
    {
    }
}