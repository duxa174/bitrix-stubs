<?php

final class CIBlockXmlImport
{
    const ACTION_NOTHING = 'N';
    const ACTION_DEACTIVATE = 'A';
    const ACTION_REMOVE = 'D';
    const STEP_INIT_IMPORT_TABLES = 'INIT_IMPORT_TABLES';
    const STEP_READ_XML = 'READ_XML';
    const STEP_INDEX_IMPORT_TABLES = 'INDEX_IMPORT_TABLES';
    const STEP_IMPORT_METADATA = 'IMPORT_METADATA';
    const STEP_IMPORT_SECTIONS = 'IMPORT_SECTIONS';
    const STEP_MISSING_SECTIONS = 'MISSING_SECTIONS';
    const STEP_RESORT_SECTIONS = 'RESORT_SECTIONS';
    const STEP_IMPORT_ELEMENTS = 'IMPORT_ELEMENTS';
    const STEP_MISSING_ELEMENTS = 'MISSING_ELEMENTS';
    const STEP_IMPORT_PRODUCT_BUNDLES = 'IMPORT_PRODUCT_BUNDLES';
    const STEP_FINAL = 'FINAL';
    const RESULT_TYPE_SUCCESS = 0;
    const RESULT_TYPE_ERROR = 1;
    const TRANSLITERATION_ON_ADD = 0x1;
    const TRANSLITERATION_ON_UPDATE = 0x2;
    const SESSION_STORAGE_ID = 'BX_CML2_IMPORT';
    /** @var CIBlockCMLImport importer */
    private $xmlImport = \null;
    private $fileHandler = \null;
    private $fileParameters = ['PATH' => '', 'ABSOLUTE_PATH' => '', 'FILES_DIRECTORY' => '', 'SIZE' => 0];
    private $parameters = [];
    private $config = [];
    private $stepList = [self::STEP_INIT_IMPORT_TABLES, self::STEP_READ_XML, self::STEP_INDEX_IMPORT_TABLES, self::STEP_IMPORT_METADATA, self::STEP_IMPORT_SECTIONS, self::STEP_MISSING_SECTIONS, self::STEP_RESORT_SECTIONS, self::STEP_IMPORT_ELEMENTS, self::STEP_IMPORT_PRODUCT_BUNDLES, self::STEP_MISSING_ELEMENTS, self::STEP_FINAL];
    private $stepId = \null;
    private $stepParameters = \null;
    private $final = \false;
    private $iblockId = \null;
    private $message = '';
    private $progressCounter = [];
    private $errors = [];
    private $startTime = \null;
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    public function init(array $parameters, array $config = [])
    {
    }
    private function initSessionStorage()
    {
    }
    private function initStepParameters()
    {
    }
    /**
     * @return void
     */
    private function internalInit()
    {
    }
    /**
     * @return bool
     */
    public function isFinal()
    {
    }
    /**
     * @return void
     */
    public function run()
    {
    }
    /**
     * @return array
     */
    public function getStepResult()
    {
    }
    /**
     * @return null|int
     */
    public function getIblockId()
    {
    }
    /**
     * @return bool
     */
    public function isSuccess()
    {
    }
    /**
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * @return void
     */
    public function clearErrors()
    {
    }
    /**
     * @param string $error
     * @return void
     */
    private function addError($error)
    {
    }
    /**
     * @param array $parameters
     * @return void
     */
    private function setParameters(array $parameters)
    {
    }
    /**
     * @param array &$parameters
     * @return void
     */
    private function prepareParameters(array &$parameters)
    {
    }
    /**
     * @param string $name
     * @return mixed|null
     */
    private function getParameter($name)
    {
    }
    /**
     * @return array
     */
    private function getDefaultParameters()
    {
    }
    /**
     * @param array $config
     * @return void
     */
    private function setConfig(array $config)
    {
    }
    /**
     * @param array &$config
     * @return void
     */
    private function prepareConfig(array &$config)
    {
    }
    /**
     * @return array
     */
    private function getConfig()
    {
    }
    /**
     * @param string $field
     * @return mixed|null
     */
    private function getConfigFieldValue($field)
    {
    }
    /**
     * @return array
     */
    private function getDefaultConfig()
    {
    }
    /**
     * @return mixed
     */
    private function getCurrentStep()
    {
    }
    /**
     * @param mixed $step
     * @return void
     */
    private function setCurrentStep($step)
    {
    }
    /**
     * @return void
     */
    private function nextStep()
    {
    }
    /**
     * @param string $message
     * @return void
     */
    private function setMessage($message)
    {
    }
    /**
     * @return string
     */
    private function getMessage()
    {
    }
    /**
     * @return void
     */
    private function clearProgressCounter()
    {
    }
    /**
     * @param int $total
     * @param int $current
     * @return void
     */
    private function setProgressCounter($total, $current)
    {
    }
    /**
     * @return array|null
     */
    private function getProgressCounter()
    {
    }
    /**
     * @return void
     */
    private function setXmlImporterParameters()
    {
    }
    /**
     * @return array
     */
    private function getXmlImporterConfig()
    {
    }
    /**
     * @return void
     */
    private function initTemporaryTablesAction()
    {
    }
    /**
     * @return void
     */
    private function readXmlAction()
    {
    }
    /**
     * @return void
     */
    private function indexTemporaryTablesAction()
    {
    }
    /**
     * @return void
     */
    private function importMetadataAction()
    {
    }
    /**
     * @return void
     */
    private function importSectionsAction()
    {
    }
    /**
     * @return void
     */
    private function processMissingSectionsAction()
    {
    }
    /**
     * @return void
     */
    private function resortSectionsAction()
    {
    }
    /**
     * @return void
     */
    private function importElementsAction()
    {
    }
    /**
     * @return void
     */
    private function processMissingElementsAction()
    {
    }
    /**
     * @return void
     */
    private function importProductBundlesAction()
    {
    }
    /**
     * @return void
     */
    private function finalAction()
    {
    }
    /**
     * @return void
     */
    private function openXmlFile()
    {
    }
    /**
     * @return void
     */
    private function closeXmlFile()
    {
    }
    /**
     * @return float|int
     */
    private function getXmlFileProgressPercent()
    {
    }
    /**
     * @return void
     */
    private function createXmlImporter()
    {
    }
    /**
     * @return void
     */
    private function destroyXmlImporter()
    {
    }
    /**
     * @return void
     */
    private function destroySessionStorage()
    {
    }
    /**
     * @param int $currentValue
     * @param int $mode
     * @return bool
     */
    private function checkTranslitMode($currentValue, $mode)
    {
    }
    /**
     * @return array
     */
    private function getXmlImporterTransliterationSettings()
    {
    }
    /**
     * @param mixed $value
     * @return bool
     */
    private static function clearNull($value)
    {
    }
}