<?php

class CSOAPResponse extends \CSOAPEnvelope
{
    /// Contains the response value
    var $Value = \false;
    var $ValueName = 0;
    /// Contains the response type
    var $Type = \false;
    /// Contains fault string
    var $FaultString = \false;
    /// Contains the fault code
    var $FaultCode = \false;
    /// Contains true if the response was an fault
    var $IsFault = \false;
    /// Contains the name of the response, i.e. function call name
    var $Name;
    /// Contains the target namespace for the response
    var $Namespace;
    var $typensVars = array();
    /// Contains the DOM document for the current SOAP response
    var $DOMDocument = \false;
    function CSOAPResponse($name = "", $namespace = "")
    {
    }
    //	Decodes the SOAP response stream
    function decodeStream($request, $stream)
    {
    }
    // Decodes a DOM node and returns the PHP datatype instance of it.
    function decodeDataTypes($node, $complexDataTypeName = "")
    {
    }
    //	  Returns the XML payload for the response.
    function payload()
    {
    }
    //	 Strips the header information from the HTTP raw response.
    function stripHTTPHeader($data)
    {
    }
    function value()
    {
    }
    function setValue($value)
    {
    }
    function setValueName($valname)
    {
    }
    function isFault()
    {
    }
    function faultCode()
    {
    }
    function faultString()
    {
    }
    function setTypensVars($vars)
    {
    }
}