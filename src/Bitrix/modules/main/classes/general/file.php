<?php

class CFile
{
    const DELETE_NONE = 0x0;
    const DELETE_FILE = 0x1;
    const DELETE_DB = 0x2;
    const DELETE_ALL = 0x3;
    public static function SaveForDB(&$arFields, $field, $strSavePath)
    {
    }
    public static function checkForDb($arFields, $field)
    {
    }
    protected static function transformName($name, $bForceMD5 = \false, $bSkipExt = \false)
    {
    }
    protected static function validateFile($strFileName, $arFile)
    {
    }
    public static function SaveFile($arFile, $strSavePath, $bForceMD5 = \false, $bSkipExt = \false, $dirAdd = '', $checkDuplicates = \true)
    {
    }
    /**
     * Calculates a hash of the file.
     * @param string $file Full path to the file.
     * @param int $size Size of the file.
     * @return string
     */
    protected static function CalculateHash($file, $size)
    {
    }
    /**
     * @param int $size
     * @param string $hash
     * @param int|null $handlerId
     * @return Internal\EO_FileHash|null
     */
    public static function FindDuplicate($size, $hash, $handlerId = \null)
    {
    }
    /**
     * Adds information about a duplicate file.
     * @param int $originalId Original file ID.
     * @param int|null $duplicateId Duplicate file ID (optional if the original and duplicate files are the same).
     */
    public static function AddDuplicate($originalId, $duplicateId = \null)
    {
    }
    public static function DoInsert($arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    protected static function processDuplicates($ID)
    {
    }
    /**
     * @deprecated Use CFile::Delete()
     * @param $ID
     */
    public static function DoDelete($ID)
    {
    }
    public static function CleanCache($ID)
    {
    }
    public static function GetFromCache($fileID)
    {
    }
    public static function GetByID($FILE_ID)
    {
    }
    public static function GetList($arOrder = array(), $arFilter = array())
    {
    }
    public static function GetFileSRC($arFile, $upload_dir = \false, $external = \true)
    {
    }
    public static function GetFileArray($FILE_ID, $upload_dir = \false)
    {
    }
    public static function ConvertFilesToPost($source, &$target, $field = \false)
    {
    }
    public static function CopyFile($FILE_ID, $bRegister = \true, $newPath = "")
    {
    }
    public static function UpdateDesc($ID, $desc)
    {
    }
    public static function UpdateExternalId($ID, $external_id)
    {
    }
    public static function InputFile($strFieldName, $int_field_size, $strImageID, $strImageStorePath = \false, $int_max_file_size = 0, $strFileType = "IMAGE", $field_file = "class=typefile", $description_size = 0, $field_text = "class=typeinput", $field_checkbox = "", $bShowNotes = \true, $bShowFilePath = \true)
    {
    }
    /**
     * @param float $size
     * @param int $precision
     * @return string
     */
    public static function FormatSize($size, $precision = 2)
    {
    }
    public static function GetImageExtensions()
    {
    }
    public static function GetFlashExtensions()
    {
    }
    public static function IsImage($filename, $mime_type = \false)
    {
    }
    public static function CheckImageFile($arFile, $iMaxSize = 0, $iMaxWidth = 0, $iMaxHeight = 0, $access_typies = array(), $bForceMD5 = \false, $bSkipExt = \false)
    {
    }
    public static function CheckFile($arFile, $intMaxSize = 0, $mimeType = \false, $strExt = \false, $bForceMD5 = \false, $bSkipExt = \false)
    {
    }
    public static function ShowFile($iFileID, $max_file_size = 0, $iMaxW = 0, $iMaxH = 0, $bPopup = \false, $sParams = \false, $sPopupTitle = \false, $iSizeWHTTP = 0, $iSizeHHTTP = 0)
    {
    }
    public static function DisableJSFunction($b = \true)
    {
    }
    public static function OutputJSImgShw()
    {
    }
    public static function _GetImgParams($strImage, $iSizeWHTTP = 0, $iSizeHHTTP = 0)
    {
    }
    /**
     * Retuns the path from the root by a file ID.
     *
     * @param int $img_id File ID
     * @return string|null
     */
    public static function GetPath($img_id)
    {
    }
    public static function ShowImage($strImage, $iMaxW = 0, $iMaxH = 0, $sParams = \null, $strImageUrl = "", $bPopup = \false, $sPopupTitle = \false, $iSizeWHTTP = 0, $iSizeHHTTP = 0, $strImageUrlTemplate = "")
    {
    }
    public static function Show2Images($strImage1, $strImage2, $iMaxW = 0, $iMaxH = 0, $sParams = \false, $sPopupTitle = \false, $iSizeWHTTP = 0, $iSizeHHTTP = 0)
    {
    }
    /**
     * Returns an array describing file as if it was $_FILES element.
     *
     * @param string|int $path May contain ID of the file, absolute path, relative path or an url.
     * @param string|bool $mimetype Forces type field of the array
     * @param bool $skipInternal Excludes using ID as $path
     * @param string $external_id
     * @return array|bool|null
     */
    public static function MakeFileArray($path, $mimetype = \false, $skipInternal = \false, $external_id = "")
    {
    }
    public static function GetTempName($dir_name = \false, $file_name = '')
    {
    }
    public static function ChangeSubDir($module_id, $old_subdir, $new_subdir)
    {
    }
    public static function ResizeImage(&$arFile, $arSize, $resizeType = \BX_RESIZE_IMAGE_PROPORTIONAL)
    {
    }
    public static function ResizeImageDeleteCache($arFile)
    {
    }
    public static function ResizeImageGet($file, $arSize, $resizeType = \BX_RESIZE_IMAGE_PROPORTIONAL, $bInitSizes = \false, $arFilters = \false, $bImmediate = \false, $jpgQuality = \false)
    {
    }
    public static function ResizeImageDelete($arImage)
    {
    }
    public static function ImageCreateFromBMP($filename)
    {
    }
    public static function ScaleImage($sourceImageWidth, $sourceImageHeight, $arSize, $resizeType, &$bNeedCreatePicture, &$arSourceSize, &$arDestinationSize)
    {
    }
    public static function IsGD2()
    {
    }
    public static function ResizeImageFile($sourceFile, &$destinationFile, $arSize, $resizeType = \BX_RESIZE_IMAGE_PROPORTIONAL, $arWaterMark = array(), $quality = \false, $arFilters = \false)
    {
    }
    public static function ApplyImageFilter($picture, $arFilter, $bHasAlpha = \true)
    {
    }
    public static function imageconvolution($picture, $matrix, $div = 1, $offset = 0)
    {
    }
    public static function imageconvolution_fix($picture, $matrix, $div = 1, $offset = 0)
    {
    }
    public static function ImageFlipHorizontal($picture)
    {
    }
    public static function ImageHandleOrientation($orientation, $sourceImage)
    {
    }
    /**
     * @param int|array $arFile
     * @param array $arOptions
     * @return bool
     */
    public static function ViewByUser($arFile, $arOptions = array())
    {
    }
    // Params:
    // 	type - text|image
    //	size - big|medium|small|real, for custom resizing can be used 'coefficient', real - only for images
    // 	position - of the watermark on picture can be in one of two available notifications:
    //		 tl|tc|tr|ml|mc|mr|bl|bc|br or topleft|topcenter|topright|centerleft|center|centerright|bottomleft|bottomcenter|bottomright
    public static function Watermark(&$obj, $Params)
    {
    }
    public static function WatermarkText(&$obj, $Params = array())
    {
    }
    // Create watermark from image
    // $Params:
    // 	file - abs path to file
    //	alpha_level - opacity
    // 	position - of the watermark
    public static function WatermarkImage(&$obj, $Params = array())
    {
    }
    public static function ImageRotate($sourceFile, $angle)
    {
    }
    public static function CreateImage($path, $type = \false)
    {
    }
    public static function ExtractImageExif($src)
    {
    }
    public static function ExtractImageIPTC($src)
    {
    }
    public static function NormalizeContentType($contentType)
    {
    }
    public static function GetContentType($path, $bPhysicalName = \false)
    {
    }
    /*
    	This function will protect us from
    	scan the whole file in order to
    	findout size of the xbm image
    	ext/standard/image.c php_getimagetype
    */
    public static function GetImageSize($path, $bPhysicalName = \false, $flashEnabled = \false)
    {
    }
    protected static function ImageTypeSupported($type)
    {
    }
    /**
     * @deprecated
     */
    public static function isEnabledTrackingResizeImage()
    {
    }
    /**
     * @deprecated
     */
    public static function enableTrackingResizeImage()
    {
    }
    /**
     * @deprecated
     */
    public static function disableTrackingResizeImage()
    {
    }
}
/**
 * @deprecated Use CFile
 * Class CAllFile
 */
class CAllFile extends \CFile
{
}