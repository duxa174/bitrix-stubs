<?php

class CPhotoUploader
{
    var $arParams;
    var $arResult;
    var $arWatermark = array();
    var $post;
    function __construct(&$arParams, $arResult)
    {
    }
    /**
     * Creates new section in iblock
     * @param $arParams
     * @param $arResult
     * @param $name
     * @return bool|int
     */
    public static function createAlbum($arParams, $arResult, &$name)
    {
    }
    /**
     * Adds new properties in block
     * @param $arParams
     * @return bool
     */
    public static function adjustIBlock($arParams)
    {
    }
    function onBeforeUpload(&$package, &$upload, $post, $files, &$error)
    {
    }
    function onAfterUpload($data, $post, $files)
    {
    }
    function handleFile($hash, $photo, &$package, &$upload, &$error)
    {
    }
}
function getImageUploaderId($str = 'bx_img_upl_')
{
}
// Called once before all uploads
function onBeforeUpload($Params)
{
}
// Called once after uploads
function onAfterUpload($Params)
{
}
// Used to get album and create new album (only once)
function GetAlbumId($Params)
{
}
// Called for every file which loaded by Java/ActiveX/Flash or simple uploader
function handleFile($Info, $arFiles, $Params)
{
}
function simpleUploadHandler($arParams, $arResult = array())
{
}
function _get_size($v)
{
}