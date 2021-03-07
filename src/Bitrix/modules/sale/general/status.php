<?php

/** @deprecated */
class CSaleStatus
{
    public static function GetByID($statusId, $languageId = \LANGUAGE_ID, $type = \null)
    {
    }
    static function GetLangByID($statusId, $languageId = \LANGUAGE_ID)
    {
    }
    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param bool|array $arGroupBy
     * @param bool|array $arNavStartParams
     * @param array $arSelectFields
     * @return CDBResult|int
     */
    static function GetList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    /*
     * For modern api see: Bitrix\Sale\OrderStatus and Bitrix\Sale\DeliveryStatus
     */
    static function GetPermissionsList($arOrder = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    private static $statusFields, $langFields, $taskFields;
    function CheckFields($ACTION, &$arFields, $statusId = '')
    {
    }
    private static function addLanguagesBy($statusId, array $rows)
    {
    }
    private static function addTasksBy($statusId, array $rows)
    {
    }
    function Add($arFields)
    {
    }
    function Update($statusId, $arFields)
    {
    }
    function Delete($statusId)
    {
    }
    function CreateMailTemplate($ID)
    {
    }
}
/** @deprecated */
final class CSaleStatusAdapter implements \Bitrix\Sale\Compatible\FetchAdapter
{
    // M I G R A T I O N ///////////////////////////////////////////////////////////////////////////////////////////////
    public static function perms2opers()
    {
    }
    private static function field($name, array $field)
    {
    }
    public static function migrate()
    {
    }
    public static function getTaskId(array $data, array $permissions, array &$tasks)
    {
    }
    public static function addTask(array $field, array $permissions)
    {
    }
    // A D A P T E R ///////////////////////////////////////////////////////////////////////////////////////////////////
    public static function permissions()
    {
    }
    public static function addFieldsTo(array &$fields, $statusIdName, $prefix)
    {
    }
    public static function permExpression($taskIdName, $operationId)
    {
    }
    public static function addAliasesTo(\Bitrix\Sale\Compatible\AliasedQuery $query, $taskIdName)
    {
    }
    public static function adaptResult(\Bitrix\Sale\Compatible\CDBResult $result, \Bitrix\Sale\Compatible\OrderQuery $query, $taskIdName)
    {
    }
    /** Get map of: task id => array of operations ids
     */
    public static function getTasksOperations()
    {
    }
    // I N S T A N C E /////////////////////////////////////////////////////////////////////////////////////////////////
    private $select, $tasks;
    private function __construct(array $select)
    {
    }
    public function adapt(array $row)
    {
    }
}