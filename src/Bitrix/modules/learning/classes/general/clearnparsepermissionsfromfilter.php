<?php

// Process permissions
class CLearnParsePermissionsFromFilter
{
    protected $requestedUserId = \false;
    protected $bCheckPerm = \false;
    protected $cachedSQL = \false;
    protected $requestedOperations = \false;
    protected $oAccess = \false;
    private static $availableLessons = array();
    function __construct($arFilter)
    {
    }
    protected static function DetermineRequestedUserId($arFilter, $loggedUserId)
    {
    }
    protected static function ParseRequestedOperations($arFilter)
    {
    }
    public function SQLForAccessibleLessons()
    {
    }
    public function IsNeedCheckPerm()
    {
    }
}