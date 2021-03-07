<?php

class CSOAPServerResponser
{
    function OnBeforeRequest(&$cserver)
    {
    }
    /* $cserver->RawPostData */
    function OnAfterResponse(&$cserver)
    {
    }
    /*
     * If function returns true, chain of ProcessRequest ends.
     * If function returns true, this means function already passed It's value to ShowResponse handler
     * If returns false, then next item in a chain will be called.
     * Result Value must be set to $cserver->ResponseValue 
     */
    function ProcessRequestHeader(&$cserver, $header)
    {
    }
    /* stub, never used */
    function ProcessRequestBody(&$cserver, $body)
    {
    }
}
class CWSSOAPResponser extends \CSOAPServerResponser
{
    /*
     * typename => name => array()
     * funcname => parameters => array()
     * Array can contain:
     * 	serialize => class/assoc array.
     * 	varType, arrType
     * */
    var $TypensVars;
    /// message => function
    var $MessageTags;
    /// Contains a list over registered functions
    var $FunctionList;
    function RegisterFunction($name, $params = array())
    {
    }
    /*
     * $complex = array( "typename" => array( paraname => array(type desc, valType)))
     */
    function RegisterComplexType($complex)
    {
    }
    function ProcessRequestBody(&$cserver, $body)
    {
    }
    function ShowResponse(&$cserver, $functionName, $namespaceURI, &$value)
    {
    }
}
class CSOAPServer
{
    /// Contains the RAW HTTP post data information
    var $RawPostData;
    var $RawPayloadData;
    /// Consists of instances of CSOAPServerResponser
    var $OnRequestEvent = array();
    function CSOAPServer()
    {
    }
    function GetRequestData()
    {
    }
    function GetResponseData()
    {
    }
    function AddServerResponser(&$respobject)
    {
    }
    // $valueEncoded type of CXMLCreator
    function ShowRawResponse($valueEncoded, $wrapEnvelope = \false)
    {
    }
    function ShowResponse($functionName, $namespaceURI, $valueName, &$value)
    {
    }
    /* static */
    function ShowSOAPFault($errorString)
    {
    }
    /**
    	Processes the SOAP request and prints out the
    	propper response.
    */
    function ProcessRequest()
    {
    }
    function stripHTTPHeader($data)
    {
    }
}