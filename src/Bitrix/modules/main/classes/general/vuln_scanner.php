<?php

class CVariableDeclare
{
    public $line = 0;
    public $start = 0;
    public $end = 0;
    public $comment = '';
    public $tokens = array();
    public $dependencies = array();
    public $tainted_vars = array();
    public $id = 0;
    function __construct($id, $line, $start, $end, $tokens, $comment, $dependencies, $tainted_vars)
    {
    }
}
class CVariable
{
    public $declares = array();
    public $have_user_input = \false;
    public $secure = \false;
    public $name = '';
    public $requestInitialization = \true;
    function __construct($name)
    {
    }
    public function newDeclare($id, $line, $start, $end, $tokens, $comment, $dependencies, $tainted_vars)
    {
    }
}
class CVuln
{
    public $comment = '';
    public $tokens = array();
    public $dependencies = array();
    public $tainted_vars = array();
    public $name = '';
    public $line = 0;
    public $filename = '';
    public $traverse = '';
    public $additional_text = '';
    function __construct($filename, $line, $name, $tokens, $dependencies, $tainted_vars, $comment)
    {
    }
}
class CVulnScanner
{
    public $vuln_count = 0;
    public $arResult = array();
    private $tokens = array();
    private $variables = array();
    private $template = '';
    private $file_history = array();
    private $current_file = '';
    private $scan_functions = array();
    private $tokens_type = array();
    private $vuln_func = array();
    private $sec_func = array();
    private $v_userinput = array();
    private $mp_mode = \false;
    private $color = array();
    private $securing_list = array();
    private $tainted_vars = array();
    private $comment = '';
    private $braces = 0;
    private $dependency = array();
    private $last_dependency = array();
    private $dependencies = array();
    private $dependency_line = 0;
    private $scanning_file = '';
    private $init_functions = array();
    private $search_xss = \true;
    private $global_xss_ignore = \false;
    function __construct($file_name, $arParams, $template = '.default', $component_template = '')
    {
    }
    private function getTokensInfo($tokens, $var_declare = \true, $function = '')
    {
    }
    private function dependencyHave($tokens, $type)
    {
    }
    public function process()
    {
    }
    private static function tokenToString($token)
    {
    }
    private function getClassName($token)
    {
    }
    private function getVarName($token, $level = -1)
    {
    }
    private function clearVariables($var)
    {
    }
    private function addVariable($var, $id, $line, $start, $end, $comment = '', $customTokens = array())
    {
    }
    public function tokenize($code, $component_template = '')
    {
    }
    private function prepareTokens($tokens)
    {
    }
    private function wrapBraces($tokens, $start, $between, $end)
    {
    }
    private function fixTokens($tokens, $component_template = '')
    {
    }
    private function reconstructArray($tokens)
    {
    }
    private function removeTernary($tokens)
    {
    }
    private function getTokensValue($file_name, $tokens, $start = 0, $stop = 0)
    {
    }
    private function getBraceEnd($tokens, $i)
    {
    }
    private function getColor($token)
    {
    }
    private function highlightArray($token)
    {
    }
    private function highlightLine($line, $tokens = array(), $tainted_vars = array(), $comment = '')
    {
    }
    private function getVulnNodeTitle($func_name)
    {
    }
    private function getVulnNodeDescription($func_name)
    {
    }
    private function getVulnName($func_name)
    {
    }
    private function traverseVar($var, $id = -1)
    {
    }
    private function dependenciesTraverse($dependencies = array())
    {
    }
    private static function searchSimilarVuln($output, $max)
    {
    }
    private function prepareOutput($output)
    {
    }
    private function getHelp($category)
    {
    }
    public function getOutput()
    {
    }
}
class CQAACheckListTests
{
    private static function getFiles($path, $skip_preg, $file_types, $doc_root, &$files, &$dirs)
    {
    }
    private static function defineScanParams()
    {
    }
    private static function getCurTemplate($path, $mp_mode = \false)
    {
    }
    public static function checkVulnerabilities($arParams)
    {
    }
}