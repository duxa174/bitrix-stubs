<?php

namespace Bitrix\Bizproc\Workflow\Entity;

class WorkflowInstanceTable extends \Bitrix\Main\Entity\DataManager
{
    const LOCKED_TIME_INTERVAL = 300;
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
    public static function getIdsByDocument(array $documentId)
    {
    }
    public static function getIdsByTemplateId(int ...$tplIds)
    {
    }
    public static function mergeByDocument($paramFirstDocumentId, $paramSecondDocumentId)
    {
    }
    public static function migrateDocumentType($paramOldType, $paramNewType, $workflowTemplateIds)
    {
    }
    /**
     * @param array $data Entity data.
     * @throws Main\NotImplementedException
     * @return void
     */
    public static function add(array $data)
    {
    }
    /**
     * @param mixed $primary Primary key.
     * @param array $data Entity data.
     * @throws Main\NotImplementedException
     * @return void
     */
    public static function update($primary, array $data)
    {
    }
}