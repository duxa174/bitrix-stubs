<?php

class CIdeaManagmentIdea
{
    private $IdeaId = \false;
    private $CacheStorage = array();
    private static $CategoryIB = \false;
    private static $instance = \null;
    function __construct($IdeaId = \false)
    {
    }
    public static function GetInstance($IdeaId)
    {
    }
    public function IsAvailable()
    {
    }
    public function SetID($IdeaId)
    {
    }
    public function SetCategoryListID($ID)
    {
    }
    public function GetCategoryListID()
    {
    }
    /*
     * Not for USE Can be changed
     */
    public function GetSubCategoryList($CategoryCode)
    {
    }
    /*
     * Not for USE Can be changed
     */
    public function GetCategorySequence($CODE)
    {
    }
    public function GetCategoryList($CategoryIB = \false)
    {
    }
    /*
     * Not for USE Can be changed
     */
    public function GetDefaultStatus($arStatusPriority = array())
    {
    }
    public function GetStatusList($XML_ID = \false)
    {
    }
    public function SetStatus($StatusId)
    {
    }
    //%TODO%
    public function BindDuplicate()
    {
    }
    //%TODO%
    public function UnBindDuplicate()
    {
    }
}