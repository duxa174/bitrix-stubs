<?php

class CCalendarWebService extends \IWebService
{
    var $arStatusValues = array('free' => 0, 'quest' => 1, 'busy' => 2, 'absent' => 3);
    var $arPriorityValues = array('low' => -1, 'normal' => 0, 'high' => 1);
    function __getFieldsDefinition()
    {
    }
    function __makeDateTime($ts = \null)
    {
    }
    function __makeTS($datetime = \null)
    {
    }
    function GetList($listName)
    {
    }
    function __getRow($event, $listName, &$last_change)
    {
    }
    function GetListItemChanges($listName, $viewFields = '', $since = '', $contains = '')
    {
    }
    function GetListItemChangesSinceToken($listName, $viewFields = '', $query = '', $rowLimit = 0, $changeToken = '')
    {
    }
    function UpdateListItems($listName, $updates)
    {
    }
    function GetWebServiceDesc()
    {
    }
    public static function ClearOutlookHtml($html)
    {
    }
}