<?php

class CAllWorkflow
{
    public static function err_mess()
    {
    }
    public static function OnPanelCreate()
    {
    }
    public static function OnChangeFile($path, $site)
    {
    }
    public static function SetHistory($DOCUMENT_ID)
    {
    }
    // Deletes old copies from document's history
    public static function CleanUpHistoryCopies($DOCUMENT_ID = \false, $HISTORY_COPIES = \false)
    {
    }
    // Deletes old copies from document's history (simple edit - SE)
    public static function CleanUpHistoryCopies_SE($FILENAME, $HISTORY_COPIES = \false)
    {
    }
    // saves changes history and send e-mails on status change
    public static function SetMove($DOCUMENT_ID, $STATUS_ID, $OLD_STATUS_ID, $LOG_ID)
    {
    }
    public static function Delete($DOCUMENT_ID)
    {
    }
    public static function IsAdmin()
    {
    }
    // check edit rights for the document
    // depending on it's status and lock
    public static function IsAllowEdit($DOCUMENT_ID, &$locked_by, &$date_lock, $CHECK_RIGHTS = "Y")
    {
    }
    public static function GetStatus($DOCUMENT_ID)
    {
    }
    // check edit rights for the document
    // check is based only on status no lock
    public static function IsHaveEditRights($DOCUMENT_ID)
    {
    }
    public static function UnLock($DOCUMENT_ID)
    {
    }
    public static function Lock($DOCUMENT_ID)
    {
    }
    // return edit link depending on rights and status
    public static function GetEditLink($FILENAME, &$status_id, &$status_title, $template = "", $lang = \LANGUAGE_ID, $return_url = "")
    {
    }
    public static function DeleteHistory($ID)
    {
    }
    public static function CleanUp()
    {
    }
    public static function CleanUpFiles($DOCUMENT_ID = \false, $FILE_ID = \false)
    {
    }
    public static function CleanUpPreview($DOCUMENT_ID = \false)
    {
    }
    public static function DeletePreview($FILENAME, $site = \false)
    {
    }
    public static function DeleteFile($FILENAME)
    {
    }
    public static function IsFilenameExists($FILENAME)
    {
    }
    public static function GetUniqueFilename($filename)
    {
    }
    public static function IsPreviewExists($FILENAME)
    {
    }
    public static function GetUniquePreview($DOCUMENT_ID)
    {
    }
    public static function SetStatus($DOCUMENT_ID, $STATUS_ID, $OLD_STATUS_ID, $history = \true)
    {
    }
    public static function LinkFiles2Document($arUploadedFiles, $DOCUMENT_ID)
    {
    }
    public static function GetFileByID($DOCUMENT_ID, $FILENAME)
    {
    }
    public static function GetTempDir()
    {
    }
    public static function GetFileContent($did, $fname, $wf_path = "", $site = \false)
    {
    }
    public static function __CheckSite($site)
    {
    }
}