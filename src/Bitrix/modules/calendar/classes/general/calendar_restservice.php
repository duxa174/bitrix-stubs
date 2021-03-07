<?php

/**
 * This class used for internal use only, not a part of public API.
 * It can be changed at any time without notification.
 *
 * @access private
 */
final class CCalendarRestService extends \IRestService
{
    const SCOPE_NAME = 'calendar';
    const PLACEMENT_GRID_VIEW = 'CALENDAR_GRIDVIEW';
    public static function OnRestServiceBuildDescription()
    {
    }
    /*
     * Returns array of events
     *
     * @param array $params - incomoning params:
     * $params['type'] - (required) calendar type ('user'|'group')
     * $params['ownerId'] - owner id
     * $params['from'] - datetime, "from" limit, default value - 1 month before current date
     * $params['to'] - datetime, "to" limit, default value - 3 month after current date
     * $params['section'] - inline or array of sections
     * @return array of events
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.event.get",
     * {
     * 		type: 'user',
     *		ownerId: '1',
     * 		from: '2013-06-20',
     * 		to: '2013-08-20',
     * 		section: [21, 44]
     * });
     *
     */
    public static function EventGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Returns event by it id
     *
     * @param array $params - incomoning params:
     * $params['id'] - int, (required) calendar event id
     * @return event or null
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.event.getbyid",
     * {
     * 		id: 324
     * });
     *
     */
    public static function EventGetById($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
    * Add new event
    *
    * @param array $params - incomoning params:
    * $params['type'] - (required), number, calendar type
    * $params['ownerId'] - (required), number, owner id
    * $params['from'] - (required) datetime, "from" limit
    * $params['to'] - (required) datetime, "to" limit
    * $params['timezone_from'] - string, timezone, dafault value - timezone of current user
    * $params['timezone_to'] - string, timezone, dafault value - timezone of current user
    * $params['from_ts'] - timestamp, "from" limit, can be set instead of $params['from']
    * $params['to_ts'] - timestamp, "to" limit, can be set instead of $params['to']
    * $params['section'] - (required if $params['auto_detect_section'] is not "Y"), number, id of the section
    * $params['auto_detect_section'] - "Y" | "N", if "Y" $params['section'] could be skipped
    * $params['name'] - (required), string, name of the event
    * $params['skip_time'] - "Y"|"N",
    * $params['description'] - string, description of the event
    * $params['color'] - background color of the event
    * $params['text_color'] - text color of the event
    * $params['accessibility'] - 'busy'|'quest'|'free'|'absent' - accessibility for user
    * $params['importance'] - 'high' | 'normal' | 'low' - importance for the event
    * $params['private_event'] - "Y" | "N"
    * $params['rrule'] - array of the recurence Rule
    * $params['is_meeting'] - "Y" | "N"
    * $params['location'] - location
    * $params['remind'] - array(
    * 	array(
    * 		'type' => 'min'|'hour'|'day', type of reminder
    * 		'count' => count of time
    * 	)
    * ) - reminders
    * $params['attendees'] - array of the attendees for meeting if ($params['is_meeting'] == "Y")
    * $params['host'] - host of the event
    * $params['meeting'] = array(
    		'text' =>  inviting text,
    		'open' => true|false if meeting is open,
    		'notify' => true|false,
    		'reinvite' => true|false
    	)
    * @return id of the new event.
    * @throws \Bitrix\Rest\RestException
    *
    * @example (Javascript)
    * BX24.callMethod("calendar.event.add",
    * {
    *		type: 'user',
    *	 	ownerId: '2',
    * 		name: 'New Event Name',
    * 		description: 'Description for event',
    * 		from: '2013-06-14',
    * 		to: '2013-06-14',
    * 		skip_time: 'Y',
    * 		section: 5,
    * 		color: '#9cbe1c',
    * 		text_color: '#283033',
    * 		accessibility: 'absent',
    * 		importance: 'normal',
    * 		is_meeting: 'Y',
    * 		private_event: 'N',
    * 		remind: [{type: 'min', count: 20}],
    * 		location: 'Kaliningrad',
    * 		attendees: [1, 2, 3],
    *		host: 2,
    * 		meeting: {
    * 			text: 'inviting text',
    * 			open: true,
    * 			notify: true,
    * 			reinvite: false
    * 		}
    * });
    */
    public static function EventAdd($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Edit existent event
     *
     * @param array $params - incomoning params:
     * $params['id'] - (required) event id,
     * $params['type'] - number, (required) calendar type
     * $params['ownerId'] - number, owner id
     * $params['from'] - datetime, "from" limit
     * $params['to'] - datetime, "to" limit
     * $params['timezone_from'] - string, timezone, dafault value - timezone of current user
     * $params['timezone_to'] - string, timezone, dafault value - timezone of current user
     * $params['from_ts'] - timestamp, "from" limit,
     * $params['to_ts'] - timestamp, "to" limit
     * $params['section'] - number,(required) id of the section
     * $params['name'] - string, (required) name of the event
     * $params['skip_time'] - "Y"|"N",
     * $params['description'] - string, description of the event
     * $params['color'] - background color of the event
     * $params['text_color'] - text color of the event
     * $params['accessibility'] - 'busy'|'quest'|'free'|'absent' - accessibility for user
     * $params['importance'] - 'high' | 'normal' | 'low' - importance for the event
     * $params['private_event'] - "Y" | "N"
     * $params['rrule'] - array of the recurence Rule
     * $params['is_meeting'] - "Y" | "N"
     * $params['location'] - location
     * $params['remind'] - array(
     * 	array(
     * 		'type' => 'min'|'hour'|'day', type of reminder
     * 		'count' => count of time
     * 	)
     * ) - reminders
     * $params['attendees'] - array of the attendees for meeting if ($params['is_meeting'] == "Y")
     * $params['host'] - host of the event
     * $params['meeting'] = array(
     * 		'text' =>  inviting text,
     * 		'open' => true|false if meeting is open,
     * 		'notify' => true|false,
     * 		'reinvite' => true|false
     * 	)
     * @return id of edited event
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.event.update",
     * {
     * 		id: 699
     *		type: 'user',
     *	 	ownerId: '2',
     * 		name: 'Changed Event Name',
     * 		description: 'New description for event',
     * 		from: '2013-06-17',
     * 		to: '2013-06-17',
     * 		skip_time: 'Y',
     * 		section: 5,
     * 		color: '#9cbe1c',
     * 		text_color: '#283033',
     * 		accessibility: 'free',
     * 		importance: 'normal',
     * 		is_meeting: 'N',
     * 		private_event: 'Y',
     * 		remind: [{type: 'min', count: 10}]
     * });
     */
    public static function EventUpdate($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Delete event
     *
     * @param array $params - incomoning params:
     * $params['type'] (required) calendar type
     * $params['ownerId'] (required) owner id
     * $params['id'] (required) event id
     * @return true if everything ok
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.event.delete",
     * {
     * 		id: 698
     *		type: 'user',
     *	 	ownerId: '2'
     * });
     */
    public static function EventDelete($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return array of bearest events for current user
     *
     * @param array $params - incomoning params:
     * $params['ownerId'] - owner id
     * $params['type'] - calendar type
     * $params['days'] - future days count (default - 60)
     * $params['forCurrentUser'] - true/false - list of nearest events for current user
     * $params['maxEventsCount'] - maximum events count
     * $params['detailUrl'] - url for calendar
     *
     * @return array of events
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.event.get.nearest",
     * {
     *		type: 'user',
     *	 	ownerId: '2',
     * 		days: 10,
     * 		forCurrentUser: true,
     *		detailUrl: '/company/personal/user/#user_id#/calendar/'
     * });
     *
     */
    public static function EventGetNearest($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return list of sections
     *
     * @param array $params - incomoning params:
     * $params['type'] (required) calendar type
     * $params['ownerId'] (required) owner id
     *
     * @return array of sections
     *
     * @throws \Bitrix\Rest\RestException
     *
     *  @example (Javascript)
     * BX24.callMethod("calendar.section.get",
     * {
     * 		type: 'user',
     *		ownerId: '1'
     * });
     */
    public static function SectionGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
    * Add new section
    *
    * @param array $params - incomoning params:
    * $params['type'] - (required), number, calendar type
    * $params['ownerId'] - (required), number, owner id
    * $params['name'] - string, (required) name of the section
    * $params['description'] - string, description of the section
    * $params['color']
    * $params['text_color']
    * $params['export'] = array(
    		'ALLOW' => true|false,
    		'SET' => array
    	)
    * $params['access'] - array of access data
    *
    * @return id of created section
    *
    * @throws \Bitrix\Rest\RestException
    *
    * @example (Javascript)
    * BX24.callMethod("calendar.section.add",
    * {
    * 		type: 'user',
    *	 	ownerId: '2',
    * 		name: 'New Section',
    * 		description: 'Description for section',
    * 		color: '#9cbeee',
    * 		text_color: '#283000',
    * 		export: [{ALLOW: false}]
    * 		access: {
    * 			'D114': 17,
    * 			'G2': 13,
    * 			'U2':15
    * 		}
    * });
    */
    public static function SectionAdd($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
    * Update section
    *
    * @param array $params - incomoning params:
    * $params['id'] - (required) number, calendar type
    * $params['type'] - (required) number, calendar type
    * $params['ownerId'] - (required) number, owner id
    * $params['name'] - string, name of the section
    * $params['description'] - string, description of the section
    * $params['color']
    * $params['text_color']
    * $params['export'] = array(
    		'ALLOW' => true|false,
    		'SET' => array
    	)
    * $params['access'] - array of access data
    *
    * @return id of modified section
    *
    * @throws \Bitrix\Rest\RestException
    *
    * @example (Javascript)
    * BX24.callMethod("calendar.section.update",
    * {
    * 		id: 325,
    * 		type: 'user',
    *	 	ownerId: '2',
    * 		name: 'Changed Section Name',
    * 		description: 'New description for section',
    * 		color: '#9cbeAA',
    * 		text_color: '#283099',
    * 		export: [{ALLOW: false}]
    * 		access: {
    * 			'D114': 17,
    * 			'G2': 13,
    * 			'U2':15
    * 		}
    * });
    */
    public static function SectionUpdate($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Delete section
     *
     * @param array $params - incomoning params:
     * $params['type'] (required) calendar type
     * $params['ownerId'] (required) owner id
     * $params['id'] (required) section id
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.section.delete",
     * {
     * 		type: 'user',
     *	 	ownerId: '2',
     * 		id: 521
     * });
     */
    public static function SectionDelete($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Set meeting status for current user
     *
     * @param array $params - incomoning params:
     * $params['eventId'] - event id
     * $params['status'] = 'Y' | 'N' | 'Q'
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.meeting.status.set",
     * {
     * 		eventId: '651',
     *	 	status: 'Y'
     * });
     */
    public static function MeetingStatusSet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return meeting status for current user for given event
     *
     * @param array $params - incomoning params:
     * $params['eventId'] - (required) event id
     *
     * @return status - "Y" | "N" | "Q"
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.meeting.status.get",
     * {
     * 		eventId: '651'
     * });
     */
    public static function MeetingStatusGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * @deprecated
     */
    public static function MeetingParamsSet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Allow to get user's accessibility
     *
     * @param array $params - incomoning params:
     * $params['users'] - (required) array of user ids
     * $params['from'] - (required) date, from limit
     * $params['to'] - (required) date, to limit
     *
     * @return array - array('user_id' => array()) - information about accessibility for each asked user
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.accessibility.get",
     * {
     * 		from: '2013-06-20',
     * 		to: '2013-12-20',
     * 		users: [1, 2, 34]
     * });
     */
    public static function MeetingAccessibilityGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return calendar general settings
     *
     * @return array of settings
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.settings.get", {});
     */
    public static function SettingsGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Set calendar settings
     *
     * @param array $params - incomoning params:
     * $params['settings'] - (required) array of user's settings
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.settings.set",
     * {
     * 		settings: {
     * 			work_time_start: 9,
     * 			work_time_end: 19,
     * 			year_holidays: '1.01,2.01,7.01,23.02,8.03,1.05,9.05,12.06,4.11,12.12,03.04,05.04',
     * 			week_holidays:['SA','SU'],
     *			week_start: 'MO'
     * 		}
     * });
     */
    public static function SettingsSet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Clears calendar settings
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.settings.clear",{});
     */
    public static function SettingsClear()
    {
    }
    /*
     * Returns user's settings
     *
     * @return array of settings
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.user.settings.get",{});
     */
    public static function UserSettingsGet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Saves user's settings
     *
     * @param array $params - incomoning params:
     * $params['settings'] - (required) array of user's settings
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.user.settings.set",
     * {
     * 		settings: {
     * 			tabId: 'month',
     * 			meetSection: '23',
     * 			blink: true,
     * 			showDeclined: false,
     *			showMuted: true
     * 		}
     * });
     */
    public static function UserSettingsSet($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return list of all resources
     *
     * @return array of resources
     *
     * @throws \Bitrix\Rest\RestException
     *
     *  @example (Javascript)
     * BX24.callMethod("calendar.resource.list");
     */
    public static function ResourceList()
    {
    }
    /*
     * Add new resource
     *
     * @param array $params - incomoning params:
     * $params['name'] - string, (required) name of the resource
     *
     * @return id of created resource
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.add",
     * {
     * 		name: 'My resource title'
     * });
     */
    public static function ResourceAdd($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Update resource
     *
     * @param array $params - incomoning params:
     * $params['resourceId'] - (required) number,
     * $params['name'] - (required) string, name of the resource
     *
     * @return id of modified section
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.update",
     * {
     * 		resourceId: 325,
     * 		name: 'Changed Resource Name'
     * });
     */
    public static function ResourceUpdate($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Delete resource
     *
     * @param array $params - incomoning params:
     * $params['resourceId'] (required) resource id
     *
     * @return true if everything ok
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.delete",
     * {
     * 		resourceId: 521
     * });
     */
    public static function ResourceDelete($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Return list of booking for resources by id or by resource types
     *
     * @param array $params - incomoning params:
     * $params['filter'] - array of ids of resource bookings
     * 		$params['filter']['resourceIdList'] - array of ids of resource bookings, if this parameter is specified other filter params (resourceTypeIdList, from, to) in filter are not used.
     * 		$params['filter']['resourceTypeIdList'] - array, list of resource type ids. Required if resourceIdList is not specified.
     * 		$params['filter']['from'] - datetime, "from" limit, default value - 1 month before current date
     * 		$params['filter']['to'] - datetime, "to" limit, default value - 3 month after current date
     * @return array of booking for resources
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.booking.list", {
     * 		filter: {
     *			resourceTypeIdList: [10852, 10888, 10873, 10871, 10853]
     *			from: '2013-06-20',
     * 			to: '2013-08-20',
     * 		}
     *	};
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.booking.list", {
     * 		filter: {
     *			resourceIdList: [10, 18, 17]
     * 		}
     *	};
     */
    public static function ResourceBookingList($params = [])
    {
    }
    /*
     * Books given resource
     *
     * @param array $params - incomoning params:
     * $params['resourceType'] - (required) string, type of the resource could be 'user' or 'resource'
     * $params['resourceId'] - (required) number, id of the resource or user
     * $params['from'] - (required) datetime, "from"
     * $params['to'] - (required) datetime, "to" limit
     * $params['timezone'] - string, timezone, dafault value - timezone of current user
     * $params['skipTime'] - is it booking for whole day(s) "Y"|"N" deafault value - "N",
     * $params['bookingName'] - string, name of the booking event
     * $params['serviceName'] - string, name of the booking event
     * $params['bindingEntityType'] - string, type of entity binded to the booking (example CRM_LEAD)
     * $params['bindingEntityId'] - number, id of entity binded to the booking
     *
     * @return array of booking for esources
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.booking.add", {
     *		resourceTypeIdList: [10852, 10888, 10873, 10871, 10853]
     *		from: '2013-06-20',
     * 		to: '2013-08-20',
     *	};
     */
    //	public static function ResourceBookingAdd($params = array())
    //	{
    //		$userId = CCalendar::GetCurUserId();
    //		$methodName = "calendar.resource.booking.add";
    //
    //		$necessaryParams = array('resourceType', 'resourceId', 'from', 'to');
    //
    //		if (isset($params['from']))
    //		{
    //			$params['from'] = CRestUtil::unConvertDateTime($params['from']);
    //		}
    //
    //		if (isset($params['to']))
    //		{
    //			$params['to'] = CRestUtil::unConvertDateTime($params['to']);
    //		}
    //
    //		if (isset($params['resourceId']))
    //		{
    //			$params['resourceId'] = intval($params['resourceId']);
    //		}
    //
    //		$params['bindingEntityType'] = isset($params['bindingEntityType']) ? $params['bindingEntityType'] : 'REST';
    //		$params['bindingEntityId'] = isset($params['bindingEntityId']) ? intval($params['bindingEntityId']) : 0;
    //
    //		foreach ($necessaryParams as $param)
    //		{
    //			if (!isset($params[$param]) || empty($params[$param]))
    //			{
    //				throw new RestException(Loc::getMessage('CAL_REST_PARAM_EXCEPTION', array('#PARAM_NAME#' => $param,'#REST_METHOD#' => $methodName)));
    //			}
    //		}
    //
    //		if (!in_array($params['resourceType'], ['user', 'resource']))
    //		{
    //			throw new RestException(Loc::getMessage('CAL_REST_RES_TYPE_ERROR', array('#ALLOWED_TYPES#' => 'user|resource')));
    //		}
    //
    //		$entryFields = array(
    //			"DATE_FROM" => $params['from'],
    //			"DATE_TO" => $params['to'],
    //			"SKIP_TIME" => $params['skip_time'],
    //			"NAME" => !empty($params['bookingName']) ? $params['bookingName'] : Loc::getMessage('CAL_REST_RES_BOOKING_DEFAULT_VALUE')
    //		);
    //
    //		if ($params['serviceName'] !== '')
    //		{
    //			$entryFields["DESCRIPTION"] = Loc::getMessage("CAL_REST_RES_BOOKING_SERVICE_LABEL").': '.$params['serviceName'];
    //		}
    //
    //		if (strtoupper($params['skipTime']) !== 'Y')
    //		{
    //			$userTimezoneName = \CCalendar::getUserTimezoneName($userId, true);
    //			if($userTimezoneName)
    //			{
    //				$entryFields['TZ_FROM'] = $userTimezoneName;
    //				$entryFields['TZ_TO'] = $userTimezoneName;
    //			}
    //		}
    //
    //		$resourceBookingId = \Bitrix\Calendar\UserField\ResourceBooking::saveResource(
    //			false,
    //			$params['resourceType'],
    //			$params['resourceId'],
    //			$entryFields,
    //			[
    //				'serviceName' => $params['serviceName'],
    //				'bindingEntityType' => $params['bindingEntityType'],
    //				'bindingEntityId' => $params['bindingEntityId'],
    //				'bindingUserfieldId' => $params['bindingUserfieldId']
    //			]
    //		);
    //
    //		if (!$resourceBookingId)
    //		{
    //			throw new RestException(Loc::getMessage("CAL_REST_RESOURCE_BOOKING_ADD_ERROR"));
    //		}
    //
    //		return $resourceBookingId;
    //	}
    /*
     * Edit resource booking
     *
     * @param array $params - incomoning params:
     * $params['id'] - (required) numper, booking id,
     * $params['resourceType'] - (required) string, type of the resource could be 'user' or 'resource'
     * $params['resourceId'] - (required) number, id of the resource or user
     * $params['from'] - (required) datetime, "from"
     * $params['to'] - (required) datetime, "to" limit
     * $params['timezone'] - string, timezone, dafault value - timezone of current user
     * $params['skipTime'] - is it booking for whole day(s) "Y"|"N" deafault value - "N",
     * $params['bookingName'] - string, name of the booking event
     * $params['serviceName'] - string, name of the booking event
     * $params['bindingEntityType'] - string, type of entity binded to the booking (example CRM_LEAD)
     * $params['bindingEntityId'] - number, id of entity binded to the booking
     *
     * @return array of booking for esources
     *
     * @throws \Bitrix\Rest\RestException
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.resource.booking.update", {
     * 		id:
     *		resourceTypeIdList: [10852, 10888, 10873, 10871, 10853]
     *		from: '2013-06-20',
     * 		to: '2013-08-20',
     *	};
     */
    //	public static function ResourceBookingUpdate($params = array())
    //	{
    //		$userId = CCalendar::GetCurUserId();
    //		$methodName = "calendar.resource.booking.update";
    //
    //		$necessaryParams = array('id', 'resourceType', 'resourceId', 'from', 'to');
    //
    //		if (isset($params['id']))
    //		{
    //			$params['id'] = intval($params['id']);
    //		}
    //
    //		if (isset($params['from']))
    //		{
    //			$params['from'] = CRestUtil::unConvertDateTime($params['from']);
    //		}
    //
    //		if (isset($params['to']))
    //		{
    //			$params['to'] = CRestUtil::unConvertDateTime($params['to']);
    //		}
    //
    //		if (isset($params['resourceId']))
    //		{
    //			$params['resourceId'] = intval($params['resourceId']);
    //		}
    //
    //		$params['bindingEntityType'] = isset($params['bindingEntityType']) ? $params['bindingEntityType'] : 'REST';
    //		$params['bindingEntityId'] = isset($params['bindingEntityId']) ? intval($params['bindingEntityId']) : 0;
    //
    //		foreach ($necessaryParams as $param)
    //		{
    //			if (!isset($params[$param]) || empty($params[$param]))
    //			{
    //				throw new RestException(Loc::getMessage('CAL_REST_PARAM_EXCEPTION', array('#PARAM_NAME#' => $param,'#REST_METHOD#' => $methodName)));
    //			}
    //		}
    //
    //		if (!in_array($params['resourceType'], ['user', 'resource']))
    //		{
    //			throw new RestException(Loc::getMessage('CAL_REST_RES_TYPE_ERROR', array('#ALLOWED_TYPES#' => 'user|resource')));
    //		}
    //
    //		$entryFields = array(
    //			"DATE_FROM" => $params['from'],
    //			"DATE_TO" => $params['to'],
    //			"SKIP_TIME" => $params['skip_time'],
    //			"NAME" => !empty($params['bookingName']) ? $params['bookingName'] : Loc::getMessage('CAL_REST_RES_BOOKING_DEFAULT_VALUE')
    //		);
    //
    //		if ($params['serviceName'] !== '')
    //		{
    //			$entryFields["DESCRIPTION"] = Loc::getMessage("CAL_REST_RES_BOOKING_SERVICE_LABEL").': '.$params['serviceName'];
    //		}
    //
    //		if (strtoupper($params['skipTime']) !== 'Y')
    //		{
    //			$userTimezoneName = \CCalendar::getUserTimezoneName($userId, true);
    //			if($userTimezoneName)
    //			{
    //				$entryFields['TZ_FROM'] = $userTimezoneName;
    //				$entryFields['TZ_TO'] = $userTimezoneName;
    //			}
    //		}
    //
    //		$resourceBookingId = \Bitrix\Calendar\UserField\ResourceBooking::saveResource(
    //			$params['id'],
    //			$params['resourceType'],
    //			$params['resourceId'],
    //			$entryFields,
    //			[
    //				'serviceName' => $params['serviceName'],
    //				'bindingEntityType' => $params['bindingEntityType'],
    //				'bindingEntityId' => $params['bindingEntityId'],
    //				'bindingUserfieldId' => $params['bindingUserfieldId']
    //			]
    //		);
    //
    //		if (!$resourceBookingId)
    //		{
    //			throw new RestException(Loc::getMessage("CAL_REST_RESOURCE_BOOKING_ADD_ERROR"));
    //		}
    //
    //		return $resourceBookingId;
    //	}
    //	public static function ResourceBookingDelete($params = array())
    //	{
    //		$userId = CCalendar::GetCurUserId();
    //		$methodName = "calendar.resource.booking.delete";
    //
    //		\CCalendar::deleteEvent(intVal($entry['EVENT_ID']), false, array('checkPermissions' => false));
    //		Internals\ResourceTable::delete($entry['ID']);
    //	}
    /*
     * Clears user's settings
     *
     * @return true if everything ok
     *
     * @example (Javascript)
     * BX24.callMethod("calendar.settings.clear",{});
     */
    public static function UserSettingsClear($params = array(), $nav = \null, $server = \null)
    {
    }
    /*
     * Filters data fields about entry for event handlers
     *
     * @return array - array('id' => number) - id of entry which triggered event
     */
    public static function PrepareOnCalendarEntryEvent($params, $handler)
    {
    }
    /*
     * Filters data fields about section for event handlers
     *
     * @return array - array('id' => number) - id of section which triggered event
     */
    public static function PrepareOnCalendarSectionEvent($params, $handler)
    {
    }
}