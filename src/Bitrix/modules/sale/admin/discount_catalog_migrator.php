<?php

final class DiscountCatalogMigratorLogger extends \Bitrix\Main\Diag\FileExceptionHandlerLog
{
    const MAX_LOG_SIZE = 10000000;
    const DEFAULT_LOG_FILE = "bitrix/modules/sale_migrator.log";
    public function writeToLog($text)
    {
    }
}
final class DiscountCatalogMigrator
{
    const STATUS_FINISH = 2;
    const STATUS_TIME_EXPIRED = 3;
    const STATUS_ERROR = 4;
    const TYPE_GENERAL = 2;
    const TYPE_CUMULATIVE = 3;
    public $countSuccessfulSteps = 0;
    /** @var  DiscountCatalogMigratorLogger */
    protected $logger;
    protected $timeStart = 0;
    /** @var int Seconds */
    protected $maxExecution = 38;
    /** @var \Bitrix\Main\DB\Connection  */
    protected $connection;
    /** @var \Bitrix\Main\DB\SqlHelper */
    protected $sqlHelper;
    protected $isOracle = \false;
    protected $isMysql = \false;
    protected $isMssql = \false;
    private $stepErrors = array();
    public function __construct(array $options = array())
    {
    }
    public function log($data)
    {
    }
    /**
     * @param int $timeStart
     */
    public function setTimeStart($timeStart)
    {
    }
    /**
     * @return int
     */
    public function getTimeStart()
    {
    }
    protected function isTimeExpired()
    {
    }
    /**
     * Check expired by time and throw exception
     * @param bool $force
     * @throws TimeExecutionException
     */
    protected function abortIfNeeded($force = \false)
    {
    }
    protected function setStepFinished($stepName, $description = '')
    {
    }
    protected function isStepFinished($stepName, $description = '')
    {
    }
    protected function resetCounter()
    {
    }
    protected function storeCounter($data)
    {
    }
    protected function getCounter()
    {
    }
    protected function checkRequired()
    {
    }
    public function revert()
    {
    }
    public function run()
    {
    }
    private function processFinallyActions()
    {
    }
    protected function getMaxPriorityFromOldSaleDiscounts()
    {
    }
    protected function moveDiscounts()
    {
    }
    private function migrateDiscounts(\Bitrix\Main\DB\Result $discountIterator)
    {
    }
    protected function moveCumulativeDiscounts()
    {
    }
    /**
     * We are moving cumulative discounts to the end of list with the lowest priority.
     */
    protected function recalculatePriorityForCumulativeDiscounts()
    {
    }
    private function getActionsAndConditionsForCumulativeDiscount(array $catalogRow)
    {
    }
    private function getTypeSumPeriod(array $catalogRow)
    {
    }
    private function getRanges($cumulativeDiscountId)
    {
    }
    protected function moveCoupons()
    {
    }
    protected function fillShortDescription()
    {
    }
    protected function recalculatePriority()
    {
    }
    protected function addBackupPriorityColumn()
    {
    }
    protected function backupPriorityColumn()
    {
    }
    protected function setAsConverted($catalogDiscountId, $saleDiscountId, $typeDiscount = self::TYPE_GENERAL)
    {
    }
    protected function getAllUserGroups()
    {
    }
    protected function getPriceTypesByDiscount($catalogDiscountId)
    {
    }
    protected function moveUserGroupsByDiscount(array $catalogRow, $saleDiscountId, $typeDiscount = self::TYPE_GENERAL)
    {
    }
    protected function createActionAndCondition(array $catalogRow)
    {
    }
    protected function createConditionStructureForGeneralDiscount(array $catalogRow)
    {
    }
    protected function createApplicationStructureForGeneralDiscount(array $catalogRow)
    {
    }
    protected function replaceCondGroup($children)
    {
    }
    protected function rewriteUnpack(array $catalogRow)
    {
    }
    protected function rewriteApplication(array $catalogRow)
    {
    }
}
class TimeExecutionException extends \Bitrix\Main\SystemException
{
}