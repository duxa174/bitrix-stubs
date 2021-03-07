<?php

class CSmile
{
    const TYPE_ALL = '';
    const TYPE_SMILE = 'S';
    const TYPE_ICON = 'I';
    const PATH_TO_SMILE = "/bitrix/images/main/smiles/";
    const PATH_TO_ICON = "/bitrix/images/main/icons/";
    const CHECK_TYPE_ADD = 1;
    const CHECK_TYPE_UPDATE = 2;
    const GET_ALL_LANGUAGE = \false;
    const IMAGE_SD = 'SD';
    const IMAGE_HD = 'HD';
    const IMAGE_UHD = 'UHD';
    private static function checkFields(&$arFields, $actionType = self::CHECK_TYPE_ADD)
    {
    }
    public static function add($arFields)
    {
    }
    public static function update($id, $arFields)
    {
    }
    public static function delete($id, $removeFile = \true)
    {
    }
    public static function deleteBySet($id, $removeFile = \true)
    {
    }
    public static function deleteByGallery($id, $removeFile = \true)
    {
    }
    public static function getById($id, $lang = \LANGUAGE_ID)
    {
    }
    public static function getList($arParams = array(), $lang = \LANGUAGE_ID)
    {
    }
    /**
     * @deprecated Use CSmile::getBySetId
     */
    public static function getByType($type = self::TYPE_ALL, $setId = \CSmileSet::SET_ID_BY_CONFIG, $lang = \LANGUAGE_ID)
    {
    }
    public static function getBySetId($type = self::TYPE_ALL, $setId = \CSmileSet::SET_ID_BY_CONFIG, $lang = \LANGUAGE_ID)
    {
    }
    public static function getByGalleryId($type = self::TYPE_ALL, $galleryId = \CSmileGallery::GALLERY_DEFAULT, $lang = \LANGUAGE_ID)
    {
    }
    public static function import($arParams)
    {
    }
}
class CSmileGallery
{
    const GALLERY_DEFAULT = 0;
    const GET_ALL_LANGUAGE = \false;
    public static function add($arFields)
    {
    }
    public static function update($id, $arFields)
    {
    }
    public static function delete($id)
    {
    }
    public static function getById($id, $lang = \LANGUAGE_ID)
    {
    }
    public static function getByStringId($stringId, $lang = \LANGUAGE_ID)
    {
    }
    public static function getList($arParams = array(), $lang = \LANGUAGE_ID)
    {
    }
    public static function getListCache($lang = \LANGUAGE_ID)
    {
    }
    public static function getListForForm($lang = \LANGUAGE_ID)
    {
    }
    public static function getDefaultId()
    {
    }
    public static function setDefaultId($id)
    {
    }
    public static function getSmilesWithSets($galleryId = self::GALLERY_DEFAULT)
    {
    }
    public static function installGallery()
    {
    }
    public static function convertGallery()
    {
    }
}
class CSmileSet
{
    const TYPE_SET = 'G';
    const TYPE_GALLERY = 'P';
    const SET_ID_ALL = 0;
    const SET_ID_BY_CONFIG = -1;
    const GET_ALL_LANGUAGE = \false;
    public static function add($arFields)
    {
    }
    public static function update($id, $arFields)
    {
    }
    public static function delete($id)
    {
    }
    public static function getById($id, $lang = \LANGUAGE_ID)
    {
    }
    public static function getByStringId($stringId, $type = self::TYPE_SET, $lang = \LANGUAGE_ID)
    {
    }
    public static function getBySmiles($arSmiles)
    {
    }
    public static function getList($arParams = array(), $lang = \LANGUAGE_ID)
    {
    }
    public static function getListCache($lang = \LANGUAGE_ID)
    {
    }
    /**
     * @deprecated Use CSmileSet::getListForForm
     */
    public static function getFormList($bWithOptionAll = \false, $lang = \LANGUAGE_ID)
    {
    }
    public static function getListForForm($galleryId = 0, $lang = \LANGUAGE_ID)
    {
    }
    /**
     * @deprecated Use CSmileGallery::getDefaultId()
     */
    public static function getConfigSetId()
    {
    }
}