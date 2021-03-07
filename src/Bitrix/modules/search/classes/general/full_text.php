<?php

class CSearchFullText
{
    /**
     * @var CSearchFullText
     */
    protected static $instance = \null;
    /**
     * Returns current instance of the full text indexer.
     *
     * @return CSearchFullText
     */
    public static function getInstance()
    {
    }
    public function connect($connectionString)
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
    public function update($ID, $arFields)
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
}
class CSearchFormatter
{
    function format($r)
    {
    }
}