<?php

namespace Bitrix\Socialnetwork\Item;

class Workgroup
{
    const UF_ENTITY_ID = "SONET_GROUP";
    private $fields;
    static $groupsIdToCheckList = array();
    public function __construct()
    {
    }
    public static function getById($groupId = 0, $useCache = true)
    {
    }
    public function setFields($fields = array())
    {
    }
    public function getFields()
    {
    }
    public function isProject()
    {
    }
    public function isScrumProject() : bool
    {
    }
    public function getDefaultSprintDuration() : int
    {
    }
    public function getScrumMaster() : int
    {
    }
    public static function getListSprintDuration() : array
    {
    }
    private static function getSubDepartments($departmentList = array())
    {
    }
    public function syncDeptConnection($exclude = false)
    {
    }
    public function getGroupUrlData($params = array())
    {
    }
    public static function onBeforeIBlockSectionUpdate($section)
    {
    }
    public static function onAfterIBlockSectionUpdate($section)
    {
    }
    public static function onBeforeIBlockSectionDelete($sectionId)
    {
    }
    function onAfterIBlockSectionDelete($section)
    {
    }
    private static function disconnectSection($sectionId)
    {
    }
    public static function getTypes($params = array())
    {
    }
    public static function getTypeCodeByParams($params)
    {
    }
    public static function getTypeByCode($params = array())
    {
    }
    private static function getGroupContent($params = array())
    {
    }
    public static function setIndex($params = array())
    {
    }
    public static function getContentFieldsList()
    {
    }
    public static function prepareToken($str)
    {
    }
    public static function getInitiatePermOptionsList($params = array())
    {
    }
    public static function getEditFeaturesAvailability()
    {
    }
    /**
     * returns array of workgroups filtered by access permissions of a user, only for the current site
     * @param array $params
     * @return array
     */
    public static function getByFeatureOperation(array $params = []) : array
    {
    }
}