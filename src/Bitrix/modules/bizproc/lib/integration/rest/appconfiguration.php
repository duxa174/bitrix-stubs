<?php

namespace Bitrix\Bizproc\Integration\Rest;

class AppConfiguration
{
    const ENTITY_BIZPROC_MAIN = 'BIZPROC_MAIN';
    const ENTITY_BIZPROC_CRM_TRIGGER = 'BIZPROC_CRM_TRIGGER';
    const OWNER_ENTITY_TYPE_BIZPROC = 'BIZPROC';
    const OWNER_ENTITY_TYPE_TRIGGER = 'TRIGGER';
    private static $entityList = [self::ENTITY_BIZPROC_MAIN => 500, self::ENTITY_BIZPROC_CRM_TRIGGER => 600];
    private static $customDealMatch = '/^C([0-9]+):/';
    private static $accessModules = ['crm'];
    private static $context;
    private static $accessManifest = ['total', 'bizproc_crm'];
    public static function getEntityList()
    {
    }
    public static function onEventExportController(\Bitrix\Main\Event $event)
    {
    }
    public static function onEventClearController(\Bitrix\Main\Event $event)
    {
    }
    public static function onEventImportController(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param $type string of event
     * @throws SystemException
     * @return boolean
     */
    private static function checkRequiredParams($type)
    {
    }
    //region bizproc
    private static function exportBizproc($step)
    {
    }
    private static function clearBizproc($option)
    {
    }
    private static function importBizproc($importData)
    {
    }
    //end region bizproc
    //region trigger
    private static function exportCrmTrigger($step)
    {
    }
    private static function clearCrmTrigger($option)
    {
    }
    private static function importCrmTrigger($importData)
    {
    }
    //end region trigger
    private static function changeDealCategory($data, $ratio)
    {
    }
    private static function changeDealCategoryAction($data, $ratioRegEx, $ratioReplace, $ratio)
    {
    }
}