<?php

namespace Bitrix\Lists;

/**
 * Class Importer
 * @package Bitrix\Lists
 *
 *
 * 	$APPLICATION->RestartBuffer();
 *	if (есть права)
 *	{
 *      $id = iblock ID
 *		$datum = \Bitrix\Lists\Importer::export($id);
 *
 *		header("HTTP/1.1 200 OK");
 *		header("Content-Type: application/force-download; name=\"bp-".$id.".prc\"");
 *		header("Content-Transfer-Encoding: binary");
 *		header("Content-Length: ".(Main\Text\String::getBinaryLength($datum)));
 *		header("Content-Disposition: attachment; filename=\"bp-".$id.".prc\"");
 *		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 *		header("Expires: 0");
 *		header("Pragma: public");
 *
 *		echo $datum;
 *	}
 *	die();
 *
 *
 *
 * 	if (is_uploaded_file($_FILES['import_file']['tmp_name']))
 *	{
 *		$f = fopen($_FILES['import_file']['tmp_name'], "rb");
 *		$datum = fread($f, filesize($_FILES['import_file']['tmp_name']));
 *		fclose($f);
 *
 *      \Bitrix\Lists\Importer::import("iblock type", $datum);
 *  }
 *
 */
class Importer
{
    const DIRECTION_EXPORT = 0;
    const DIRECTION_IMPORT = 1;
    private static $listRuLanguage = array('ua', 'by', 'kz');
    /**
     * @param int $iblockId This variable is the id iblock.
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function export($iblockId)
    {
    }
    /**
     * @param string $filePath This variable is the path to the file to get the data.
     * @return array
     */
    public static function getDataProcess($filePath)
    {
    }
    /**
     * @param string $iblockType This variable is the id iblockType.
     * @param string $datum This variable is the encrypted string.
     * @param null $siteId This variable is the id current site.
     * @throws Main\ArgumentNullException
     */
    public static function import($iblockType, $datum, $siteId = null)
    {
    }
    private static function importTemplate($documentType, $bpDescr, $bp)
    {
    }
    private static function createIBlock($iblockType, $iblock, $pictureType, $picture, $siteId = null)
    {
    }
    protected static function getIBlockType()
    {
    }
    protected static function getDocumentType($iblockType, $iblockId)
    {
    }
    /**
     * @param int $iblockId This variable is the id iblock.
     */
    private static function createIBlockRights($iblockId)
    {
    }
    const PATH = "/bitrix/modules/lists/install/bizproc/process/";
    const PATH_USER_PROCESSES = "/bitrix/lists/processes/";
    /**
     * @param string $lang This variable is the value language.
     * @param null $siteId This variable is the id current site.
     * @throws Main\ArgumentNullException
     * @throws Main\IO\FileNotFoundException
     */
    public static function installProcesses($lang, $siteId = null)
    {
    }
    /**
     * @param string $path This variable is the path to the file for the installation process.
     * @param null $siteId This variable is the id current site.
     * @throws Main\ArgumentNullException
     * @throws Main\IO\FileNotFoundException
     */
    public static function installProcess($path, $siteId = null)
    {
    }
    /**
     * @param string $lang This variable is the value language.
     * @param bool $systemProcesses Installing the system processes.
     * @param string $path This variable is the path to the file to get the data.
     * @param array $fileData Array for loading the data.
     * @throws Main\ArgumentNullException
     * @throws Main\IO\FileNotFoundException
     */
    public static function loadDataProcesses($lang, $systemProcesses = true, &$fileData, $path = null)
    {
    }
    private static function getPathToProcesses($lang, $systemProcesses = true)
    {
    }
    protected static function createIBlockType()
    {
    }
    /**
     * @param string $lang This variable is the value language.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\IO\FileNotFoundException
     */
    public static function onAgent($lang)
    {
    }
    public static function migrateList($id)
    {
    }
}