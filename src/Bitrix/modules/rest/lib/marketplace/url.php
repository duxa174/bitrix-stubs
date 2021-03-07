<?php

namespace Bitrix\Rest\Marketplace\Urls;

class Templates
{
    protected $directory = "marketplace/";
    protected $pages = ["index" => "", "list" => "list/", "detail" => "detail/#ID#/", "edit" => "edit/#ID#/"];
    private static $localDir = null;
    public static final function getInstance()
    {
    }
    /**
     * @param $url string
     * @param $from string
     *
     * @return string
     */
    public function addUrlFrom($url, $from) : string
    {
    }
    public function getIndexUrl($from = '')
    {
    }
    public function getDetailUrl($id = null, $from = '')
    {
    }
    public function getEditUrl($id = null)
    {
    }
    public function getDir()
    {
    }
    protected function getReplacedId(string $url, $id = null)
    {
    }
    protected function getReplaced(string $url, $replace = null, $subject = null)
    {
    }
}
class Marketplace extends \Bitrix\Rest\Marketplace\Urls\Templates
{
    protected $directory = "marketplace/";
    protected $pages = ["index" => "", "list" => "installed/", "detail" => "detail/#ID#/", "category" => "category/#ID#/", "placement_view" => "view/#APP#/", "placement" => "placement/#PLACEMENT_ID#/", "booklet" => "booklet/#CODE#/"];
    public function getCategoryUrl($id = null)
    {
    }
    public function getPlacementUrl($placementId, $params)
    {
    }
    public function getBooklet($code = null, $from = '')
    {
    }
    public function getPlacementViewUrl($appCode, $params)
    {
    }
}
class Application extends \Bitrix\Rest\Marketplace\Urls\Templates
{
    protected $directory = "marketplace/app/";
    protected $pages = ["index" => "", "list" => "", "detail" => "#ID#/", "edit" => "edit/#ID#/"];
}
class LocalApplication extends \Bitrix\Rest\Marketplace\Urls\Templates
{
    protected $directory = "marketplace/local/";
    protected $pages = ["index" => "", "list" => "list/", "detail" => "detail/#ID#/", "edit" => "edit/#ID#/"];
}
class Configuration extends \Bitrix\Rest\Marketplace\Urls\Templates
{
    protected $directory = 'marketplace/configuration/';
    protected $pages = ['index' => '', 'placement' => 'placement/#PLACEMENT_CODE#/', 'section' => 'section/#MANIFEST_CODE#/', 'import' => 'import/', 'import_app' => 'import/#APP_CODE#/', 'import_rollback' => 'import_rollback/#APP#/', 'import_manifest' => 'import_#MANIFEST_CODE#/', 'export' => 'export_#MANIFEST_CODE#/', 'export_element' => 'export_#MANIFEST_CODE#/#ITEM_CODE#/'];
    public function getPlacement($code = null, $context = null)
    {
    }
    public function getSection($manifestCode = null)
    {
    }
    public function getImport()
    {
    }
    public function getImportManifest($manifestCode)
    {
    }
    public function getImportApp($code = null)
    {
    }
    public function getImportRollback($appCode)
    {
    }
    public function getExport($manifestCode = null)
    {
    }
    public function getExportElement($manifestCode = null, $itemCode = null)
    {
    }
    protected function getReplaced(string $url, $replace = null, $subject = null)
    {
    }
}
namespace Bitrix\Rest\Marketplace;

class Url
{
    public static function getCategoryUrl($id = null)
    {
    }
    public static function getApplicationDetailUrl($id = null, $from = '')
    {
    }
    public static function getApplicationUrl($id = null)
    {
    }
    /**
     * @see \Bitrix\Rest\Url\DevOps
     * @deprecated
     */
    public static function getApplicationAddUrl()
    {
    }
    public static function getWidgetAddUrl()
    {
    }
    public static function getApplicationPlacementUrl($placementId = null, $params = null)
    {
    }
    public static function getApplicationPlacementViewUrl($appCode = null, $params = null)
    {
    }
    public static function getMarketplaceUrl($from = '')
    {
    }
    public static function getBookletUrl($code = null, $from = '')
    {
    }
    public static function getConfigurationUrl()
    {
    }
    public static function getConfigurationPlacementUrl($code = null, $context = null)
    {
    }
    public static function getConfigurationSectionUrl($manifestCode = null)
    {
    }
    public static function getConfigurationImportUrl()
    {
    }
    public static function getConfigurationImportManifestUrl($code)
    {
    }
    public static function getConfigurationImportAppUrl($code = null)
    {
    }
    public static function getConfigurationImportRollbackUrl($appCode)
    {
    }
    public static function getConfigurationExportUrl($manifestCode = null)
    {
    }
    public static function getConfigurationExportElementUrl($manifestCode = null, $itemCode = null)
    {
    }
}