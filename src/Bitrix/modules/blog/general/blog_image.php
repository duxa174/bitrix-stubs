<?php

class CAllBlogImage
{
    const NOT_ATTACHED_IMAGES_LIFETIME = 86400;
    //one day
    /*************** ADD, UPDATE, DELETE *****************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function ImageFixSize($aFile)
    {
    }
    public static function Delete($ID)
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
    }
    public static function AddImageResizeHandler($arParams)
    {
    }
    public static function AddImageCreateHandler($arParams)
    {
    }
    static function ImageResizeHandler(&$arCustomFile, $arParams = \null)
    {
    }
    static function ImageCreateHandler(&$arCustomFile, $arParams = \null)
    {
    }
}