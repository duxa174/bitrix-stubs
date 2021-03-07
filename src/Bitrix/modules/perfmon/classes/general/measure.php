<?php

class CPerfomanceMeasure
{
    public static function GetPHPCPUMark()
    {
    }
    public static function GetPHPFilesMark()
    {
    }
    public static function GetPHPMailMark()
    {
    }
    public static function GetDBMark($type)
    {
    }
    public static function GetAccelerator()
    {
    }
    public static function GetAllAccelerators()
    {
    }
}
class CPerfAccel
{
    public $enabled;
    public $cache_ttl;
    public $max_file_size;
    public $check_mtime;
    public $memory_total;
    public $memory_used;
    public $cache_limit;
    function __construct($enabled, $cache_ttl, $max_file_size, $check_mtime, $memory_total, $memory_used, $cache_limit = -1)
    {
    }
    function GetParams()
    {
    }
    function IsWorking()
    {
    }
    function GetRecommendations()
    {
    }
    public static function unformat($str)
    {
    }
}
class CPerfAccelZend extends \CPerfAccel
{
    function __construct()
    {
    }
    function GetRecommendations()
    {
    }
    function GetParams()
    {
    }
}
class CPerfAccelAPC extends \CPerfAccel
{
    var $is_enabled = \null;
    var $is_cache_by_default = \null;
    var $num_files_hint = \null;
    var $user_entries_hint = \null;
    function __construct()
    {
    }
    function GetParams()
    {
    }
}
class CPerfAccelXCache extends \CPerfAccel
{
    function __construct()
    {
    }
    function GetParams()
    {
    }
}
class CPerfAccelWinCache extends \CPerfAccel
{
    function __construct()
    {
    }
    function GetParams()
    {
    }
}
class CPerfAccelZendOpCache extends \CPerfAccel
{
    function __construct()
    {
    }
    function GetRecommendations()
    {
    }
    function GetParams()
    {
    }
}