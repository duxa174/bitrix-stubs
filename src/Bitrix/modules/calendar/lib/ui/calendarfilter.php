<?php

namespace Bitrix\Calendar\Ui;

class CalendarFilter
{
    protected static $filterId = '';
    /**
     * Get available fields in filter.
     * @return array
     */
    protected static function getAvailableFields()
    {
    }
    /**
     * @return string
     */
    public static function getFilterId($type, $ownerId, $userId)
    {
    }
    /**
     * @param $filterId
     */
    public static function setFilterId($filterId)
    {
    }
    /**
     * @return array
     */
    public static function getPresets()
    {
    }
    /**
     * @param string $filterId
     *
     * @return array
     */
    public static function resolveFilterFields($filterId)
    {
    }
    /**
     * @return array|bool
     */
    /*protected static function processSpecialPresetsFilter()
    	{
    		$arrFilter = array();
    		$request = Context::getCurrent()->getRequest()->toArray();
    		if(array_key_exists('F_FILTER_SWITCH_PRESET', $request)
    			&& static::getFilterCtrlInstance()->checkExistsPresetById($request['F_FILTER_SWITCH_PRESET']))
    		{
    			$arrFilter = static::getFilterCtrlInstance()->getFilterPresetConditionById($request['F_FILTER_SWITCH_PRESET']);
    		}
    
    		return $arrFilter;
    	}*/
    /**
     * @return array
     */
    public static function getFilters()
    {
    }
    /**
     * @return array
     */
    /*
    	protected static function getFilterRaw()
    	{
    		$fields = static::getAvailableFields();
    		$filter = array();
    
    		if (in_array('CREATED_BY', $fields))
    		{
    			$filter['CREATED_BY'] = array(
    				'id' => 'CREATED_BY',
    				'name' => Loc::getMessage('TASKS_HELPER_FLT_CREATED_BY'),
    				'params' => array('multiple' => 'Y'),
    				'type' => 'custom_entity',
    				'selector' => array(
    					'TYPE' => 'user',
    					'DATA' => array(
    						'ID' => 'user',
    						'FIELD_ID' => 'CREATED_BY'
    					)
    				)
    			);
    		}
    
    		if (in_array('RESPONSIBLE_ID', $fields))
    		{
    			$filter['RESPONSIBLE_ID'] = array(
    				'id' => 'RESPONSIBLE_ID',
    				'name' => Loc::getMessage('TASKS_HELPER_FLT_RESPONSIBLE_ID'),
    				'params' => array('multiple' => 'Y'),
    				'type' => 'custom_entity',
    				'selector' => array(
    					'TYPE' => 'user',
    					'DATA' => array(
    						'ID' => 'user',
    						'FIELD_ID' => 'RESPONSIBLE_ID'
    					)
    				)
    			);
    		}
    
    		if (in_array('STATUS', $fields))
    		{
    			$filter['STATUS'] = array(
    				'id' => 'STATUS',
    				'name' => Loc::getMessage('TASKS_FILTER_STATUS'),
    				'type' => 'list',
    				'params' => array(
    					'multiple' => 'Y'
    				),
    				'items' => array(
    					//					\CTasks::METASTATE_VIRGIN_NEW => Loc::getMessage('TASKS_STATUS_1'),
    					\CTasks::STATE_PENDING => Loc::getMessage('TASKS_STATUS_2'),
    					\CTasks::STATE_IN_PROGRESS => Loc::getMessage('TASKS_STATUS_3'),
    					\CTasks::STATE_SUPPOSEDLY_COMPLETED => Loc::getMessage('TASKS_STATUS_4'),
    					\CTasks::STATE_COMPLETED => Loc::getMessage('TASKS_STATUS_5')
    				)
    			);
    		}
    
    		if (in_array('DEADLINE', $fields))
    		{
    			$filter['DEADLINE'] = array(
    				'id' => 'DEADLINE',
    				'name' => Loc::getMessage('TASKS_FILTER_DEADLINE'),
    				'type' => 'date'
    			);
    		}
    
    		if (in_array('GROUP_ID', $fields))
    		{
    			$filter['GROUP_ID'] = array(
    				'id' => 'GROUP_ID',
    				'name' => Loc::getMessage('TASKS_HELPER_FLT_GROUP'),
    				'params' => array('multiple' => 'Y'),
    				'type' => 'custom_entity',
    				'selector' => array(
    					'TYPE' => 'group',
    					'DATA' => array(
    						'ID' => 'group',
    						'FIELD_ID' => 'GROUP_ID'
    					)
    				)
    			);
    		}
    
    		if (in_array('PROBLEM', $fields))
    		{
    			$filter['PROBLEM'] = array(
    				'id' => 'PROBLEM',
    				'name' => Loc::getMessage('TASKS_FILTER_PROBLEM'),
    				'type' => 'list',
    				'items' => self::getAllowedTaskCategories()
    			);
    		}
    
    		if (in_array('PARAMS', $fields))
    		{
    			$filter['PARAMS'] = array(
    				'id' => 'PARAMS',
    				'name' => Loc::getMessage('TASKS_FILTER_PARAMS'),
    				'type' => 'list',
    				'params' => array(
    					'multiple' => 'Y'
    				),
    				'items' => array(
    					'MARKED'=>Loc::getMessage('TASKS_FILTER_PARAMS_MARKED'),
    					'IN_REPORT'=>Loc::getMessage('TASKS_FILTER_PARAMS_IN_REPORT'),
    					'OVERDUED'=>Loc::getMessage('TASKS_FILTER_PARAMS_OVERDUED'),
    //					'SUBORDINATE'=>Loc::getMessage('TASKS_FILTER_PARAMS_SUBORDINATE'),
    					'ANY_TASK'=>Loc::getMessage('TASKS_FILTER_PARAMS_ANY_TASK')
    				)
    			);
    		}
    
    		if (in_array('ID', $fields))
    		{
    			$filter['ID'] = array(
    				'id' => 'ID',
    				'name' => Loc::getMessage('TASKS_FILTER_ID'),
    				'type' => 'number'
    			);
    		}
    		if (in_array('TITLE', $fields))
    		{
    			$filter['TITLE'] = array(
    				'id' => 'TITLE',
    				'name' => Loc::getMessage('TASKS_FILTER_TITLE'),
    				'type' => 'string'
    			);
    		}
    		if (in_array('PRIORITY', $fields))
    		{
    			$filter['PRIORITY'] = array(
    				'id' => 'PRIORITY',
    				'name' => Loc::getMessage('TASKS_PRIORITY'),
    				'type' => 'list',
    				'items' => array(
    					1 => Loc::getMessage('TASKS_PRIORITY_1'),
    					2 => Loc::getMessage('TASKS_PRIORITY_2'),
    				)
    			);
    		}
    		if (in_array('MARK', $fields))
    		{
    			$filter['MARK'] = array(
    				'id' => 'MARK',
    				'name' => Loc::getMessage('TASKS_FILTER_MARK'),
    				'type' => 'list',
    				'items' => array(
    					'P' => Loc::getMessage('TASKS_MARK_P'),
    					'N' => Loc::getMessage('TASKS_MARK_N')
    				)
    			);
    		}
    		if (in_array('ALLOW_TIME_TRACKING', $fields))
    		{
    			$filter['ALLOW_TIME_TRACKING'] = array(
    				'id' => 'ALLOW_TIME_TRACKING',
    				'name' => Loc::getMessage('TASKS_FILTER_ALLOW_TIME_TRACKING'),
    				'type' => 'list',
    				'items' => array(
    					'Y' => Loc::getMessage('TASKS_ALLOW_TIME_TRACKING_Y'),
    					'N' => Loc::getMessage('TASKS_ALLOW_TIME_TRACKING_N'),
    				)
    			);
    		}
    		if (in_array('CREATED_DATE', $fields))
    		{
    			$filter['CREATED_DATE'] = array(
    				'id' => 'CREATED_DATE',
    				'name' => Loc::getMessage('TASKS_FILTER_CREATED_DATE'),
    				'type' => 'date'
    			);
    		}
    		if (in_array('CLOSED_DATE', $fields))
    		{
    			$filter['CLOSED_DATE'] = array(
    				'id' => 'CLOSED_DATE',
    				'name' => Loc::getMessage('TASKS_FILTER_CLOSED_DATE'),
    				'type' => 'date'
    			);
    		}
    		if (in_array('DATE_START', $fields))
    		{
    			$filter['DATE_START'] = array(
    				'id' => 'DATE_START',
    				'name' => Loc::getMessage('TASKS_FILTER_DATE_START'),
    				'type' => 'date'
    			);
    		}
    		if (in_array('START_DATE_PLAN', $fields))
    		{
    			$filter['START_DATE_PLAN'] = array(
    				'id' => 'START_DATE_PLAN',
    				'name' => Loc::getMessage('TASKS_FILTER_START_DATE_PLAN'),
    				'type' => 'date'
    			);
    		}
    		if (in_array('END_DATE_PLAN', $fields))
    		{
    			$filter['END_DATE_PLAN'] = array(
    				'id' => 'END_DATE_PLAN',
    				'name' => Loc::getMessage('TASKS_FILTER_END_DATE_PLAN'),
    				'type' => 'date'
    			);
    		}
    
    		if (in_array('ACTIVE', $fields))
    		{
    			$filter['ACTIVE'] = array(
    				'id' => 'ACTIVE',
    				'name' => Loc::getMessage('TASKS_FILTER_ACTIVE'),
    				'type' => 'date'
    			);
    		}
    
    		if (in_array('ACCOMPLICE', $fields))
    		{
    			$filter['ACCOMPLICE'] = array(
    				'id' => 'ACCOMPLICE',
    				'name' => Loc::getMessage('TASKS_HELPER_FLT_ACCOMPLICES'),
    				'params' => array('multiple' => 'Y'),
    				'type' => 'custom_entity',
    				'selector' => array(
    					'TYPE' => 'user',
    					'DATA' => array(
    						'ID' => 'user',
    						'FIELD_ID' => 'ACCOMPLICE'
    					)
    				)
    			);
    		}
    		if (in_array('AUDITOR', $fields))
    		{
    			$filter['AUDITOR'] = array(
    				'id' => 'AUDITOR',
    				'name' => Loc::getMessage('TASKS_HELPER_FLT_AUDITOR'),
    				'params' => array('multiple' => 'Y'),
    				'type' => 'custom_entity',
    				'selector' => array(
    					'TYPE' => 'user',
    					'DATA' => array(
    						'ID' => 'user',
    						'FIELD_ID' => 'AUDITOR'
    					)
    				)
    			);
    		}
    
    		if (in_array('TAG', $fields))
    		{
    			$filter['TAG'] = array(
    				'id' => 'TAG',
    				'name' => Loc::getMessage('TASKS_FILTER_TAG'),
    				'type' => 'string'
    			);
    		}
    
    		if (in_array('ROLEID', $fields))
    		{
    			$roles = \CTaskListState::getKnownRoles();
    			foreach($roles as $roleId)
    			{
    				$roleCodeName = strtolower(\CTaskListState::resolveConstantCodename($roleId));
    				$items[ $roleCodeName ] = \CTaskListState::getRoleNameById($roleId);
    			}
    			$filter['ROLEID'] = array(
    				'id' => 'ROLEID',
    				'name' => Loc::getMessage('TASKS_FILTER_ROLEID'),
    				'type' => 'list',
    				'default'=>true,
    				'items'=> $items
    			);
    		}
    
    		return $filter;
    	}*/
}