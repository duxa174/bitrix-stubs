<?php

class CSearchSphinx extends \CSearchFullText
{
    public $arForumTopics = array();
    public $db = \false;
    private static $fields = array("title" => "field", "body" => "field", "module_id" => "uint", "module" => "string", "item_id" => "uint", "item" => "string", "param1_id" => "uint", "param1" => "string", "param2_id" => "uint", "param2" => "string", "date_change" => "timestamp", "date_from" => "timestamp", "date_to" => "timestamp", "custom_rank" => "uint", "tags" => "mva", "right" => "mva", "site" => "mva", "param" => "mva");
    private static $typesMap = array("timestamp" => "rt_attr_timestamp", "string" => "rt_attr_string", "bigint" => "rt_attr_bigint", "uint" => "rt_attr_uint", "field" => "rt_field", "mva" => "rt_attr_multi");
    private $errorText = "";
    private $errorNumber = 0;
    private $recodeToUtf = \false;
    public $tags = "";
    public $query = "";
    public $SITE_ID = "";
    public $connectionIndex = "";
    public $indexName = "";
    public function connect($connectionIndex, $indexName = "", $ignoreErrors = \false)
    {
    }
    public function truncate()
    {
    }
    public function deleteById($ID)
    {
    }
    public function recodeTo($text)
    {
    }
    public function recodeFrom($text)
    {
    }
    public function replace($ID, $arFields)
    {
    }
    public function update($ID, $arFields)
    {
    }
    function tags($arLID, $sContent)
    {
    }
    function tagsRegister($arLID, $sContent)
    {
    }
    function tagsFromArray($arTags)
    {
    }
    function rights($arRights)
    {
    }
    function sites($arSites)
    {
    }
    function params($arParams)
    {
    }
    public function getErrorText()
    {
    }
    public function getErrorNumber()
    {
    }
    public function search($arParams, $aSort, $aParamsEx, $bTagsCloud)
    {
    }
    function searchTitle($phrase = "", $arPhrase = array(), $nTopCount = 5, $arParams = array(), $bNotFilter = \false, $order = "")
    {
    }
    function getRowFormatter()
    {
    }
    function filterField($field, $value, $inSelect)
    {
    }
    function prepareFilter($arFilter, $inSelect = \false)
    {
    }
    function CheckPermissions()
    {
    }
    function __PrepareSort($aSort = array())
    {
    }
    public function Escape($str)
    {
    }
    public function Escape2($str)
    {
    }
    protected function canConnect()
    {
    }
    protected function internalConnect($connectionIndex, &$error)
    {
    }
    public function query($query)
    {
    }
    public function fetch($queryResult)
    {
    }
    public function getError()
    {
    }
}
class CSearchSphinxFormatter extends \CSearchFormatter
{
    /** @var CSearchSphinx */
    private $sphinx = \null;
    function __construct($sphinx)
    {
    }
    function format($r)
    {
    }
    function formatTagsRow($r)
    {
    }
    function formatRow($r)
    {
    }
    public function buildExcerpts($str)
    {
    }
}