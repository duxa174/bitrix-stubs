<?php

namespace Bitrix\Calendar\UserField;

class ResourceBooking extends \Bitrix\Main\UserField\TypeBase
{
    const USER_TYPE_ID = 'resourcebooking';
    const RESOURCE_CALENDAR_TYPE = 'resource';
    const BITRIX24_RESTRICTION = 100;
    const BITRIX24_RESTRICTION_CODE = 'uf_resourcebooking';
    const CRM_LEAD_ENTITY_ID = 'CRM_LEAD';
    const CRM_SUSPENDED_LEAD_ENTITY_ID = 'CRM_LEAD_SPD';
    const CRM_DEAL_ENTITY_ID = 'CRM_DEAL';
    const CRM_SUSPENDED_DEAL_ENTITY_ID = 'CRM_DEAL_SPD';
    protected static $restrictionCount = null;
    function getUserTypeDescription()
    {
    }
    public static function prepareSettings($userField = [])
    {
    }
    function getDBColumnType()
    {
    }
    function checkFields($userField, $value)
    {
    }
    public static function onBeforeSaveAll($userField, $values, $userId = false)
    {
    }
    public static function onDelete($userField, $values, $userId = false)
    {
    }
    /**
     * Saves resource of given type.
     *
     * @param integer $id id of current booking.
     * @param string $resourceType resource type.
     * @param integer $resourceId resource id.
     * @param array $eventFields calendar event fields.
     * @param array $params additional params.
     *
     * @return integer, id of resource booking or null
     * @throws \Bitrix\Main\SystemException
     */
    public static function saveResource($id, $resourceType, $resourceId, $eventFields = [], $params = [])
    {
    }
    private static function isCrmEntity($entityId)
    {
    }
    private static function isUserAvailable($params)
    {
    }
    private static function isResourceAvailable()
    {
    }
    public static function releaseResource($entry)
    {
    }
    private static function handleResourceList($resources)
    {
    }
    public static function prepareValue($type, $id, $from, $duration, $serviceName = '')
    {
    }
    public static function parseValue($value)
    {
    }
    function getSettingsHTML($userField = false, $htmlControl = [], $varsFromForm = false)
    {
    }
    function getEditFormHTML($userField, $htmlControl)
    {
    }
    public static function getPublicEdit($userField, $additionalParams = [])
    {
    }
    public static function getPublicView($userField, $additionalParams = [])
    {
    }
    public static function getPublicText($userField)
    {
    }
    public static function getDefaultResourcesList()
    {
    }
    protected static function fetchFieldValue($value)
    {
    }
    public static function getDefaultServiceList()
    {
    }
    public static function getBitrx24Limitation()
    {
    }
    public static function getAvailableEntriesList()
    {
    }
    public static function onBeforeUserTypeAdd(&$userTypeFields)
    {
    }
    public static function getResourceEntriesList($idList = [])
    {
    }
    public static function getUserFieldByFieldName($fieldName = '', $selectedUsers = [])
    {
    }
    public static function getFillFormData($data = [], $params = [])
    {
    }
    public static function getFormDateTimeSlots($fieldName = '', $options = [])
    {
    }
    private static function getAvailableTimeSlots($accessibility, $options)
    {
    }
    public static function prepareFormDateValues($dateFrom = null, $fieldName = '', $options = [])
    {
    }
}