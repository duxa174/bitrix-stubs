<?php

class CIBlockCMLExportPackage extends \CIBlockCMLExport
{
    function StartExport()
    {
    }
    function exportElementFields($arElement, $SECTION_MAP)
    {
    }
    function aliasXmlId($xml_id)
    {
    }
    function preparePropertyValue($arProp, $arValue, &$value, &$bSerialized)
    {
    }
    function ExportProperties(&$PROPERTY_MAP)
    {
    }
    function ExportPropertyDirectory($arProperty)
    {
    }
    function preparePropertiesValues($arElement, $arFilter = array("ACTIVE" => "Y"))
    {
    }
    function getExcludePropertyCode()
    {
    }
}
final class export
{
    protected $packageMode = \false;
    protected $package = \null;
    protected $nextStep = array();
    protected $step = array();
    protected $currentsList = array();
    public function __construct($nextStep, $step)
    {
    }
    /**
     * @param bool $packageMode
     */
    public function setPackageMode($packageMode)
    {
    }
    /**
     * @return bool
     */
    public function isPackageMode()
    {
    }
    /**
     * @param int $package
     */
    public function setPackage($package)
    {
    }
    /**
     * @return null
     */
    public function getPackage()
    {
    }
    /**
     * @return array
     */
    public function getNextStep()
    {
    }
    /**
     * @return array
     */
    public function getStep()
    {
    }
    /**
     * @param $currents
     */
    public function loadCurrents($currents)
    {
    }
    /**
     * @return array
     */
    public function getCurrentsList()
    {
    }
    /**
     * @param $package
     * @param $value
     */
    public function setCurrent($package, $value)
    {
    }
    /**
     * @param int $package
     * @return mixed
     */
    public function getCurrent($package = 0)
    {
    }
    /**
     * @return int|mixed
     */
    public function getSummCurrent()
    {
    }
    /**
     * @param $count
     */
    public function saveCurrent($count)
    {
    }
    /**
     * @param $content
     * @param null $number
     * @return mixed
     */
    public function prepareContents($content, $number = \null)
    {
    }
}
abstract class ExportSchema
{
    protected $export = \null;
    protected $params = array();
    protected $fp = \null;
    protected $start_time = '';
    public function initExport(\CIBlockCMLExport $export, $fp, $start_time, $params, $filter = array())
    {
    }
    /**
     * @return CIBlockCMLExport|null
     */
    public function getExport()
    {
    }
    /**
     * @return array
     */
    public function getParams()
    {
    }
    public abstract function exportMeta();
    public abstract function exportCatalog();
    public abstract function exportOffers();
    public function exportFinished()
    {
    }
}
class ExportSchemaDefault extends \ExportSchema
{
    public function exportMeta()
    {
    }
    public function exportCatalog()
    {
    }
    public function exportOffers()
    {
    }
}
class ExportSchemaPackage extends \ExportSchema
{
    protected function init($package)
    {
    }
    public function exportMeta()
    {
    }
    public function exportCatalog()
    {
    }
    public function exportOffers()
    {
    }
}
class ManagerExport
{
    const STEP_META = 1;
    const STEP_CATALOG = 2;
    const STEP_OFFERS = 3;
    const STEP_FINISHED = 4;
    const STEP_OFFERS_MIXED = 5;
    const SCHAME_DEFAULT = 0;
    const SCHAME_PACKAGE = 1;
    /**
     * @param $typeId
     * @return ExportSchemaDefault|ExportSchemaPackage
     * @throws \Bitrix\Main\NotSupportedException
     */
    public static function createSchema($typeId)
    {
    }
    /**
     * @param $typeId
     * @return CIBlockCMLExport|CIBlockCMLExportPackage
     * @throws \Bitrix\Main\NotSupportedException
     */
    public static function createExport($typeId)
    {
    }
}