<?php

namespace Bitrix\Main;

/**
 * Class FinderDestTable
 * Is used to store and retrieve last used destinations in the destinations selector dialog
 * @package Bitrix\Main
 */
class FinderDestTable extends \Bitrix\Main\UI\EntitySelector\EntityUsageTable
{
    /*public static function getTableName()
    	{
    		return 'b_finder_dest';
    	}*/
    /*public static function getMap()
    	{
    		global $USER;
    
    		return array(
    			'USER_ID' => array(
    				'data_type' => 'integer',
    				'primary' => true
    			),
    			new Entity\ReferenceField(
    				'USER',
    				'Bitrix\Main\UserTable',
    				array('=this.USER_ID' => 'ref.ID')
    			),
    			'CODE' => array(
    				'data_type' => 'string',
    				'primary' => true
    			),
    			'CODE_USER_ID' => array(
    				'data_type' => 'integer'
    			),
    			'CODE_TYPE' => array(
    				'data_type' => 'string'
    			),
    			new Entity\ReferenceField(
    				'CODE_USER',
    				'Bitrix\Main\UserTable',
    				array('=this.CODE_USER_ID' => 'ref.ID')
    			),
    			new Entity\ReferenceField(
    				'CODE_USER_CURRENT',
    				'Bitrix\Main\UserTable',
    				array(
    					'=this.CODE_USER_ID' => 'ref.ID',
    					'=this.USER_ID' => new SqlExpression('?i', $USER->GetId())
    				)
    			),
    			'CONTEXT' => array(
    				'data_type' => 'string',
    				'primary' => true
    			),
    			'LAST_USE_DATE' => array(
    				'data_type' => 'datetime'
    			)
    		);
    	}*/
    /**
     * Adds or updates data about using destinations by a user
     *
     * @param array $data data to store,
     * keys:
     *    USER_ID - user who selected a destination,
     *    CODE - code or array of codes of destinations,
     *    CONTEXT - the place where a destination is selected
     *
     * @return void
     */
    public static function merge(array $data)
    {
    }
    /**
     * Converts access rights into destination codes
     *
     * @param array $rights access right codes to convert
     * @param array $excludeCodes access right codes to not process
     *
     * @return array destination codes
     */
    public static function convertRights($rights, $excludeCodes = [])
    {
    }
    /**
     * @deprecated isn't used in the kernel already
     * Handler for onAfterAjaxActionCreateFolderWithSharing, onAfterAjaxActionAppendSharing and onAfterAjaxActionChangeSharingAndRights events of disk module
     * Converts sharings into destination codes and stores them
     *
     * @param array $sharings
     *
     * @return void
     */
    public static function onAfterDiskAjaxAction($sharings)
    {
    }
    /**
     * Used once to fill b_finder_dest table
     *
     * @return void
     */
    public static function migrateData()
    {
    }
    /**
     * Returns array of email user IDs fetched from users (email and not email) destination codes
     *
     * @param mixed $code user destination code or array of them
     *
     * @return array
     */
    public static function getMailUserId($code)
    {
    }
}