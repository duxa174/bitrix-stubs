<?php

class CSOAPHeader
{
    var $Headers = array();
    function CSOAPHeader()
    {
    }
    function addHeader()
    {
    }
}
class CSOAPBody
{
    function CSOAPBody()
    {
    }
}
class CSOAPEnvelope
{
    var $Header;
    var $Body;
    function CSOAPEnvelope()
    {
    }
}
class CSOAPParameter
{
    var $Name;
    var $Value;
    function CSOAPParameter($name, $value)
    {
    }
    function setName($name)
    {
    }
    function name()
    {
    }
    function setValue($value)
    {
    }
    function value()
    {
    }
}
class CSOAPFault
{
    var $FaultCode;
    var $FaultString;
    var $detail;
    function CSOAPFault($faultCode = "", $faultString = "", $detail = '')
    {
    }
    function faultCode()
    {
    }
    function faultString()
    {
    }
    function detail()
    {
    }
}