<?php

namespace Bitrix\Translate\Controller\Export;

/**
 * Harvester of the lang files disposition.
 *
 * @method array run(string $path, bool $runBefore)
 *
 */
abstract class ExportAction extends \Bitrix\Translate\Controller\Action
{
    /** @var string */
    protected static $documentRoot;
    /** @var bool */
    protected static $useTranslationRepository;
    /** @var string[] */
    protected static $translationRepositoryLanguages;
    /** @var int */
    protected $tabId;
    /** @var string */
    protected $exportFilePath;
    /** @var string */
    protected $exportFileName;
    /** @var string */
    protected $exportFileType = 'application/csv';
    /** @var int */
    protected $exportFileSize = 0;
    /** @var bool */
    protected $convertEncoding;
    /** @var string */
    protected $encodingOut;
    /** @var bool */
    protected $collectUntranslated;
    /** @var string[] */
    protected $languages;
    /** @var int */
    protected $exportedPhraseCount = 0;
    /** @var Translate\Filter */
    protected $filter;
    /**
     * \Bitrix\Main\Engine\Action constructor.
     *
     * @param string $name Action name.
     * @param Main\Engine\Controller $controller Parent controller object.
     * @param array $config Additional configuration.
     */
    public function __construct($name, \Bitrix\Main\Engine\Controller $controller, $config = array())
    {
    }
    /**
     * Creates temporary file for writing data.
     *
     * @param string $exportFileName
     * @return Translate\IO\CsvFile
     */
    protected function createExportTempFile(string $exportFileName)
    {
    }
    /**
     * Apply module configuration to exporting csv file.
     *
     * @param Translate\IO\CsvFile $csvFile Object to configure.
     *
     * @return void
     */
    protected function configureExportCsvFile(\Bitrix\Translate\IO\CsvFile $csvFile)
    {
    }
    /**
     * Generate name for exporting file.
     *
     * @param string $path Exporting path.
     * @param string[] $languages List of exporting languages.
     *
     * @return string
     */
    protected function generateExportFileName($path, $languages)
    {
    }
    /**
     * Returns exported file properties.
     *
     * @return array
     */
    public function getDownloadingParameters()
    {
    }
    /**
     * Merges all language files into one array.
     *
     * @param string $langFilePath Relative project path of the language file.
     * @param string[] $fullLangFilePaths Array of full paths to lang files.
     * @param bool $collectUntranslated Collect only untranslated phrases.
     * @param string[] $filterByCodeList Array of prase codes to filter.
     *
     * @return array
     */
    protected function mergeLangFiles($langFilePath, $fullLangFilePaths, $collectUntranslated = false, $filterByCodeList = [])
    {
    }
    /**
     * Runs through lang folder and collects full path to lang files.
     *
     * @param string $langPath Relative project path of the language folder.
     *
     * @return \Generator|array
     */
    protected function lookThroughLangFolder($langPath)
    {
    }
}