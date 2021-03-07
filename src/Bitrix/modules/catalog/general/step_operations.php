<?php

class CCatalogStepOperations
{
    const DEFAULT_SESSION_PREFIX = 'CC';
    protected $sessID = '';
    protected $errorCounter = 0;
    protected $errors = array();
    protected $stepErrors = array();
    protected $maxExecutionTime = 0;
    protected $maxOperationCounter = 0;
    protected $startOperationTime = 0;
    protected $lastID = 0;
    protected $allCounter = 0;
    protected $allOperationCounter = 0;
    protected $finishOperation = \false;
    protected $defaultProgressTemplate = '#PROGRESS_BAR#';
    protected $progressTemplate = '#PROGRESS_BAR#';
    protected $errorTemplate = '';
    protected $params = \null;
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function __destruct()
    {
    }
    public function setParams($params)
    {
    }
    public function initStep($allCount, $allOperationCount, $lastID)
    {
    }
    public function saveStep()
    {
    }
    public function startOperation()
    {
    }
    public function finalOperation()
    {
    }
    public function runOperation()
    {
    }
    public function run()
    {
    }
    public function setProgressTemplates($template)
    {
    }
    public function getMessage()
    {
    }
    public static function getAllCounter()
    {
    }
    public static function getDefaultExecutionTime()
    {
    }
    protected function setLastId($lastId)
    {
    }
    protected function isStopOperation()
    {
    }
    protected function setFinishOperation($finish)
    {
    }
    protected function calculateNextOperationCounter()
    {
    }
    protected function addError($error)
    {
    }
}
class CCatalogProductSetAvailable extends \CCatalogStepOperations
{
    const SESSION_PREFIX = 'PSA';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function runOperation()
    {
    }
    public static function getAllCounter()
    {
    }
}
class CCatalogProductAvailable extends \CCatalogStepOperations
{
    const SESSION_PREFIX = 'PA';
    protected $config = array();
    protected $preloadTooLong = \false;
    protected $iblockData = \null;
    protected $productList = array();
    protected $currentList = array();
    protected $currentIdsList = array();
    private $offersMap = array();
    private $offersIds = array();
    private $prices = array();
    private $calculatePrices = array();
    private $existPriceIds = array();
    private $existIdsByType = array();
    private $measureRatios = array();
    private $currencyReference = array();
    private $measureIds = ['DEFAULT' => \null, 'BASE' => \null];
    /** @deprecated  */
    protected $useSets = \false;
    /** @deprecated  */
    protected $separateSkuMode = \false;
    /** @deprecated  */
    protected $extendedMode = \false;
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function isUseSets()
    {
    }
    public function isSeparateSkuMode()
    {
    }
    public function runOperation()
    {
    }
    public function getMessage()
    {
    }
    public static function getIblockList($iblockId)
    {
    }
    protected function checkPreloadTime()
    {
    }
    protected function calculateNextOperationCounter()
    {
    }
    protected function initConfig()
    {
    }
    protected function setOldConfig()
    {
    }
    protected function initReferences()
    {
    }
    private function initCurrencyReference()
    {
    }
    private function initMeasures()
    {
    }
    /** @deprecated */
    protected function runOperationFullCatalog()
    {
    }
    /** @deprecated */
    protected function runOperationProductIblock()
    {
    }
    /** @deprected */
    protected function runOperationCatalog()
    {
    }
    /** @deprected */
    protected function runOperationOfferIblock()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     *
     * @param array $product
     * @return void
     */
    protected function runExtendedOperation(array $product)
    {
    }
    protected function getProductIterator($filter, $select)
    {
    }
    protected static function getIblockCounter($iblockId)
    {
    }
    private function loadSkuData()
    {
    }
    private function loadProductPrices()
    {
    }
    private function loadSkuPrices()
    {
    }
    private function loadOffersData()
    {
    }
    private function loadProductSets()
    {
    }
    private function loadMeasureRatios()
    {
    }
    private function updateProductData()
    {
    }
    private function updateProductPrices($id, array $product)
    {
    }
    private function updateSkuPrices($id, array $product)
    {
    }
    private function updateMeasureRatios($id, array $product)
    {
    }
    private function getFullCatalogItem(array $product)
    {
    }
    private function getProductIblockItem(array $product)
    {
    }
    private function getCatalogItem(array $product)
    {
    }
    private function getOfferIblockItem(array $product)
    {
    }
}
class CCatalogProductSettings extends \CCatalogProductAvailable
{
    const SESSION_PREFIX = 'PS';
    const SETS_ID = 'SETS';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public function runOperation()
    {
    }
    public function getMessage()
    {
    }
    public static function getCatalogList()
    {
    }
    protected function initConfig()
    {
    }
    protected function runOperationSets()
    {
    }
    protected static function addSetDescription(array &$iblockList)
    {
    }
    protected static function getProductFilter($iblockFilter = \false)
    {
    }
}
class CCatalogIblockReindex extends \CCatalogProductAvailable
{
    const NOTIFY_ID = 'CATALOG_REINDEX';
    public function __construct($sessID, $maxExecutionTime, $maxOperationCounter)
    {
    }
    public static function removeNotify()
    {
    }
    public static function showNotify()
    {
    }
    public static function execAgent()
    {
    }
    protected function initConfig()
    {
    }
    protected function setOldConfig()
    {
    }
    /**
     * @deprecated deprecated since catalog 17.6.0
     *
     * @param array $product
     * @return void
     * @throws Exception
     * @throws Main\ArgumentException
     */
    protected function runExtendedOperation(array $product)
    {
    }
}