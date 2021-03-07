<?php

class CWikiSecurity
{
    var $_filters = \false;
    function __construct($char = \false)
    {
    }
    function clear(&$str)
    {
    }
    protected function _dostr(&$str)
    {
    }
    /*
    Function is used in regular expressions in order to decode characters presented as &#123;
    */
    function _decode_cb($in)
    {
    }
    /*
    Function is used in regular expressions in order to decode characters presented as  &#xAB;
    */
    function _decode_cb_hex($in)
    {
    }
    /*
    Decodes string from html codes &#***;
    One pass!
    -- Decode only a-zA-Z:().=, because only theese are used in filters
    */
    function _decode($str)
    {
    }
}