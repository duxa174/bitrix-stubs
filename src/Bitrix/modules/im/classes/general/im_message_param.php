<?php

class CIMMessageParam
{
    public static function Set($messageId, $params = array())
    {
    }
    public static function UpdateTimestamp($messageId, $chatId = 0)
    {
    }
    public static function SendPull($messageId, $sendExtraParams = \true)
    {
    }
    public static function DeleteAll($messageId, $deleteWithTs = \false)
    {
    }
    public static function DeleteByParam($paramName, $paramValue)
    {
    }
    public static function Get($messageId, $paramName = \false, $withDefault = \false)
    {
    }
    public static function GetMessageIdByParam($paramName, $paramValue, $chatId = \null)
    {
    }
    public static function PrepareValues($values, $withDefault = \false)
    {
    }
    public static function GetDefault()
    {
    }
}
class CIMMessageParamAttach
{
    const NORMAL = "#aac337";
    const ATTENTION = "#e8a441";
    const PROBLEM = "#df532d";
    const TRANSPARENT = "TRANSPARENT";
    const CHAT = "CHAT";
    const TEXT_NODES_NAMES = ['NAME', 'LINK', 'MESSAGE', 'VALUE'];
    private $result = array();
    function __construct($id = \null, $color = \null)
    {
    }
    public function AddUser($params)
    {
    }
    public function AddChat($params)
    {
    }
    public function AddBot($params)
    {
    }
    public function AddLink($params)
    {
    }
    public function AddRichLink($params)
    {
    }
    public function AddHtml($html)
    {
    }
    public function AddMessage($message)
    {
    }
    public function AddGrid($params)
    {
    }
    public function AddImages($params)
    {
    }
    public function AddFiles($params)
    {
    }
    public function AddDelimiter($params = array())
    {
    }
    private static function decodeBbCode($message)
    {
    }
    private static function removeNewLine($text)
    {
    }
    public static function GetAttachByJson($array)
    {
    }
    public static function PrepareAttach($attach)
    {
    }
    public function IsEmpty()
    {
    }
    public function IsAllowSize()
    {
    }
    public function SetId($id)
    {
    }
    public function GetId()
    {
    }
    public function GetArray()
    {
    }
    public function GetJSON()
    {
    }
    /**
     * Recursively goes through attach nodes and gets all the text nodes for search indexing
     * @param $attach
     *
     * @return array
     */
    public static function GetTextForIndex($attach) : array
    {
    }
}
class CIMMessageLink
{
    private $result = \false;
    private $message = "";
    private $attach = array();
    private $urlId = array();
    private $staticUrl = array();
    public function prepareInsert($text)
    {
    }
    private function prepareUrlObjects($params)
    {
    }
    public static function prepareShow($arMessages, $params)
    {
    }
    public static function getAttachments($id, $typeArray = \false)
    {
    }
    public static function formatAttach($linkParam)
    {
    }
    private function isLinkOnly()
    {
    }
    public function result()
    {
    }
}