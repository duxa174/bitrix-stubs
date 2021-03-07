<?php

class CWSDLCreator
{
    var $typensXSDType = array();
    var $typensVars = array();
    var $typensDefined = array();
    var $typens = array();
    var $typeTypens = array();
    var $WSDL;
    var $WSDLXML;
    var $messages = array();
    var $portTypes = array();
    var $bindings = array();
    var $services = array();
    var $paramsNames = array();
    var $XMLCreator;
    var $serviceName;
    var $serviceUrl;
    var $targetNamespace;
    var $classes = array();
    function CWSDLCreator($serviceName, $serviceUrl = "", $targetNamespace = "")
    {
    }
    function setClasses($classes)
    {
    }
    function AddComplexDataType($name, $vars)
    {
    }
    function AddArrayType($pname, $param)
    {
    }
    function __createMessage($name, $returnType = \false, $params = array())
    {
    }
    function __createPortType($portTypes)
    {
    }
    function __createBinding($bindings)
    {
    }
    function __createService($services)
    {
    }
    function createWSDL()
    {
    }
    function getWSDL()
    {
    }
    function printWSDL()
    {
    }
    function saveWSDL($targetFile, $overwrite = \true)
    {
    }
    function downloadWSDL()
    {
    }
}