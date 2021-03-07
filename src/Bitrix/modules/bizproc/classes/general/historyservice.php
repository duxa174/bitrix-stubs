<?php

class CBPAllHistoryService extends \CBPRuntimeService
{
    protected $useGZipCompression = \false;
    public function __construct()
    {
    }
    protected function ParseFields(&$arFields, $id = 0)
    {
    }
    private function GetSerializedForm($arTemplate)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($id, $arFields)
    {
    }
    private static function GenerateFilePath($documentId)
    {
    }
    public function DeleteHistory($id, $documentId = \null)
    {
    }
    public static function Delete($id, $documentId = \null)
    {
    }
    public function DeleteHistoryByDocument($documentId)
    {
    }
    public static function DeleteByDocument($documentId)
    {
    }
    public static function GetById($id)
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function RecoverDocumentFromHistory($id)
    {
    }
    public static function PrepareFileForHistory($documentId, $arFileId, $historyIndex)
    {
    }
    public static function MergeHistory($firstDocumentId, $secondDocumentId)
    {
    }
    public static function MigrateDocumentType($oldType, $newType, $workflowTemplateIds)
    {
    }
    public function AddHistory($arFields)
    {
    }
    public function UpdateHistory($id, $arFields)
    {
    }
    public function GetHistoryList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
}
class CBPHistoryResult extends \CDBResult
{
    private $useGZipCompression = \false;
    public function __construct($res, $useGZipCompression)
    {
    }
    private function GetFromSerializedForm($value)
    {
    }
    function Fetch()
    {
    }
}
//Compatibility
class CBPHistoryService extends \CBPAllHistoryService
{
}