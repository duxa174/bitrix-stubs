<?php

class CIdeaManagmentEmailNotify
{
    const SUBSCRIBE_ALL = 'A';
    const SUBSCRIBE_ALL_IDEA = 'AI';
    //const SUBSCRIBE_ALL_IDEA_COMMENT = 'AIC';
    const SUBSCRIBE_IDEA_COMMENT = 'I';
    private $Notify = \NULL;
    private static $Enable = \true;
    public function __construct($parent)
    {
    }
    public function IsAvailable()
    {
    }
    public static function Add($Entity)
    {
    }
    public static function Delete($Entity)
    {
    }
    public static function GetList($order = array(), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public function Send()
    {
    }
    public function Disable()
    {
    }
    public function Enable()
    {
    }
}