<?php

//
class CControllerClient
{
    public static function IsInCommonKernel()
    {
    }
    // Controller's authentication
    public static function OnExternalLogin(&$arParams)
    {
    }
    public static function OnAfterUserLogin(&$arParams)
    {
    }
    public static function UpdateUser($arFields = array(), $FORMAT_DATE = \false, $FORMAT_DATETIME = \false)
    {
    }
    public static function AuthorizeAdmin($arParams = array())
    {
    }
    public static function AuthorizeUser($arParams = array())
    {
    }
    public static function OnExternalAuthList()
    {
    }
    public static function PrepareUserInfo($arUser)
    {
    }
    public static function SendMessage($name, $status = 'Y', $description = '')
    {
    }
    public static function InitTicket($controller_url)
    {
    }
    public static function JoinToControllerEx($controller_url, $controller_login, $controller_password, $arMemberParams = array())
    {
    }
    public static function JoinToController($controller_url, $controller_login, $controller_password, $site_url = \false, $controller_group = \false, $site_name = \false, $bSharedKernel = \false)
    {
    }
    public static function RemoveFromController($controller_login, $controller_password)
    {
    }
    public static function UpdateCounters()
    {
    }
    public static function ExecuteEvent($eventName, $arParams = array())
    {
    }
    public static function Unlink()
    {
    }
    public static function GetBackup($bRefresh = \false)
    {
    }
    public static function SetBackup($arBackup)
    {
    }
    public static function SetOptionString($module_id, $option_id, $value)
    {
    }
    public static function RestoreOption($module_id, $option_id)
    {
    }
    public static function SetModules($arModules)
    {
    }
    public static function RestoreModules()
    {
    }
    public static function RestoreGroupSecurity($group_code, $arModules)
    {
    }
    public static function SetTaskSecurity($task_id, $module_id, $arOperations, $letter = '')
    {
    }
    public static function SetGroupSecurity($group_code, $arPermissions, $arSubGroups = \false)
    {
    }
    public static function RestoreSecurity($arExcludeGroups = array())
    {
    }
    public static function RestoreAll()
    {
    }
    public static function GetInstalledOptions($module_id)
    {
    }
    public static function RunCommand($command, $oRequest, $oResponse)
    {
    }
}
/**
 * Class __CControllerPacket
 *
 * Base class for various types of packets.
 */
class __CControllerPacket
{
    public $debug_const = '';
    public $debug_file_const = '';
    var $member_id;
    var $session_id;
    var $version;
    var $strParameters = "";
    var $arParameters = array();
    var $hash;
    var $secret_id;
    var $encoding;
    /**
     * Returns true if debug is enabled.
     *
     * @return boolean
     */
    public function isDebugEnabled()
    {
    }
    /**
     * Returns debug logs directory.
     * You may define constant CONTROLLER_CLIENT_LOG_DIR.
     * It's value must end with directory delimiter.
     * By default logging will be into /bitrix/controller_logs/ directory
     * under the DOCUMENT_ROOT.
     *
     * @return string
     */
    public function getDebugLogDirectory()
    {
    }
    /**
     * Returns log file name.
     * It's equal to session identifier or if there is no session it's randomized.
     *
     * @return string
     */
    public function getDebugLogFileName()
    {
    }
    /**
     * Writes given information into log file.
     *
     * @param string|array $sText Text to write to log.
     *
     * @return void
     * @see __CControllerPacket::isDebugEnabled
     * @see __CControllerPacket::getDebugLogDirectory
     * @see __CControllerPacket::getDebugLogFileName
     */
    public function Debug($sText)
    {
    }
    /**
     * Unpacks $parameters and converts it using given $encoding into site charset.
     * Preserves "file" member of the array.
     *
     * @param string $parameters Serialized data.
     * @param string $encoding Encoding character set identifier.
     *
     * @return mixed|null
     */
    protected function unpackParameters($parameters, $encoding = '')
    {
    }
    /**
     * Recursively converts arParameter character set.
     *
     * @param array &$arParameters Input/Output parameter.
     * @param string $encodingFrom Encoding character set identifier.
     * @param string $encodingTo Encoding character set identifier.
     *
     * @return void
     * @see CMain::ConvertCharset
     */
    protected function _decode(&$arParameters, $encodingFrom, $encodingTo)
    {
    }
    /**
     * Checks given parameters signature against $hash member.
     *
     * @param string $parameter,... Parameter to be checked
     *
     * @return boolean
     */
    public function Check()
    {
    }
    /**
     * Returns signature for given parameters.
     * Sets $hash member with calculated value.
     *
     * @param string $parameter,... Parameter to be checked
     *
     * @return boolean
     */
    function Sign()
    {
    }
}
///////////////////////////////////////////////////////////////////////////////////////////
// Базовый класс для классов типа Request:
//
// Для использования на контроллере:
// CControllerServerRequestTo - Класс для отправки запроса клиенту
// CControllerServerRequestFrom - Класс для получения запроса от клиента
//
// Для использования на клиенте:
// CControllerClientRequestTo - Класс для отправки запроса на сервер
// CControllerClientRequestFrom - Класс для получения запроса от сервера
///////////////////////////////////////////////////////////////////////////////////////////
class __CControllerPacketRequest extends \__CControllerPacket
{
    public $operation;
    protected $hostname = '';
    ///////////////////////////////////
    //Для работе в классах получающих результаты (CControllerClientRequestFrom, CControllerServerRequestFrom):
    ///////////////////////////////////
    // заполняет объект переменными, пришедшими в $_REQUEST
    public function InitFromRequest()
    {
    }
    /**
     * Checks packet consistency.
     *
     * @return boolean
     * @see __CControllerPacket::Check
     */
    public function Check()
    {
    }
    /**
     * Sets $hash member with calculated value.
     *
     * @return void
     */
    public function Sign()
    {
    }
    /**
     * Check if it was internal call or browser redirect.
     *
     * @return boolean
     **/
    public function Internal()
    {
    }
    ///////////////////////////////////////
    // Для работы в классах отправляющих запросы (CControllerClientRequestTo, CControllerServerRequestTo):
    ///////////////////////////////////////
    /**
     * Returns url encoded and signed string of parameters.
     *
     * @return string
     **/
    public function MakeRequestString()
    {
    }
    /**
     * Asks user browser to do redirect.
     * And thus make a hit with all needed payload.
     *
     * @return void
     **/
    public function RedirectRequest($url)
    {
    }
    /**
     * Sends packet.
     *
     * @param string $url
     * @param string $page
     * @return __CControllerPacketResponse
     */
    public function Send($url = "", $page = "")
    {
    }
}
/////////////////////////////////////////////////////////
// Базовый класс для классов типа Response:
//
// Для использования на контроллере:
// CControllerServerResponseFrom - Класс для получения ответа клиента на сервере
// CControllerServerResponseTo - Класс для отправки результатов выполнения запроса назад на клиента
//
// Для использования на клиенте:
// CControllerClientResponseFrom - Класс для получения ответа контроллера на клиенте
// CControllerClientResponseTo - Класс для отправки результатов выполнения запроса назад на контроллер
//////////////////////////////////////////////////////////
class __CControllerPacketResponse extends \__CControllerPacket
{
    public $httpHeaders;
    public $status;
    public $text;
    function _InitFromRequest($oPacket, $arExclude = array('operation', 'arParameters'))
    {
    }
    //////////////////////////////////////////////
    // Методы для работы в классах принимающих результат (CControllerServerResponseFrom, CControllerClientResponseFrom):
    //////////////////////////////////////////////
    /**
     * Checks packet consistency.
     *
     * @return boolean
     * @see __CControllerPacket::Check
     */
    function Check()
    {
    }
    /**
     * Sets $hash member with calculated value.
     *
     * @return void
     */
    function Sign()
    {
    }
    // Возвращает успешно ли выполнился запрос по статус его ответа
    function OK()
    {
    }
    // Разбирает строку ответа по полям объекта
    function ParseResult($result)
    {
    }
    ///////////////////////////////////////
    // Базовые методы для использования в классах отправляющих результат (CControllerServerResponseTo, CControllerClientResponseTo):
    ///////////////////////////////////////
    // возвращает отформатированную строку ответа в формате понятном для приема на сервере, с подписью
    function GetResponseBody($log = \false)
    {
    }
    // отправляет ответ обратно
    function Send()
    {
    }
}
// Класс для отправки запроса на сервер
class CControllerClientRequestTo extends \__CControllerPacketRequest
{
    var $debug_const = "CONTROLLER_CLIENT_DEBUG";
    var $debug_file_const = "CONTROLLER_CLIENT_LOG_DIR";
    public function __construct($operation, $arParameters = array())
    {
    }
    function SendWithCheck($page = "/bitrix/admin/controller_ws.php")
    {
    }
    public function Send($url = "", $page = "/bitrix/admin/controller_ws.php")
    {
    }
}
// Класс получения результата на клиенте (от контроллера)
class CControllerClientResponseFrom extends \__CControllerPacketResponse
{
    var $debug_const = "CONTROLLER_CLIENT_DEBUG";
    var $debug_file_const = "CONTROLLER_CLIENT_LOG_DIR";
    public function __construct($oPacket)
    {
    }
}
class CControllerClientRequestFrom extends \__CControllerPacketRequest
{
    var $debug_const = "CONTROLLER_CLIENT_DEBUG";
    var $debug_file_const = "CONTROLLER_CLIENT_LOG_DIR";
    public function __construct()
    {
    }
    function Check()
    {
    }
}
// Класс для отсылки ответа на сервер
class CControllerClientResponseTo extends \__CControllerPacketResponse
{
    var $debug_const = "CONTROLLER_CLIENT_DEBUG";
    var $debug_file_const = "CONTROLLER_CLIENT_LOG_DIR";
    public function __construct($oPacket = \false)
    {
    }
}
class CControllerTools
{
    public static function PackFileArchive($path)
    {
    }
    public static function UnpackFileArchive($strfile, $path_to)
    {
    }
}