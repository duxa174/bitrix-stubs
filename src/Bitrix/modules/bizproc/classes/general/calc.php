<?php

class CBPCalc
{
    /** @var CBPActivity $activity */
    private $activity;
    private $arErrorsList = [];
    private static $weekHolidays;
    private static $yearHolidays;
    private static $startWorkDay;
    private static $endWorkDay;
    // Operation priority
    private $arPriority = ['(' => 0, ')' => 1, ';' => 2, '=' => 3, '<' => 3, '>' => 3, '<=' => 3, '>=' => 3, '<>' => 3, '&' => 4, '+' => 5, '-' => 5, '*' => 6, '/' => 6, '^' => 7, '%' => 8, '-m' => 9, '+m' => 9, ' ' => 10, ':' => 11, 'f' => 12];
    // Allowable functions
    private $arAvailableFunctions = ['abs' => ['args' => \true, 'func' => 'FunctionAbs'], 'and' => ['args' => \true, 'func' => 'FunctionAnd'], 'date' => ['args' => \true, 'func' => 'FunctionDate'], 'dateadd' => ['args' => \true, 'func' => 'FunctionDateAdd'], 'datediff' => ['args' => \true, 'func' => 'FunctionDateDiff'], 'false' => ['args' => \false, 'func' => 'FunctionFalse'], 'if' => ['args' => \true, 'func' => 'FunctionIf'], 'intval' => ['args' => \true, 'func' => 'FunctionIntval'], 'floatval' => ['args' => \true, 'func' => 'FunctionFloatval'], 'numberformat' => ['args' => \true, 'func' => 'FunctionNumberFormat'], 'min' => ['args' => \true, 'func' => 'FunctionMin'], 'max' => ['args' => \true, 'func' => 'FunctionMax'], 'rand' => ['args' => \true, 'func' => 'FunctionRand'], 'round' => ['args' => \true, 'func' => 'FunctionRound'], 'ceil' => ['args' => \true, 'func' => 'FunctionCeil'], 'floor' => ['args' => \true, 'func' => 'FunctionFloor'], 'not' => ['args' => \true, 'func' => 'FunctionNot'], 'or' => ['args' => \true, 'func' => 'FunctionOr'], 'substr' => ['args' => \true, 'func' => 'FunctionSubstr'], 'strpos' => ['args' => \true, 'func' => 'FunctionStrpos'], 'strlen' => ['args' => \true, 'func' => 'FunctionStrlen'], 'implode' => ['args' => \true, 'func' => 'FunctionImplode'], 'explode' => ['args' => \true, 'func' => 'FunctionExplode'], 'randstring' => ['args' => \true, 'func' => 'FunctionRandString'], 'true' => ['args' => \false, 'func' => 'FunctionTrue'], 'convert' => ['args' => \true, 'func' => 'FunctionConvert'], 'merge' => ['args' => \true, 'func' => 'FunctionMerge'], 'addworkdays' => ['args' => \true, 'func' => 'FunctionAddWorkDays'], 'workdateadd' => ['args' => \true, 'func' => 'FunctionWorkDateAdd'], 'isworkday' => ['args' => \true, 'func' => 'FunctionIsWorkDay'], 'isworktime' => ['args' => \true, 'func' => 'FunctionIsWorkTime'], 'urlencode' => ['args' => \true, 'func' => 'FunctionUrlencode'], 'touserdate' => ['args' => \true, 'func' => 'FunctionToUserDate'], 'getuserdateoffset' => ['args' => \true, 'func' => 'FunctionGetUserDateOffset']];
    // Allowable errors
    private $arAvailableErrors = [0 => 'Incorrect variable name - "#STR#"', 1 => 'Empty', 2 => 'Syntax error "#STR#"', 3 => 'Unknown function "#STR#"', 4 => 'Unmatched closing bracket ")"', 5 => 'Unmatched opening bracket "("', 6 => 'Division by zero', 7 => 'Incorrect order of operands', 8 => 'Incorrect arguments of function "#STR#"'];
    const Operation = 0;
    const Variable = 1;
    const Constant = 2;
    public function __construct(\CBPActivity $activity)
    {
    }
    private function GetVariableValue($variable)
    {
    }
    private function SetError($errnum, $errstr = '')
    {
    }
    public function GetErrors()
    {
    }
    /*
    Return array of polish notation
    array(
    	key => array(value, self::Operation | self::Variable | self::Constant)
    )
    */
    private function GetPolishNotation($text)
    {
    }
    public function Calculate($text)
    {
    }
    private function ArrgsToArray($args)
    {
    }
    /* Math */
    private function FunctionAbs($num)
    {
    }
    private function FunctionRound($args)
    {
    }
    private function FunctionCeil($num)
    {
    }
    private function FunctionFloor($num)
    {
    }
    private function FunctionMin($args)
    {
    }
    private function FunctionMax($args)
    {
    }
    private function FunctionRand($args)
    {
    }
    private function FunctionIntval($num)
    {
    }
    private function FunctionFloatval($num)
    {
    }
    /* Logic */
    private function FunctionTrue()
    {
    }
    private function FunctionFalse()
    {
    }
    private function FunctionIf($args)
    {
    }
    private function FunctionNot($arg)
    {
    }
    private function FunctionAnd($args)
    {
    }
    private function FunctionOr($args)
    {
    }
    /* Date */
    private function FunctionDateAdd($args)
    {
    }
    private function FunctionWorkDateAdd($args)
    {
    }
    private function FunctionAddWorkDays($args)
    {
    }
    private function FunctionIsWorkDay($args)
    {
    }
    private function FunctionIsWorkTime($args)
    {
    }
    private function FunctionDateDiff($args)
    {
    }
    private function FunctionDate($args)
    {
    }
    private function FunctionToUserDate($args)
    {
    }
    private function FunctionGetUserDateOffset($args)
    {
    }
    /* Date - Helpers */
    private function makeTimestamp($date, $appendOffset = \false)
    {
    }
    private function getWorkDayTimestamp($date)
    {
    }
    private function getWorkDayRemainTimestamp($date, $multiplier = 1)
    {
    }
    private function getWorkDayInterval()
    {
    }
    private function isHoliday($date)
    {
    }
    private function isWorkTime($date)
    {
    }
    private function getNearestWorkTime($date, $multiplier = 1)
    {
    }
    private function addWorkDay($date, $days)
    {
    }
    private function getCalendarHolidays()
    {
    }
    private function getCalendarWorkTime()
    {
    }
    private function getDateTimeObject($date)
    {
    }
    private function getDateTimeOffset($date)
    {
    }
    /* String & Formatting */
    private function FunctionNumberFormat($args)
    {
    }
    private function FunctionRandString($args)
    {
    }
    private function FunctionSubstr($args)
    {
    }
    private function FunctionStrpos($args)
    {
    }
    private function FunctionStrlen($args)
    {
    }
    private function FunctionImplode($args)
    {
    }
    private function FunctionExplode($args)
    {
    }
    private function FunctionUrlencode($args)
    {
    }
    private function FunctionConvert($args)
    {
    }
    /* Complex values */
    private function FunctionMerge($args)
    {
    }
}