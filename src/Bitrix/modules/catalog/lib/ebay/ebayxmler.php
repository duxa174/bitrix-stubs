<?php

namespace Bitrix\Catalog\Ebay;

class EbayXMLer
{
    protected $fieldsMap = array("NAME" => array("PATH" => "ProductInformation/Title"), "CATEGORIES" => array("PATH" => "ProductInformation/Categories/Category", "TYPE" => "eBayLeafCategory"));
    public function makeProductNode($product)
    {
    }
    public function isChildExist(\DOMNode $node, $childName)
    {
    }
    protected function parsePath($path)
    {
    }
}