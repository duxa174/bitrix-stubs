<?php

namespace Bitrix\Main\UI;

class FileInputReceiver
{
    protected $status = array();
    protected $id = "unknown";
    protected $uploader;
    const STATUS_SUCCESS = 'success';
    const STATUS_DENIED = 'denied';
    const STATUS_ERROR = 'error';
    const STATUS_NEED_AUTH = 'need_auth';
    const STATUS_INVALID_SIGN = 'invalid_sign';
    function __construct($params = array(), $signature)
    {
    }
    protected function getAgent()
    {
    }
    public static function sign($params = array())
    {
    }
    protected static function resizePicture(&$f, $resize = array())
    {
    }
    protected static function handleFileByPath($hash, &$file)
    {
    }
    protected static function handleFileByHash($hash, &$file)
    {
    }
    public function handleFile($hash, &$file)
    {
    }
    public function exec()
    {
    }
}