<?php

namespace Bitrix\Calendar\ICal\Parser;

class Parser
{
    private $data;
    /**
     * @var Generator|null
     */
    private $linesGenerator;
    /**
     * @var array
     */
    private $components;
    public static function getInstance($data) : \Bitrix\Calendar\ICal\Parser\Parser
    {
    }
    public function __construct($data)
    {
    }
    public function handleData() : \Bitrix\Calendar\ICal\Parser\Parser
    {
    }
    private function getLine()
    {
    }
    private function parse()
    {
    }
    public function getComponents() : array
    {
    }
    //	private static function _ValidUtf8( $data ) {
    //		$rx  = '[\xC0-\xDF]([^\x80-\xBF]|$)';
    //		$rx .= '|[\xE0-\xEF].{0,1}([^\x80-\xBF]|$)';
    //		$rx .= '|[\xF0-\xF7].{0,2}([^\x80-\xBF]|$)';
    //		$rx .= '|[\xF8-\xFB].{0,3}([^\x80-\xBF]|$)';
    //		$rx .= '|[\xFC-\xFD].{0,4}([^\x80-\xBF]|$)';
    //		$rx .= '|[\xFE-\xFE].{0,5}([^\x80-\xBF]|$)';
    //		$rx .= '|[\x00-\x7F][\x80-\xBF]';
    //		$rx .= '|[\xC0-\xDF].[\x80-\xBF]';
    //		$rx .= '|[\xE0-\xEF]..[\x80-\xBF]';
    //		$rx .= '|[\xF0-\xF7]...[\x80-\xBF]';
    //		$rx .= '|[\xF8-\xFB]....[\x80-\xBF]';
    //		$rx .= '|[\xFC-\xFD].....[\x80-\xBF]';
    //		$rx .= '|[\xFE-\xFE]......[\x80-\xBF]';
    //		$rx .= '|^[\x80-\xBF]';
    //
    //		return ( ! (bool) preg_match('!'.$rx.'!', $data) );
    //	}
}