<?php

class CMail
{
    const ERR_DEFAULT = 1;
    const ERR_DB = 2;
    const ERR_API_DEFAULT = 101;
    const ERR_API_DENIED = 102;
    const ERR_API_DOMAINLIST_EMPTY = 103;
    const ERR_API_NAME_OCCUPIED = 104;
    const ERR_API_USER_NOTFOUND = 105;
    const ERR_API_EMPTY_DOMAIN = 106;
    const ERR_API_EMPTY_NAME = 107;
    const ERR_API_EMPTY_PASSWORD = 108;
    const ERR_API_SHORT_PASSWORD = 109;
    const ERR_API_BAD_NAME = 110;
    const ERR_API_BAD_PASSWORD = 111;
    const ERR_API_PASSWORD_LIKELOGIN = 112;
    const ERR_API_LONG_NAME = 113;
    const ERR_API_LONG_PASSWORD = 114;
    const ERR_API_OP_DENIED = 115;
    const ERR_API_OLD_TOKEN = 116;
    const ERR_API_DOMAIN_OCCUPIED = 201;
    const ERR_API_BAD_DOMAIN = 202;
    const ERR_API_PROHIBITED_DOMAIN = 203;
    const ERR_ENTRY_NOT_FOUND = 301;
    const F_DOMAIN_LOGO = 1;
    const F_DOMAIN_REG = 2;
    public static function getErrorMessage($code)
    {
    }
    public static function onUserUpdate($arFields)
    {
    }
    public static function onUserDelete($id)
    {
    }
    public static function option($name, $value = \null)
    {
    }
}
class CMailError
{
    public static function ResetErrors()
    {
    }
    public static function SetError($ID, $TITLE = "", $DESC = "")
    {
    }
    public static function GetLastError($type = \false)
    {
    }
    public static function GetErrors()
    {
    }
    public static function GetErrorsText($delim = "<br>")
    {
    }
    public static function ErrCount()
    {
    }
}
class _CMailBoxDBRes extends \CDBResult
{
    function __construct($res)
    {
    }
    function Fetch()
    {
    }
}
///////////////////////////////////////////////////////////////////////////////////
// class CMailBox
///////////////////////////////////////////////////////////////////////////////////
class CAllMailBox
{
    var $pop3_conn = \false;
    var $mess_count = 0;
    var $mess_size = 0;
    var $resp = \true;
    var $last_result = \true;
    var $response = "";
    var $response_body = "";
    public $mailbox_id = 0;
    public $new_mess_count = 0;
    public $deleted_mess_count = 0;
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    function CheckMail($mailbox_id = \false)
    {
    }
    public static function CheckMailAgent($ID)
    {
    }
    public static function CheckFields($arFields, $ID = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function SMTPReload()
    {
    }
    function SendCommand($command)
    {
    }
    function GetResponse($bMultiline = \false, $bSkipFirst = \true)
    {
    }
    function GetResponseBody()
    {
    }
    function GetResponseString()
    {
    }
    function GetPassword($p)
    {
    }
    function Check($server, $port, $use_tls, $login, $passw)
    {
    }
    function Connect($mailbox_id)
    {
    }
    private function _connect($mailbox_id, $arMAILBOX_PARAMS)
    {
    }
    function GetMessage($mailbox_id, $msgnum, $msguid, $session_id)
    {
    }
    // function GetMessage(...
    /*********************************************************************
     *********************************************************************/
    function DeleteMessage($msgnum)
    {
    }
}
///////////////////////////////////////////////////////////////////////////////////
// class CMailHeader
///////////////////////////////////////////////////////////////////////////////////
class CMailHeader
{
    var $arHeader = array();
    var $arHeaderLines = array();
    var $strHeader = "";
    var $bMultipart = \false;
    var $content_type, $boundary, $charset, $filename, $MultipartType = "mixed";
    public $content_id = '';
    public static function ConvertHeader($encoding, $type, $str, $charset)
    {
    }
    function DecodeHeader($str, $charset_to, $charset_document)
    {
    }
    function Parse($message_header, $charset)
    {
    }
    function IsMultipart()
    {
    }
    function MultipartType()
    {
    }
    function GetBoundary()
    {
    }
    function GetHeader($type)
    {
    }
}
class CMailMessageDBResult extends \CDBResult
{
    function fetch()
    {
    }
}
///////////////////////////////////////////////////////////////////////////////////
// class CMailMessage
///////////////////////////////////////////////////////////////////////////////////
class CAllMailMessage
{
    public static function GetList($arOrder = array(), $arFilter = array(), $bCnt = \false)
    {
    }
    function GetByID($ID)
    {
    }
    public static function GetSpamRating($msgid, $arRow = \false)
    {
    }
    public static function parseHeader($header, $charset)
    {
    }
    public static function decodeMessageBody($header, $body, $charset)
    {
    }
    public static function parseMessage($message, $charset)
    {
    }
    public static function addMessage($mailboxId, $message, $charset, $params = array())
    {
    }
    public static function saveMessage($mailboxId, &$message, &$header, &$bodyHtml, &$bodyText, &$attachments, $params = array())
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    private static function trimContent(array &$fields, $trimLength, $filters)
    {
    }
    public static function Delete($id)
    {
    }
    public static function MarkAsSpam($ID, $bIsSPAM = \true, $arRow = \false)
    {
    }
    public static function addAttachment($arFields)
    {
    }
}
class _CMailAttachmentDBRes extends \CDBResult
{
    function __construct($res)
    {
    }
    function fetch()
    {
    }
}
class CMailAttachment
{
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    function Delete($id)
    {
    }
    public static function getContents($attachment)
    {
    }
}
class CAllMailUtil
{
    public static function convertCharset($str, $from, $to)
    {
    }
    public static function uue_decode($str)
    {
    }
    public static function MkOperationFilter($key)
    {
    }
    public static function FilterCreate($fname, $vals, $type, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    public static function FilterCreateEx($fname, $vals, $type, &$bFullJoin, $cOperationType = \false, $bSkipEmpty = \true)
    {
    }
    public static function ByteXOR($a, $b, $l)
    {
    }
    public static function BinMD5($val)
    {
    }
    public static function Decrypt($str, $key = \false)
    {
    }
    public static function Crypt($str, $key = \false)
    {
    }
    public static function extractAllMailAddresses($emails)
    {
    }
    public static function ExtractMailAddress($email)
    {
    }
    public static function checkImapMailbox($server, $port, $use_tls, $login, $password, &$error)
    {
    }
}
class CMailFilter
{
    public static function GetList($arOrder = array(), $arFilter = array(), $bCnt = \false)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function CheckPHP($code, $field_name)
    {
    }
    public static function CheckFields($arFields, $ID = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function Filter($arFields, $event, $FILTER_ID = \false, $PARENT_FILTER_ID = \false)
    {
    }
    public static function FilterMessage($message_id, $event, $FILTER_ID = \false)
    {
    }
    public static function RecalcSpamRating()
    {
    }
    public static function GetSpamRating($message)
    {
    }
    public static function getWords($message, $max_words)
    {
    }
    public static function DoPHPAction($id, $action, &$arMessageFields)
    {
    }
    public static function DeleteFromSpamBase($message, $bIsSPAM = \true)
    {
    }
    public static function MarkAsSpam($message, $bIsSPAM = \true)
    {
    }
    public static function SpamAction($message, $bIsSPAM, $bDelete = \false)
    {
    }
    public static function GetFilterList($id = "")
    {
    }
}
class CMailFilterCondition
{
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    function GetByID($ID)
    {
    }
    function Delete($ID)
    {
    }
    public static function SetConditions($FILTER_ID, $CONDITIONS, $bClearOther = \true)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
}
class CMailLog
{
    public static function AddMessage($arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    function GetList($arOrder = array(), $arFilter = array())
    {
    }
    public static function ConvertRow($arr_log)
    {
    }
}
class _CMailLogDBRes extends \CDBResult
{
    function __construct($res)
    {
    }
    function Fetch()
    {
    }
}