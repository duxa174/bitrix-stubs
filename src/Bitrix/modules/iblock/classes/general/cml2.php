<?php

class CIBlockCMLImport
{
    const IBLOCK_CACHE_FREEZE = 'D';
    const IBLOCK_CACHE_FINAL = 'F';
    const IBLOCK_CACHE_HIT = 'H';
    const IBLOCK_CACHE_NORMAL = 'N';
    var $LAST_ERROR = "";
    /** @var bool|array */
    var $next_step = \false;
    var $files_dir = \false;
    var $use_offers = \true;
    var $force_offers = \false;
    var $use_iblock_type_id = \false;
    var $use_crc = \true;
    var $preview = \false;
    var $detail = \false;
    var $iblock_resize = \false;
    /** @var CIBlockXMLFile $_xml_file */
    var $_xml_file = \null;
    var $bCatalog = \false;
    var $isCatalogIblock = \false;
    var $PROPERTY_MAP = array();
    var $SECTION_MAP = array();
    var $PRICES_MAP = array();
    var $arProperties = array();
    var $arSectionCache = array();
    var $arElementCache = array();
    var $arEnumCache = array();
    var $arCurrencyCache = array();
    var $arTaxCache = array();
    var $mess = array();
    var $arTempFiles = array();
    var $arFileDescriptionsMap = array();
    var $arElementFilesId = array();
    var $arElementFiles = array();
    var $arLinkedProps = \false;
    var $translit_on_add = \false;
    var $translit_on_update = \false;
    var $translit_params = array();
    var $skip_root_section = \false;
    var $disable_change_price_name = \false;
    protected $activeStores = array();
    protected $iblockCacheMode = self::IBLOCK_CACHE_NORMAL;
    private $bitrix24mode = \null;
    protected $currentUserId = \null;
    function InitEx(&$next_step, $params)
    {
    }
    function Init(&$next_step, $files_dir = \false, $use_crc = \true, $preview = \false, $detail = \false, $use_offers = \false, $use_iblock_type_id = \false, $table_name = "b_xml_tree")
    {
    }
    function CheckIfFileIsCML($file_name)
    {
    }
    function DropTemporaryTables()
    {
    }
    function CreateTemporaryTables()
    {
    }
    function IndexTemporaryTables()
    {
    }
    function ReadXMLToDatabase($fp, &$NS, $time_limit = 0, $read_size = 1024)
    {
    }
    public function GetRoot()
    {
    }
    function StartSession($sess_id)
    {
    }
    function GetSessionRoot()
    {
    }
    function EndSession()
    {
    }
    public function GetFilePosition()
    {
    }
    function CleanTempFiles()
    {
    }
    function MakeFileArray($file, $fields = array())
    {
    }
    function URLEncode($str)
    {
    }
    function CheckFileByName($file, $fields = \null)
    {
    }
    function ResizePicture($file, $resize, $primaryField, $secondaryField = "")
    {
    }
    function GetIBlockByXML_ID($XML_ID)
    {
    }
    function GetSectionByXML_ID($IBLOCK_ID, $XML_ID)
    {
    }
    function GetElementByXML_ID($IBLOCK_ID, $XML_ID)
    {
    }
    function GetEnumByXML_ID($PROP_ID, $XML_ID)
    {
    }
    function GetSectionEnumByXML_ID($FIELD_ID, $XML_ID)
    {
    }
    function GetPropertyByXML_ID($IBLOCK_ID, $XML_ID)
    {
    }
    function CheckProperty($IBLOCK_ID, $code, $xml_name)
    {
    }
    function CheckTax($title, $rate)
    {
    }
    function CheckCurrency($currency)
    {
    }
    function CheckIBlockType($ID)
    {
    }
    function CheckSites($arSite)
    {
    }
    function ImportMetaData($xml_root_id, $IBLOCK_TYPE, $IBLOCK_LID, $bUpdateIBlock = \true)
    {
    }
    function ImportSections()
    {
    }
    function DeactivateSections($action)
    {
    }
    function SectionsResort()
    {
    }
    function ImportPrices($XML_PRICES_PARENT, $IBLOCK_ID, $IBLOCK_LID)
    {
    }
    function ImportBaseUnits($XML_BASE_UNITS_PARENT)
    {
    }
    function ImportStores($XML_STORES_PARENT)
    {
    }
    function ImportStoresAmount($arElement, $elementID, &$counter)
    {
    }
    function ImportSectionsProperties($XML_PARENT, $IBLOCK_ID)
    {
    }
    function ImportProperties($XML_PROPERTIES_PARENT, $IBLOCK_ID)
    {
    }
    function ImportPropertyEnum($arProperty, $arEnumXmlNodes)
    {
    }
    /**
     * @param array $arProperty
     * @param array $arEnumXmlNodes
     * @return true|string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    function ImportPropertyDirectory($arProperty, $arEnumXmlNodes)
    {
    }
    function ImportSectionPropertyEnum($FIELD_ID, $arEnumXmlNodes)
    {
    }
    function ImportSectionProperties($XML_SECTION_PROPERTIES, $IBLOCK_ID, $SECTION_ID = 0)
    {
    }
    function ReadCatalogData(&$SECTION_MAP, &$PRICES_MAP)
    {
    }
    function GetElementCRC($arElement)
    {
    }
    function CheckManufacturer($xml)
    {
    }
    /**
     * @return bool
     */
    public function GetTotalCountElementsForImport()
    {
    }
    /**
     * @param int $start_time
     * @param int $interval
     * @return array
     */
    public function ImportElements($start_time, $interval)
    {
    }
    function ImportProductSets()
    {
    }
    function ChangeOffersStatus($ELEMENT_ID, $STATUS = "Y", $bWF = \true)
    {
    }
    function safeTranslit($str)
    {
    }
    /**
     * @param string $str
     * @return float
     */
    public function ToFloat($str)
    {
    }
    /**
     * @param string $value
     * @return float|string
     */
    public function ToFloatEmpty($value)
    {
    }
    /**
     * @param string $str
     * @return int
     */
    public function ToInt($str)
    {
    }
    function Unserialize($string)
    {
    }
    function __unserialize_callback($match)
    {
    }
    function convertBaseUnitFromXmlToPropertyValue($xmlValue)
    {
    }
    function CheckIfElementIsActive($arXMLElement)
    {
    }
    function ImportElement($arXMLElement, &$counter, $bWF, $arParent)
    {
    }
    function ImportElementPrices($arXMLElement, &$counter, $arParent = \false)
    {
    }
    function fillDefaultPropertyValues(&$arElement, $iblockProperties)
    {
    }
    function ConvertDiscounts($arDiscounts)
    {
    }
    /**
     * @param int $PRODUCT_ID
     * @param array $arPrices
     * @param bool|array $arDiscounts
     */
    function SetProductPrice($PRODUCT_ID, $arPrices, $arDiscounts = \false)
    {
    }
    function ImportSection($xml_tree_id, $IBLOCK_ID, $parent_section_id)
    {
    }
    function CheckElementCode($IBLOCK_ID, $ID, $CODE)
    {
    }
    function CheckSectionCode($IBLOCK_ID, $ID, $CODE)
    {
    }
    function DeactivateElement($action, $start_time, $interval)
    {
    }
    /**
     * @param array $counters
     * @return int
     */
    public function updateCounters(array $counters)
    {
    }
    /**
     * @param bool $description
     * @return array
     */
    public static function getIblockCacheModeList($description = \false)
    {
    }
    /**
     * @return void
     */
    public function freezeIblockCache()
    {
    }
    /**
     * @return void
     */
    public function unFreezeIblockCache()
    {
    }
    /**
     * @return void
     */
    public function clearIblockCacheOnHit()
    {
    }
    /**
     * @return void
     */
    public function clearIblockCacheAfterFinal()
    {
    }
    /**
     * @return string
     */
    public function getIblockCacheMode()
    {
    }
    /**
     * @return bool
     */
    public function isIblockCacheModeNormal()
    {
    }
    /**
     * @return bool
     */
    public function isIblockCacheModeHit()
    {
    }
    /**
     * @return bool
     */
    public function isIblockCacheModeFinal()
    {
    }
    /**
     * @return bool
     */
    public function isIblockCacheModeFreeze()
    {
    }
    /**
     * Returns a external codes list of warehouses.
     *
     * @return array
     */
    protected function getStoreList()
    {
    }
    /**
     * Returns a external codes list of active warehouses.
     *
     * @return array
     */
    protected function getActiveStores()
    {
    }
    /**
     * Count total product quantity.
     *
     * @param array $stores
     * @return int|float
     */
    protected function countTotalQuantity(array $stores)
    {
    }
}
class CIBlockCMLExport
{
    var $fp = \null;
    var $IBLOCK_ID = \false;
    var $bExtended = \false;
    var $work_dir = \false;
    var $file_dir = \false;
    /** @var bool|array */
    var $next_step = \false;
    var $arIBlock = \false;
    var $prices = \false;
    var $only_price = \false;
    var $download_files = \true;
    var $export_as_url = \false;
    var $PRODUCT_IBLOCK_ID = \false;
    function Init($fp, $IBLOCK_ID, $next_step, $bExtended = \false, $work_dir = \false, $file_dir = \false, $bCheckPermissions = \true, $PRODUCT_IBLOCK_ID = \false)
    {
    }
    function DoNotDownloadCloudFiles()
    {
    }
    function NotCatalog()
    {
    }
    function ExportFileAsURL()
    {
    }
    function GetIBlockXML_ID($IBLOCK_ID, $XML_ID = \false)
    {
    }
    function GetSectionXML_ID($IBLOCK_ID, $SECTION_ID, $XML_ID = \false)
    {
    }
    function GetElementXML_ID($IBLOCK_ID, $ELEMENT_ID, $XML_ID = \false)
    {
    }
    function GetPropertyXML_ID($IBLOCK_ID, $NAME, $PROPERTY_ID, $XML_ID)
    {
    }
    function StartExport()
    {
    }
    function ExportFile($FILE_ID)
    {
    }
    function ExportEnum($arUserField, $value)
    {
    }
    function formatXMLNode($level, $tagName, $value)
    {
    }
    function StartExportMetadata()
    {
    }
    function ExportSectionsProperties($arUserFields)
    {
    }
    function ExportSections(&$SECTION_MAP, $start_time, $INTERVAL, $FILTER = "", $PROPERTY_MAP = array())
    {
    }
    function ExportProperties(&$PROPERTY_MAP)
    {
    }
    function ExportSmartFilter($level, $iblockId, $sectionId = \false, $PROPERTY_MAP, $productIblockId = 0)
    {
    }
    function ExportPrices()
    {
    }
    function EndExportMetadata()
    {
    }
    function StartExportCatalog($with_metadata = \true, $changes_only = \false)
    {
    }
    function ExportPropertyValue($xml_id, $value, $type = \null)
    {
    }
    function exportInheritedTemplates($level, \Bitrix\Iblock\InheritedProperty\BaseTemplate $template)
    {
    }
    /**
     * @param array $arElement
     * @param array $arFilter
     * @return array
     */
    function preparePropertiesValues($arElement, $arFilter = array("ACTIVE" => "Y"))
    {
    }
    function exportElementProperties($arElement, $PROPERTY_MAP)
    {
    }
    function preparePropertyValue($arProp, $arValue, &$value, &$bSerialized)
    {
    }
    function exportElementFields($arElement, $SECTION_MAP)
    {
    }
    function aliasXmlId($xml_id)
    {
    }
    function exportElement($arElement, $SECTION_MAP, $PROPERTY_MAP)
    {
    }
    function ExportElements($PROPERTY_MAP, $SECTION_MAP, $start_time, $INTERVAL, $counter_limit = 0, $arElementFilter = \false)
    {
    }
    function EndExportCatalog()
    {
    }
    function ExportProductSet($elementId, $elementXml)
    {
    }
    function ExportProductSets()
    {
    }
    function EndExport()
    {
    }
}