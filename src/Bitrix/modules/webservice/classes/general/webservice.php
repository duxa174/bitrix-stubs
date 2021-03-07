<?php

class CWebServiceDesc
{
    var $wsname;
    // webservice name
    var $wsclassname;
    // webservice class wrapper (i-face implementor) name
    var $wsdlauto;
    // boolean, automatic generating wsdl
    var $wstargetns;
    // target namespace
    var $wsendpoint;
    /*
     * Return info about $reflect method, class, para,
     * For method:
     * 	classname=>method
     *
     * 	must contain array(
     * 		"name"	=> string,
     * 		"documentation" => "Description"
     * 		"input" => array(..),
     * 		"output" => array(..)
     * 		)
     * 	Input in method: list of para's.
     * 		array(
     * 			"name" => "type",
     * 			...
     * 		)
     * 	Output in method:
     * 		1) "simpleType" => "type"
     * 		2) "complexType" => array[] of structModuleSoapRetData declared by output array.
     * */
    var $classes;
    // class methods for soap
    /*
     * On next two, syntax same as for $classes, but:
     *
     */
    var $structTypes;
    // complex assoc array data types.
    var $classTypes;
    // complex class data struct. when soaped. must be unserialized to class.
    ////////////////////// registrating
    var $_wsdlci;
    // wsdlcreator instance class
    var $_soapsi;
    // soap server instance class
}
class IWebService
{
    // May be called by Event to collect CWebServiceDesc on configuring WS.Server
    function GetWebServiceDesc()
    {
    }
    //function TestComponent() {}
    /*
     * Web Service methods must have ws prefix in there names and
     * they have to be serviced by ReflectService function to generate
     * valid wsdl code, binding and other.
     * Example:
     * 		wsGetUserInfo();
     * */
}
class CWebService
{
    function SetComponentContext($arParams)
    {
    }
    function GetComponentContext($arParams)
    {
    }
    function SOAPServerProcessRequest($wsname)
    {
    }
    function RegisterWebService($className)
    {
    }
    function GetSOAPServerRequest($wsname)
    {
    }
    function GetSOAPServerResponse($wsname)
    {
    }
    function MethodRequireHTTPAuth($class, $method)
    {
    }
    function TestComponent($wsname)
    {
    }
    function GetWSDL($wsname)
    {
    }
    function GetDefaultEndpoint()
    {
    }
    function GetDefaultTargetNS()
    {
    }
    function &GetWebServiceDeclaration($className)
    {
    }
    function &GetInterface($className)
    {
    }
}