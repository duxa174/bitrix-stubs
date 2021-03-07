<?php

class CSOAPClient
{
    /// The name or IP of the server to communicate with
    var $Server;
    /// The path to the SOAP server
    var $Path;
    /// The port of the server to communicate with.
    var $Port;
    /// How long to wait for the call.
    var $Timeout = 0;
    /// HTTP login for HTTP authentification
    var $Login;
    /// HTTP password for HTTP authentification
    var $Password;
    var $SOAPRawRequest;
    var $SOAPRawResponse;
    function CSOAPClient($server, $path = '/', $port = 80)
    {
    }
    /*!
    	  Sends a SOAP message and returns the response object.
    	*/
    function send($request)
    {
    }
    function setTimeout($timeout)
    {
    }
    function setLogin($login)
    {
    }
    function getRawRequest()
    {
    }
    function getRawResponse()
    {
    }
    function login()
    {
    }
    function setPassword($password)
    {
    }
    function password()
    {
    }
}