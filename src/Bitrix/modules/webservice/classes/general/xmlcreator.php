<?php

class CXMLCreator
{
    var $tag;
    var $data;
    var $startCDATA = "";
    var $endCDATA = "";
    var $attributs = array();
    var $children = array();
    function CXMLCreator($tag, $cdata = \false)
    {
    }
    // format of $heavyTag = '[Index:]TagName [asd:qwe="asd"] [zxc:dfg="111"]'
    // returns created CXMLCreator node with setted TagName and Attributes
    function createTagAttributed($heavyTag, $value = \null)
    {
    }
    /* static */
    function encodeValueLight($name, $value)
    {
    }
    function setCDATA()
    {
    }
    function setAttribute($attrName, $attrValue)
    {
    }
    function setData($data)
    {
    }
    function setName($tag)
    {
    }
    function addChild($element)
    {
    }
    function getChildrenCount()
    {
    }
    function _getAttributs()
    {
    }
    function _getChildren()
    {
    }
    function getXML()
    {
    }
    function getXMLHeader()
    {
    }
    function __destruct()
    {
    }
    /* static */
    function CreateFromDOM($dom)
    {
    }
    /* static */
    function __createFromDOM($domNode)
    {
    }
    public static function xmlspecialchars($str)
    {
    }
    public static function xmlspecialcharsback($str)
    {
    }
}