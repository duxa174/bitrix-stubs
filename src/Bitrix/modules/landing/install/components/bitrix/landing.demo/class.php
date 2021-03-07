<?php

class LandingSiteDemoComponent extends \LandingBaseComponent
{
    /**
     * Count items per page.
     */
    const COUNT_PER_PAGE = 48;
    /**
     * Days count during which templates marked as 'new'.
     */
    const LABEL_NEW_PERIOD_DAY = 12;
    /**
     * Tag for managed cache.
     */
    const DEMO_TAG = 'landing_demo';
    /**
     * Path with demo templates data for site.
     */
    const DEMO_DIR_SITE = 'site';
    /**
     * Path with demo templates data for page.
     */
    const DEMO_DIR_PAGE = 'page';
    /**
     * Remote repository url.
     */
    const REMOTE_REPOSITORY_URL = 'https://preview.bitrix24.site/rest/1/gvsn3ngrn7vb4t1m/';
    /**
     * Steps constant for catalog import.
     */
    const STEP_STATUS_ERROR = 'ERROR';
    const STEP_STATUS_CONTINUE = 'CONTINUE';
    const STEP_STATUS_COMPLETE = 'COMPLETE';
    const STEP_ID_HIGHLOADBLOCK = 'CREATE_HIGHLOADBLOCK';
    const STEP_ID_PREPARE_CRM_CATALOG = 'CRM_CATALOG';
    const STEP_ID_XML_IMPORT = 'XML_IMPORT';
    const STEP_ID_ADDITIONAL_UPDATE = 'ADDITIONAL';
    const STEP_ID_REINDEX = 'REINDEX';
    const STEP_ID_CATALOG_REINDEX = 'CATALOG_REINDEX';
    const STEP_ID_FINAL = 'FINAL';
    private $catalogStepList = [self::STEP_ID_HIGHLOADBLOCK, self::STEP_ID_PREPARE_CRM_CATALOG, self::STEP_ID_XML_IMPORT, self::STEP_ID_ADDITIONAL_UPDATE, self::STEP_ID_CATALOG_REINDEX, self::STEP_ID_FINAL];
    protected const DEMO_TEMPLATE_FIRST = 'empty';
    protected const DEMO_NFR_APP = 'bitrix.partnerlanding';
    protected const DEMO_SORT_OFFSET = 100;
    protected const DEMO_SORT_SCOPE_FIRST = 0;
    protected const DEMO_SORT_SCOPE_NEW = 1;
    protected const DEMO_SORT_SCOPE_HOLIDAYS = 2;
    protected const DEMO_SORT_SCOPE_REST = 3;
    protected const DEMO_SORT_SCOPE_LOCAL = 5;
    protected const DEMO_SORT_SCOPE_LAST = 6;
    protected const DEMO_HOLIDAYS = ["holidays/holiday.blackfriday" => [11, 01, 11, 30], "holidays/holiday.easter1" => [2, 21, 4, 4], "holidays/holiday.easter2" => [3, 21, 5, 2], "holidays/holiday.halloween" => [10, 10, 10, 31], "holidays/holiday.new-year" => [12, 8, 12, 31], "holidays/holiday.thanksgiving" => [11, 01, 11, 30], "holidays/holiday.valentine1" => [1, 24, 2, 14], "holidays/holiday.valentine2" => [1, 24, 2, 14], "holidays/holiday.valentine3" => [1, 24, 2, 14], "holidays/holiday.xmas" => [12, 1, 12, 25], "holidays/holiday.8march1" => [2, 15, 3, 8], "holidays/holiday.8march2" => [2, 15, 3, 8], "holidays/holiday.8march3" => [2, 15, 3, 8], "holidays/holiday.23february.1" => [2, 2, 2, 23], "holidays/holiday.23february.2" => [2, 2, 2, 23], "holidays/holiday.23february.3" => [2, 2, 2, 23], "holidays/holiday.april-fool" => [3, 11, 4, 1]];
    /**
     * Relative url for new site.
     * @var string
     */
    protected $urlTpl = '/#rand#/';
    /**
     * Landing old ids for version 3.
     * @var array
     */
    protected $oldIds = [];
    /**
     * Predefined additional fields.
     * @var array
     */
    protected $presetAdditionalFields = [];
    /**
     * Gets remote templates from repository.
     * @var bool
     */
    protected $getRemoteTemplates = \false;
    /**
     * Different layouts for pages.
     * @var array
     */
    protected $pagesLayouts = [];
    /**
     * Redirect to the landing.
     * @param int $landingId Landing id.
     * @return boolean If error.
     */
    protected function redirectToLanding($landingId)
    {
    }
    /**
     * Preset additional fields before create.
     * @param array $fields Additional fields.
     * @return void
     */
    public function setAdditionalFields(array $fields)
    {
    }
    /**
     * Prepare additional fields for page.
     * @param array $data Data array.
     * @param bool $request Get data from request.
     * @return array
     */
    protected function prepareAdditionalFieldsPage($data, $request = \true)
    {
    }
    /**
     * Prepare additional fields for site.
     * @param array $data Data array.
     * @return array
     */
    protected function prepareAdditionalFieldsSite($data)
    {
    }
    /**
     * Prepare array of additional data.
     * @param array $data Data item array.
     * @param bool $request Get data from request.
     * @return array
     */
    protected function prepareAdditionalFields($data, $request = \true)
    {
    }
    /**
     * Prepare array of main data.
     * @param array $data Data item array.
     * @param bool $request Get data from request.
     * @return array
     */
    protected function prepareMainFields(array $data, $request = \true)
    {
    }
    /**
     * Get template manifest.
     * @param int $id Template id.
     * @return array
     */
    protected function getTemplateManifest($id)
    {
    }
    /**
     * Create one page in site.
     * @param int $siteId Site id.
     * @param string $code Page code.
     * @param \Bitrix\Landing\Landing $landing Landing instance after create.
     * @return boolean|int Id of new landing.
     */
    public function createPage($siteId, $code, &$landing = \null)
    {
    }
    /**
     * Get domain id for new site.
     * @deprecated since 20.0.0
     * @return int|string
     */
    protected function getDomainId()
    {
    }
    /**
     * Create demo page for preview.
     * @param string $code Code of page.
     * @param array $template Template data.
     * @return string
     */
    public function getUrlPreview($code, $template = []) : string
    {
    }
    /**
     * Binding site if, if binding params specified.
     * @param int $siteId Site id.
     * @return void
     */
    protected function bindingSite($siteId)
    {
    }
    /**
     * Create site or page by template.
     * @param string $code Demo site code.
     * @param mixed $additional Data from form.
     * @return boolean
     */
    public function actionSelect($code, $additional = \null)
    {
    }
    /**
     * Returns true, if allow create store data.
     *
     * @param array $demo
     * @return bool
     */
    private static function checkAllowDemoData(array $demo)
    {
    }
    /**
     * Create store step.
     * @param string $code Step code.
     * @param null $additional
     * @return array
     */
    private function stepperStore($code, $additional = \null)
    {
    }
    /**
     * Final create store step.
     * @param string $code Step code.
     * @param null $additional
     * @return string
     */
    private function stepperStoreFinalUrl($code, $additional = \null)
    {
    }
    /**
     * Localize the array.
     * @param array $item Item for localization
     * @param array $lang Localization array.
     * @return array
     */
    protected function translate(array $item, $lang)
    {
    }
    /**
     * Gets demo templates.
     * @param string $subDir Subdir for data dir.
     * @param string $code Item code.
     * @return array
     */
    protected function getDemo($subDir, $code = \null)
    {
    }
    protected static function getExtDemoPerms() : array
    {
    }
    protected static function applyExtDemoPerms(array $data) : array
    {
    }
    public static function isDemoNew(int $timestamp) : bool
    {
    }
    protected static function matchFullSort(string $code, int $scope, int $timestamp = \null, int $sort = 0) : int
    {
    }
    /**
     * Return true if NOW in period
     *
     * @param $dateFrom
     * @param $dateTo
     * @return bool
     */
    public static function checkActivePeriod(array $params) : bool
    {
    }
    /**
     * Gets demo site templates.
     * @return array
     */
    public function getDemoSite()
    {
    }
    /**
     * Gets demo page templates.
     * @param string $code Item code.
     * @return array
     */
    public function getDemoPage($code = \null)
    {
    }
    /**
     * Checking site or page activity depending on portal zone
     * Format:
     * $zones['ONLY_IN'] - show site only in these zones
     * $zones['EXCEPT'] - not show site, if zone in this list
     * @param array $zones Zones array.
     * @return bool
     */
    public static function checkActive($zones = array()) : bool
    {
    }
    /**
     * Create some highloadblocks.
     * @return void
     */
    public static function createHLblocks()
    {
    }
    /**
     * Create catalog step.
     * @param string $xmlcode Step code.
     * @return array
     */
    private function createCatalogStep($xmlcode)
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
    private static function changeProductPropertyXmlId(int $iblockId) : void
    {
    }
    private static function changeOfferPropertyXmlId(int $iblockId) : void
    {
    }
    private static function changePropertyXmlId(int $iblockId, array $list) : void
    {
    }
    /**
     * Checking iblock by xml id.
     * @param int $iblockId Iblock id.
     * @param string $xmlId External code.
     * @return void
     */
    private static function checkIblockXmlId($iblockId, $xmlId)
    {
    }
    /**
     * Prepare crm iblocks XML_ID for xml import.
     * @return void
     */
    private function transferCrmCatalogXmlId()
    {
    }
    /**
     * Set base currency for xml.
     * @return void
     */
    private function setXmlBaseCurrency()
    {
    }
    /**
     * Xml import with internal steps.
     * @return array
     */
    private function importXmlFile()
    {
    }
    /**
     * Internal updates.
     * @param int $parentIblock Parent iblock id.
     * @param int $offerIblock Offers iblock id.
     * @return void
     */
    private function updateImportedIblocks($parentIblock, $offerIblock)
    {
    }
    /**
     * Reindex catalog.
     * @param int $parentIblock Parent iblock id.
     * @param int $offerIblock Offers iblock id.
     * @return void
     */
    private function reindexCatalog($parentIblock, $offerIblock)
    {
    }
    /**
     * Init steps in session.
     * @return void
     */
    private function initStepStorage()
    {
    }
    /**
     * Gets current step from session.
     * @return mixed
     */
    private function getCurrentStep()
    {
    }
    /**
     * Set current step to session.
     * @param mixed $step Step.
     * @return void
     */
    private function setCurrentStep($step)
    {
    }
    /**
     * Go to the next step.
     * @return void
     */
    private function nextStep()
    {
    }
    /**
     * Reset step params.
     * @return void
     */
    private function resetStepParameters()
    {
    }
    /**
     * Get current xml.
     * @return mixed
     */
    private function getCurrentXml()
    {
    }
    /**
     * Gets next xml.
     * @return mixed
     */
    private function getNextXml()
    {
    }
    /**
     * Set current xml.
     * @param mixed $xmlId External code.
     * @return void
     */
    private function setCurrentXml($xmlId)
    {
    }
    /*
     * Gets current xml in progress.
     * @return mixed
     */
    private function getCurrentXmlProgress()
    {
    }
    /**
     * Gets xml of iblock id from session.
     * @param string $xmlId External code.
     * @return mixed
     */
    private function getXmlIblockId($xmlId)
    {
    }
    /**
     * Set xml of iblock id to session.
     * @param string $xmlId External code.
     * @param int $iblockId Iblock id.
     * @return void
     */
    private function setXmlIblockId($xmlId, $iblockId)
    {
    }
    /**
     * Gets result message for different steps.
     * @param string $xmlId External code.
     * @param bool $complete Complete step.
     * @return string
     */
    private function importXmlFileResultMessage($xmlId, $complete = \true)
    {
    }
    /**
     * Clear session vars.
     * @return void.
     */
    private function destroyStepStorage()
    {
    }
    /**
     * Gets parent section id for iblock id, if exists.
     * @param int $iblockId Iblock id.
     * @param string|null $xmlId Parent section external code.
     * @return int|null
     */
    private function getParentCatalogSectionId($iblockId, $xmlId = \null)
    {
    }
}