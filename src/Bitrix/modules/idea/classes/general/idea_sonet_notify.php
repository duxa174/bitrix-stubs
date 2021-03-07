<?php

//System, not for use
class CIdeaManagmentSonetNotify
{
    private $Notify = \NULL;
    private static $Enable = \true;
    public function __construct($parent)
    {
    }
    public function IsAvailable()
    {
    }
    /*
     * Not for USE Can be changed
     */
    public static function AddLogEvent(&$arFields)
    {
    }
    /*
     * Not for USE Can be changed
     */
    public static function CallBack_AddComment($arFields)
    {
    }
    public static function CallBack_UpdateComment($arFields)
    {
    }
    public static function CallBack_DeleteComment($arFields)
    {
    }
    /*
     * Not for USE Can be changed
     * Alias
     */
    public static function FormatComment($arFields, $arParams, $bMail = \false, $arLog = array())
    {
    }
    /*
     * Not for USE Can be changed
     * Alias
     */
    public static function FormatMessage($arFields, $arParams, $bMail = \false)
    {
    }
    /*
     * Not for USE Can be changed
     */
    private function AddMessage()
    {
    }
    /*
     * Not for USE Can be changed
     */
    private function AddComment()
    {
    }
    public function Send()
    {
    }
    public function HideMessage()
    {
    }
    public function ShowMessage()
    {
    }
    /*
     * Not for USE Can be changed
     */
    private function RemoveComment($CommentId = \false)
    {
    }
    /*
     * Not for USE Can be changed
     */
    private function RemoveMessage($MessageId = \false)
    {
    }
    public function Remove()
    {
    }
    public function Disable()
    {
    }
    public function Enable()
    {
    }
}