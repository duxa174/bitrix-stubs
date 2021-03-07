<?php

class CBPMailActivity extends \CBPActivity
{
    const DEFAULT_SEPARATOR = ',';
    const FILE_TYPE_FILE = 'file';
    const FILE_TYPE_DISK = 'disk';
    public function __construct($name)
    {
    }
    public function Execute()
    {
    }
    public static function ValidateProperties($arTestProperties = array(), \CBPWorkflowTemplateUser $user = \null)
    {
    }
    public static function GetPropertiesDialog($documentType, $activityName, $arWorkflowTemplate, $arWorkflowParameters, $arWorkflowVariables, $arCurrentValues = \null, $formName = "", $popupWindow = \null, $siteId = '')
    {
    }
    public static function GetPropertiesDialogValues($documentType, $activityName, &$arWorkflowTemplate, &$arWorkflowParameters, &$arWorkflowVariables, $arCurrentValues, &$arErrors)
    {
    }
    private function getFiles()
    {
    }
    private function getFileIds()
    {
    }
    private function getAttachments()
    {
    }
    public static function CheckEmailUserValue($user)
    {
    }
    private function encodeFrom(array $from, $charset)
    {
    }
    private function encodeReplyTo(array $fromList, $charset, $separator = self::DEFAULT_SEPARATOR)
    {
    }
    private static function extractEmails($ar)
    {
    }
    private static function getMailUserPropertyGetter()
    {
    }
    private function getFromList($separator = self::DEFAULT_SEPARATOR)
    {
    }
    private function filterFromList(array $fromList) : array
    {
    }
    private function getConfirmedEmails(array $emailsToCheck) : array
    {
    }
    private function getMailUserTo($separator = self::DEFAULT_SEPARATOR)
    {
    }
    private function getMailText()
    {
    }
    private static function encodeMailText($text)
    {
    }
    public static function decodeMailText($text)
    {
    }
}