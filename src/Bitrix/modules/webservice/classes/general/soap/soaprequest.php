<?php

class CSOAPRequest extends \CSOAPEnvelope
{
    /// The request name
    var $Name;
    /// The request target namespace
    var $Namespace;
    /// Headers
    var $Headers = array();
    /// Additional body element attributes.
    var $BodyAttributes = array();
    /// Contains the request parameters
    var $Parameters = array();
    function CSOAPRequest($name = "", $namespace = "", $parameters = array())
    {
    }
    function name()
    {
    }
    function get_namespace()
    {
    }
    function GetSOAPAction($separator = '/')
    {
    }
    function addSOAPHeader($name, $value)
    {
    }
    //     Adds a new attribute to the body element.
    function addBodyAttribute($name, $value)
    {
    }
    //      Adds a new parameter to the request. You have to provide a prameter name
    //      and value.
    function addParameter($name, $value)
    {
    }
    //      Returns the request payload
    function payload()
    {
    }
}