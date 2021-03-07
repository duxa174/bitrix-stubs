<?php

namespace Bitrix\Report;

class Sharing
{
    const ERROR_SHARING_ADD = 'REPORT_SHARING_ADD_12000';
    const ERROR_SHARING_UPDATE = 'REPORT_SHARING_UPDATE_12001';
    const ERROR_SHARING_DELETE = 'REPORT_SHARING_DELETE_12002';
    const CODE_USER = 'U';
    const CODE_GROUP = 'G';
    const CODE_SOCNET_GROUP = 'SG';
    const CODE_DEPARTMENT = 'DR';
    const TYPE_USER = 'users';
    const TYPE_GROUP = 'groups';
    const TYPE_SOCNET_GROUP = 'sonetgroups';
    const TYPE_DEPARTMENT = 'department';
    /** @var  ErrorCollection */
    protected $errorCollection;
    protected $reportId;
    public function __construct($reportId)
    {
    }
    /**
     * The method changes the share.
     * @param $listNewEntity - List new reports.
     */
    public function changeSharing($listNewEntity)
    {
    }
    /**
     * @return Error[]
     */
    public function getErrors()
    {
    }
    /**
     * Get an array shared entity.
     * @param $reportId.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getEntityOfSharing($reportId)
    {
    }
    /**
     * Get an array user data for sharing.
     * @param $userId
     * @return array
     */
    public static function getUserData($userId)
    {
    }
    /**
     * Parses entity code to get entity type and entity id.
     * Ex. SG444 = array('SG', 444)
     * @param $entity
     * @return array|null
     */
    public static function parseEntityValue($entity)
    {
    }
    /**
     * Get an array of desired size depending on the type of entity.
     * @param $type
     * @param $id
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getTypeData($type, $id)
    {
    }
    /**
     * Get socnet destination.
     * @param $userId
     * @param array $selected
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getSocNetDestination($userId, $selected = array())
    {
    }
    /**
     * Removes all related entities by removing report.
     * @param $reportId
     * @throws \Exception
     */
    public static function onReportDelete($reportId)
    {
    }
    protected function getByReportId()
    {
    }
    protected function addToManyEntity(array $listData)
    {
    }
    protected function updateManyEntity(array $listData)
    {
    }
    protected function deleteManyEntity(array $listData)
    {
    }
    protected static function getUserUrl($userId)
    {
    }
    protected static function getImage($imageId)
    {
    }
}