<?php

class CRestConfigurationInstallComponent extends \CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable
{
    /** @var ErrorCollection $errors */
    protected $errors;
    protected $actionError;
    protected $diskFolder = \false;
    protected $savedActionUserContextPostfix = 'saved';
    protected function checkRequiredParams()
    {
    }
    protected function listKeysSignedParameters()
    {
    }
    protected function isPreInstallAppMode()
    {
    }
    protected function prepareResult()
    {
    }
    protected function setActionError($message)
    {
    }
    protected function getActionError()
    {
    }
    protected function printErrors()
    {
    }
    public function executeComponent()
    {
    }
    protected function getItemContent($type, $step)
    {
    }
    protected function getImportContext()
    {
    }
    protected function getUserContext($postfix = \false)
    {
    }
    public function startAction()
    {
    }
    private function deleteBackupFolder()
    {
    }
    private function addDiskBackupFiles($files)
    {
    }
    private function addDiskBackupContent($type, $code, $content)
    {
    }
    private function getDiskFolder()
    {
    }
    public function finishAction()
    {
    }
    public function clearAction()
    {
    }
    public function importAction()
    {
    }
    public function saveAction()
    {
    }
    public function loadManifestAction()
    {
    }
    public function finishSaveAction()
    {
    }
    public function preInstallOffAction()
    {
    }
    public function configureActions()
    {
    }
}