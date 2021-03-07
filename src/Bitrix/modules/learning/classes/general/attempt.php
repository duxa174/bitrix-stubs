<?php

abstract class CAllTestAttempt
{
    function CheckFields(&$arFields, $ID = \false, $bCheckRights = \true)
    {
    }
    function Add($arFields)
    {
    }
    function Update($ID, $arFields, $arParams = array())
    {
    }
    function Delete($ID)
    {
    }
    function GetFilter($arFilter)
    {
    }
    function GetByID($ID)
    {
    }
    function GetCount($TEST_ID, $STUDENT_ID)
    {
    }
    function IsTestCompleted($ATTEMPT_ID, $PERCENT)
    {
    }
    function OnAttemptChange($ATTEMPT_ID, $bCOMPLETED = \false)
    {
    }
    function AttemptFinished($ATTEMPT_ID)
    {
    }
    function RecountQuestions($ATTEMPT_ID)
    {
    }
    function IsTestFailed($ATTEMPT_ID, $PERCENT)
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array(), $arSelect = array(), $arNavParams = array())
    {
    }
    private static function getSpeedFieldSql()
    {
    }
    public static function CreateAttemptQuestions($ATTEMPT_ID)
    {
    }
}