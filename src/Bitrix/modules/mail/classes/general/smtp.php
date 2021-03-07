<?php

class CSMTPServer
{
    var $arServers = array();
    var $logFile;
    var $logFileName = "/bitrix/modules/smtpd.log";
    var $logLevel = 10;
    var $logMaxSize = 2000000;
    var $startPeriodTimeTruncate;
    var $startTime;
    function WriteToLog($txt, $level)
    {
    }
    public static function Run()
    {
    }
    function Start()
    {
    }
    function ReloadServers()
    {
    }
    function Listen()
    {
    }
    function FindServerSocket($s)
    {
    }
    function FindServerConnection($s)
    {
    }
    function Stop()
    {
    }
    function RemoveHost($i)
    {
    }
}
class CSMTPServerHost
{
    var $sockServer;
    var $server;
    var $initialized;
    var $arClients = array();
    var $arClientsIndex = array();
    var $lastClientId;
    var $arSockets = array();
    var $startPeriodTime;
    var $arFields = array();
    var $msgCount = 0;
    var $conCount = 0;
    function FindConnection($s)
    {
    }
    function GetSockets()
    {
    }
    function CSMTPServerHost($server, $arFields)
    {
    }
    function AddConnection()
    {
    }
    function RemoveConnection($id)
    {
    }
    function WriteToLog($txt, $level)
    {
    }
    function Start()
    {
    }
    function Stop($num)
    {
    }
    function _Stop()
    {
    }
    function CheckTimeout($timeout)
    {
    }
}
class CSMTPConnection
{
    var $id;
    var $sock;
    var $connected = \false;
    var $authenticated = \false;
    var $readBuffer = "";
    var $__listenFunc = \false;
    var $arMsg = array();
    var $server;
    var $lastRecieve;
    var $auth_user_id = 0;
    var $msgCount = 0;
    function CSMTPConnection($id, $sock, $serv)
    {
    }
    function WriteToLog($txt, $level)
    {
    }
    function Receive()
    {
    }
    function __ParseBuffer()
    {
    }
    function Send($code, $text = "")
    {
    }
    function __Send($message)
    {
    }
    function Disconnect()
    {
    }
    function CheckRelaying($email)
    {
    }
    //обработчик команд
    function __ProcessCommand($command, $arg = '')
    {
    }
    function Authorize($login, $password)
    {
    }
    function __AuthLoginHandler()
    {
    }
    function __AuthPlainHandler()
    {
    }
    function __DataHandler()
    {
    }
}