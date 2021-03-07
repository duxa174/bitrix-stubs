<?php

class XMLNode
{
    var $childs;
    var $parent;
    var $value;
    var $attributes;
    var $name;
    var $r;
    function XMLNode(&$parent, $attributes, $name)
    {
    }
    function GetAttribute($name)
    {
    }
    function XMLSetValue($new_val)
    {
    }
    function &select_nodes($str_node)
    {
    }
}
class XMLParser
{
    var $parser;
    var $cur;
    var $xml;
    function Load($file)
    {
    }
    function LoadString(&$text)
    {
    }
    function unquote($str)
    {
    }
    function parse(&$data)
    {
    }
    function startElement($name, $attrs)
    {
    }
    function endElement($name)
    {
    }
    function cdata($parser, $cdata)
    {
    }
    function select_nodes_attrib($str_node)
    {
    }
    function select_nodes($str_node)
    {
    }
}
function AddSectionsRecursive($parent = "", $parent_id = 0)
{
}