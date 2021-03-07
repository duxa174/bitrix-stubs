<?php

namespace Bitrix\Bizproc\Automation;

class Helper
{
    const CURRENT_DATE_BASIS = '{=System:Date}';
    const CURRENT_DATETIME_BASIS = '{=System:Now}';
    protected static $maps;
    protected static $documentFields;
    public static function prepareUserSelectorEntities(array $documentType, $users, $config = []) : array
    {
    }
    public static function getResponsibleUserExpression(array $documentType)
    {
    }
    /**
     * Get disk files information by file ids.
     * @param int|array $attachments
     * @return array
     */
    public static function prepareDiskAttachments($attachments)
    {
    }
    /**
     * Get files information from document fields.
     * @param array $documentType
     * @param $files
     * @return array
     */
    public static function prepareFileAttachments(array $documentType, $files)
    {
    }
    public static function convertExpressions($source, array $documentType, $useTilda = true)
    {
    }
    public static function unConvertExpressions($source, array $documentType)
    {
    }
    public static function convertProperties(array $properties, array $documentType, $useTilda = true)
    {
    }
    public static function unConvertProperties(array $properties, array $documentType)
    {
    }
    /**
     * Get document fields for usage in robots designer.
     * @param array $documentType Bizproc document type.
     * @param null|string $typeFilter
     * @return array
     */
    public static function getDocumentFields(array $documentType, $typeFilter = null)
    {
    }
    private static function getDocumentUserServiceGroups(array $documentType)
    {
    }
    public static function getDocumentUserGroups(array $documentType) : array
    {
    }
    protected static function getFieldsMap(array $documentType)
    {
    }
    public static function parseDateTimeInterval($interval)
    {
    }
    public static function getDateTimeIntervalString($interval)
    {
    }
    public static function parseTimeString($time)
    {
    }
    public static function countAllRobots(array $documentType, array $statuses) : int
    {
    }
    private static function getUserInfo($userID, $format = '', $htmlEncode = false)
    {
    }
}