<?php

interface ILearnPath
{
    /**
     * @param integer/string/array (if string must be strictly castable to integer).
     * allowed many params. First param - is the id of top, etc.
     * if array => than it must be one argument and it will be parsed as path in format for self::SetPathFromArray()
     */
    public function __construct();
    /**
     * @param integer/string (if string must be strictly castable to integer).
     * allowed many params. First param - is the id of top, etc.
     */
    public function SetPath();
    /**
     * @param array of lessons' ids
     */
    public function SetPathFromArray($arPath);
    /**
     * @param string urlencoded path, which can produced by exportUrlencoded()
     */
    public function ImportUrlencoded($str);
    /**
     * @return string urlencoded path, which can be used for importUrlencoded()
     */
    public function ExportUrlencoded();
    /**
     * @return array of lessons' ids in current path (from top to bottom)
     */
    public function GetPathAsArray();
    /**
     * @return integer/bool id of top (left) element in path. If path is empty - returns FALSE
     */
    public function GetTop();
    /**
     * @return integer/bool id of bottom (right) element in path. If path is empty - returns FALSE
     */
    public function GetBottom();
    /**
     * Removes last element (if exists) from path
     * @return integer/bool id of bottom (right) element in path. If path is empty - returns FALSE
     */
    public function PopBottom();
    /**
     * Removes first element (if exists) from path
     * @return integer/bool id of first (left) element in path. If path is empty - returns FALSE
     */
    public function ShiftTop();
    /**
     * @return integer count of elements in path
     */
    public function Count();
    /**
     * @param string delimiter, by default is ' / '
     * @param string pattern, how names will be renderred. 
     * Default pattern is '#NAME#'
     * Available fields: #NAME#, #LESSON_ID#
     * 
     * @return string such as "Course bla bla bla / chapter XXX / lesson XXX"
     */
    public function GetPathAsHumanReadableString($delimiter = ' / ', $pattern = '#NAME#');
}
class CLearnPath implements \ILearnPath
{
    const DELIMITER = '.';
    protected $arPath = array();
    public function __construct()
    {
    }
    public function SetPath()
    {
    }
    protected function _SetPath($args)
    {
    }
    public function SetPathFromArray($arPath)
    {
    }
    // returns true if $str is path with two or more elements
    public static function IsUrlencodedPath($str)
    {
    }
    public function ImportUrlencoded($str)
    {
    }
    public function GetPathAsArray()
    {
    }
    public function ExportUrlencoded()
    {
    }
    public function GetTop()
    {
    }
    public function GetBottom()
    {
    }
    public function PopBottom()
    {
    }
    public function ShiftTop()
    {
    }
    public function GetPathAsHumanReadableString($delimiter = ' / ', $pattern = '#NAME#')
    {
    }
    public function Count()
    {
    }
}