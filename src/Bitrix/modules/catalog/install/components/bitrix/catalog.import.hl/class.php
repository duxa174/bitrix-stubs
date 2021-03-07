<?php

class CBitrixCatalogImportHl extends \CBitrixComponent
{
    public $error = "";
    public $message = "";
    public $NS = \false;
    public $xmlStream = \null;
    public $dataClass = "";
    public $step = \false;
    public function referenceHead($path, $attr)
    {
    }
    public function referenceStart($path, $attr)
    {
    }
    public function referenceItemsStart($path, $attr)
    {
    }
    public function checkReference($xmlArray)
    {
    }
    public function referenceField(\CDataXML $xmlObject)
    {
    }
    public function referenceValuesStart($path, $attr)
    {
    }
    public function referenceValue(\CDataXML $xmlObject)
    {
    }
    public function deleteBySessid($hlblockId, $sessid)
    {
    }
    private function getDataClass($hlblockId)
    {
    }
    private function decodePostion($position)
    {
    }
    private function xml2id($xml)
    {
    }
}