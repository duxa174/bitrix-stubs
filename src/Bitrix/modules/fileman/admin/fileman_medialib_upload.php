<?php

/**
* Bitrix vars
* @var CMain $APPLICATION
* @var CUser $USER
*/
class filemanMedialibUpload
{
    var $post = array();
    var $collectionId = 0;
    var $ext = array();
    function onBeforeUpload(&$package, $upload, $post, $files, &$error)
    {
    }
    function handleFile($hash, $file, &$package, &$upload)
    {
    }
}