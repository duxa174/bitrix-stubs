<?php

class CLists
{
    private static $iblockTypeList = array("lists" => \true, "bitrix_processes" => \true, "lists_socnet" => \true);
    private static $featuresCache = array();
    function SetPermission($iblock_type_id, $arGroups)
    {
    }
    public static function GetPermission($iblock_type_id = \false)
    {
    }
    function GetDefaultSocnetPermission()
    {
    }
    function SetSocnetPermission($iblock_id, $arRoles)
    {
    }
    public static function GetSocnetPermission($iblock_id)
    {
    }
    function GetIBlockPermission($iblock_id, $user_id)
    {
    }
    function GetIBlockTypes($language_id = \false)
    {
    }
    function GetIBlocks($iblock_type_id, $check_permissions, $socnet_group_id = \false)
    {
    }
    function OnIBlockDelete($iblock_id)
    {
    }
    public static function OnAfterIBlockUpdate(array &$fields)
    {
    }
    function OnAfterIBlockDelete($iblock_id)
    {
    }
    function IsEnabledSocnet()
    {
    }
    function EnableSocnet($bActive = \false)
    {
    }
    function OnSharepointCreateProperty($arInputFields)
    {
    }
    function OnSharepointCheckAccess($iblock_id)
    {
    }
    public static function setLiveFeed($checked, $iblockId)
    {
    }
    public static function getLiveFeed($iblockId)
    {
    }
    public static function getCountProcessesUser($userId, $iblockTypeId)
    {
    }
    public static function generateMnemonicCode($integerCode = 0)
    {
    }
    public function OnAfterIBlockElementDelete($fields)
    {
    }
    /**
     * @param string $workflowId
     * @param string $iblockType
     * @param int $elementId
     * @param int $iblockId
     * @param string $action Action stop or delete
     * @return string error
     */
    public static function completeWorkflow($workflowId, $iblockType, $elementId, $iblockId, $action)
    {
    }
    public static function deleteSocnetLog(array $listWorkflowId)
    {
    }
    /**
     * @param $iblockId
     * @param array $errors - an array of errors that occurred array(0 => 'error message')
     * @return bool or int
     * @deprecated
     */
    public static function copyIblock($iblockId, array &$errors)
    {
    }
    public static function checkChangedFields($iblockId, $elementId, array $select, array $elementFields, array $elementProperty)
    {
    }
    public static function deleteListsUrl($iblockId)
    {
    }
    /**
     * Method get iblock attached crm.
     *
     * @param string $entityType Type entity.
     * @return array List iblock data array(iblockId => IblockName).
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getIblockAttachedCrm($entityType)
    {
    }
    protected static function deleteListsCache($cacheDir)
    {
    }
    public static function OnAfterIBlockPropertyAdd($fields)
    {
    }
    public static function OnAfterIBlockPropertyUpdate($fields)
    {
    }
    public static function OnAfterIBlockPropertyDelete($fields)
    {
    }
    public static function getChildSection($baseSectionId, array $listSection, array &$listChildSection)
    {
    }
    public static function isAssociativeArray($array)
    {
    }
    /**
     * Handler OnBeforeIBlockElementAdd.
     *
     * @param array $fields Current values of the elements.
     * @return bool
     */
    public static function OnBeforeIBlockElementAdd(&$fields)
    {
    }
    /**
     * Handler OnBeforeIBlockElementUpdate.
     *
     * @param array $fields Current values of the elements.
     * @return bool
     */
    public static function OnBeforeIBlockElementUpdate(&$fields)
    {
    }
    /**
     * Agent function. Run rebuild seachable content.
     *
     * @param $iblockId
     * @return bool
     */
    public static function runRebuildSeachableContent($iblockId)
    {
    }
    /**
     * Method rebuild seachable content taking into account the current values of the elements.
     *
     * @param int $iblockId Iblock id.
     * @param int $limit Restricts the number of results.
     * @param int $offset Specifies the number of rows to skip, before starting to return rows from the query expression.
     * @return int Number of processed items.
     * @throws ArgumentException
     */
    public static function rebuildSeachableContent($iblockId, $limit = 100, $offset = 0)
    {
    }
    /**
     * The method rebuild seachable content taking into account the current values of the element.
     *
     * @param $iblockId
     * @param $elementId
     * @throws ArgumentException
     */
    public static function rebuildSeachableContentForElement($iblockId, $elementId)
    {
    }
    private static function getListElementValue($iblockId, $listElementId)
    {
    }
    private static function createSeachableContent(array $fields)
    {
    }
    private static function createSeachableContentForProperty($fields)
    {
    }
    /**
     * The method return number of elements by iblock id.
     *
     * @param $iblockId Iblock id.
     * @return int
     * @throws ArgumentException
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getNumberOfElements($iblockId)
    {
    }
    public static function isFeatureEnabled($featureName = '')
    {
    }
    public static function isWorkflowParticipant($workflowId)
    {
    }
    public static function isEnabledLockFeature($iblockId)
    {
    }
    public static function deleteLockFeatureOption(int $iblockId)
    {
    }
}