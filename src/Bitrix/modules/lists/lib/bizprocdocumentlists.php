<?php

namespace Bitrix\Lists;

class BizprocDocumentLists extends \BizprocDocument
{
    public static function getEntityName()
    {
    }
    /**
     * @param $documentId
     * @return array
     * @throws \CBPArgumentNullException
     * @throws \CBPArgumentOutOfRangeException
     * @throws \Exception
     */
    public function getDocument($documentId)
    {
    }
    /**
     * @param string $documentType
     * @return array
     * @throws \CBPArgumentOutOfRangeException
     */
    public function getDocumentFields($documentType)
    {
    }
    public static function isFeatureEnabled($documentType, $feature)
    {
    }
    public function getDocumentAdminPage($documentId)
    {
    }
}