<?php

class CSiteCheckerTest
{
    var $arTestVars;
    var $percent;
    var $last_function;
    var $strCurrentTestName;
    var $result;
    var $LogResourse;
    var $LogResult;
    var $group_name;
    var $group_desc;
    public function __construct($step = 0, $fast = 0, $fix_mode = 0)
    {
    }
    public static function GetTestList()
    {
    }
    function Start()
    {
    }
    function Result($result, $text = '')
    {
    }
    function OpenLog()
    {
    }
    function ConnectToHost($host = \false, $port = \false, $ssl = \false)
    {
    }
    function Unformat($str)
    {
    }
    function TableFieldCanBeAltered($f, $f_tmp)
    {
    }
    ###### TESTS #######
    # {
    #
    function check_php_modules()
    {
    }
    function check_php_settings()
    {
    }
    function check_server_vars()
    {
    }
    function check_mail($big = \false)
    {
    }
    function check_mail_big()
    {
    }
    function check_mail_b_event()
    {
    }
    function check_connect_mail()
    {
    }
    function check_socnet()
    {
    }
    function check_rest()
    {
    }
    function check_mail_push()
    {
    }
    function check_socket()
    {
    }
    function check_compression()
    {
    }
    function check_socket_ssl()
    {
    }
    function check_ad()
    {
    }
    function check_ntlm()
    {
    }
    function check_ca_file()
    {
    }
    function check_dbconn()
    {
    }
    function check_dbconn_settings()
    {
    }
    function check_upload($big = \false, $raw = \false)
    {
    }
    function check_upload_big()
    {
    }
    function check_upload_raw()
    {
    }
    function check_post()
    {
    }
    function check_memory_limit()
    {
    }
    function check_session()
    {
    }
    function check_session_ua()
    {
    }
    function check_mbstring()
    {
    }
    function check_http_auth()
    {
    }
    function check_update()
    {
    }
    function check_pull_stream()
    {
    }
    function check_pull_comments()
    {
    }
    function check_turn()
    {
    }
    function check_push_bitrix()
    {
    }
    function check_access_docs()
    {
    }
    function check_extranet()
    {
    }
    function check_webdav()
    {
    }
    function check_search()
    {
    }
    function check_fast_download()
    {
    }
    function check_access_mobile()
    {
    }
    function check_perf()
    {
    }
    function check_cache()
    {
    }
    function check_exec()
    {
    }
    function check_security()
    {
    }
    function check_install_scripts()
    {
    }
    function check_clone()
    {
    }
    function check_getimagesize()
    {
    }
    function check_localredirect()
    {
    }
    function check_sites()
    {
    }
    function check_pcre_recursion()
    {
    }
    function check_method_exists()
    {
    }
    function check_bx_crontab()
    {
    }
    ##############################
    # MYSQL Tests follow
    ##############################
    function check_mysql_bug_version()
    {
    }
    function check_mysql_mode()
    {
    }
    function check_mysql_time()
    {
    }
    function check_mysql_table_status()
    {
    }
    function check_mysql_connection_charset()
    {
    }
    function check_mysql_db_charset()
    {
    }
    function check_mysql_table_charset()
    {
    }
    function check_mysql_table_structure()
    {
    }
    ###############
    # }
    #
    function CommonTest()
    {
    }
}
class CSearchFiles
{
    public function __construct()
    {
    }
    function Search($path)
    {
    }
}
////////////////////////////////////////////////////////////////////////
//////////   FUNCTIONS   ///////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
function CheckGetModuleInfo($path)
{
}
function IsHttpResponseSuccess($res, $strRequest)
{
}
function GetHttpResponse($res, $strRequest, &$strHeaders)
{
}
function checker_get_unique_id()
{
}
function getCharsetByCollation($collation)
{
}
function InitPureDB()
{
}
function TableFieldConstruct($f0)
{
}
function fix_link($mode = 2)
{
}
function PrintHTTP($strRequest, $strHeaders, $strRes)
{
}