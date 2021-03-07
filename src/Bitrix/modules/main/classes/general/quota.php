<?php

class CAllDiskQuota
{
    var $max_execution_time = 20;
    // 20 sec
    var $LAST_ERROR = \false;
    private static $instance;
    public static function getInstance()
    {
    }
    public function __construct($params = array())
    {
    }
    function SetDBSize()
    {
    }
    function SetDirSize($path = "", $name = "", $recount = \false, $skip_dir = \false)
    {
    }
    function GetDirListSimple($path, $check_time = \true, $skip_dir = \false)
    {
    }
    function GetDirListFromLastFile($path, $path_to_last_file = "", $check_time = \true, $skip_dir = \false)
    {
    }
    function Recount($id, $recount = \false)
    {
    }
    function GetDiskQuota()
    {
    }
    public static function UpdateDiskQuota($type, $size, $action)
    {
    }
    public function CheckDiskQuota($params = array())
    {
    }
}