<?php

namespace Bitrix\Translate\Controller\Export;

class Csv extends \Bitrix\Translate\Controller\Controller implements \Bitrix\Translate\Controller\IProcessParameters
{
    use \Bitrix\Translate\Controller\ProcessParams;
    const SETTING_ID = 'TRANSLATE_EXPORT';
    const ACTION_EXPORT = 'export';
    const ACTION_EXPORT_PATH = 'exportPath';
    const ACTION_EXPORT_FILE = 'exportFile';
    const ACTION_EXPORT_FILE_LIST = 'exportFileList';
    const ACTION_EXPORT_FILE_SEARCH = 'exportFileSearch';
    const ACTION_EXPORT_PHRASE_SEARCH = 'exportPhraseSearch';
    const ACTION_PURGE = 'purge';
    const ACTION_CANCEL = 'cancel';
    const ACTION_DOWNLOAD = 'download';
    /** @var int Session tab counter. */
    private $tabId = 0;
    /** @var Translate\Filter */
    private $filter;
    /** @var bool */
    private $convertEncoding;
    /** @var string */
    private $encodingOut;
    /** @var bool */
    private $collectUntranslated;
    /** @var string[] */
    private $languages;
    /** @var array */
    private $downloadParams;
    /**
     * Configures actions.
     *
     * @return array
     */
    public function configureActions()
    {
    }
    /**
     * Initializes controller.
     *
     * @return void
     */
    protected function init()
    {
    }
    /**
     * Runs controller action.
     *
     * @param int $tabId Id of session storage.
     * @param string $path Path to indexing.
     *
     * @return array
     */
    public function exportAction($tabId, $path = '')
    {
    }
    /**
     * Resolves action type.
     *
     * @param string $path Path to indexing.
     *
     * @return Translate\Controller\Export\ExportAction
     */
    private function detectAction($path)
    {
    }
    /**
     * Deletes generated file.
     *
     * @param int $tabId Id of session storage.
     *
     * @return array
     */
    public function purgeAction($tabId)
    {
    }
    /**
     * Deletes generated file.
     *
     * @param int $tabId Id of session storage.
     *
     * @return array
     */
    public function cancelAction($tabId)
    {
    }
    /**
     * Generate link to download local exported temporally file.
     *
     * @param array $params Parameters for download link.
     *
     * @return string
     */
    private function generateDownloadLink($params)
    {
    }
    /**
     * Starts downloading genereted file.
     *
     * @param int $tabId Id of session storage.
     *
     * @return \Bitrix\Main\HttpResponse|void
     */
    public function downloadAction($tabId)
    {
    }
}