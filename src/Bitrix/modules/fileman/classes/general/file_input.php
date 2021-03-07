<?php

class CFileInput
{
    private static $bMultiple = \false, $bUseUpload = \false, $bUseMedialib = \false, $bUseFileDialog = \false, $bUseCloud = \false, $bShowDescInput = \false, $bShowDelInput = \true, $curFileIds = array(), $curFiles = array(), $jsId, $bFileExists, $menuNew, $menuExist, $delInputName, $descInputName, $maxPreviewWidth, $maxPreviewHeight, $minPreviewWidth, $minPreviewHeight, $maxCount, $inputSize = 50, $arInputs = array(), $inputNameTemplate, $showInfo, $bViewMode;
    private static function Init($showInfo, $inputName, $maxCount = \false)
    {
    }
    /**
     * @param $strInputName
     * @param string $strFileId
     * @param bool|array $showInfo
     * @param array $inputs
     * @return string
     */
    public static function Show($strInputName, $strFileId = "", $showInfo = \false, $inputs = array())
    {
    }
    /**
     * @param array $values
     * @param string $inputNameTemplate
     * @param bool|array $showInfo
     * @param bool $maxCount
     * @param array $inputs
     * @return string
     */
    public static function ShowMultiple(
        $values = array(),
        $inputNameTemplate = "",
        // #IND# will be replaced by autoincrement int (0, 1, 2,..)
        $showInfo = \false,
        $maxCount = \false,
        $inputs = array()
    )
    {
    }
    private static function GetFile($fileId = "")
    {
    }
    private static function DisplayControl($inputs = array())
    {
    }
    private static function DisplayDialogs()
    {
    }
    private static function DisplayFile($arFile = array(), $ind = 0)
    {
    }
    private static function ShowOpenerMenuHtml($id, $data = \false)
    {
    }
    private static function GetInputName($inputName, $type = "")
    {
    }
    private static function IsViewMode()
    {
    }
}