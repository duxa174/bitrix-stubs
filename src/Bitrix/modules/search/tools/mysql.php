<?php

class CSearchMysql extends \CSearchFullText
{
    protected $error = "";
    protected $errorno = 0;
    public function connect($connectionString = '')
    {
    }
    public function truncate()
    {
    }
    public function deleteById($ID)
    {
    }
    public function replace($ID, $arFields)
    {
    }
    public function search($arParams, $aSort, $aParamsEx, $bTagsCloud)
    {
    }
    function searchTitle($phrase = "", $arPhrase = array(), $nTopCount = 5, $arParams = array(), $bNotFilter = \false, $order = "")
    {
    }
    public function getErrorText()
    {
    }
    public function getErrorNumber()
    {
    }
    function getRowFormatter()
    {
    }
    function __PrepareSort($aSort = array(), $strSearchContentAlias = "sc.", $bTagsCloud = \false)
    {
    }
    function PrepareQuery($queryObject, $q)
    {
    }
}
class CSearchMySqlFormatter extends \CSearchFormatter
{
    function format($r)
    {
    }
    function formatRow($r)
    {
    }
}