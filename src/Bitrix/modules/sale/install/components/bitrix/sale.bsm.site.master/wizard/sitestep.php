<?php

namespace Bitrix\Sale\BsmSiteMaster\Steps;

/**
 * Class SiteStep
 * Select or create site
 *
 * @package Bitrix\Sale\BsmSiteMaster\Steps
 */
class SiteStep extends \CWizardStep
{
    const SITE_TEMPLATE_LOGIN = "login";
    const WIZARD_PATH = "bitrix.eshop/install/wizards/bitrix/";
    const WIZARD_NAME = "eshop";
    private $currentStepName = __CLASS__;
    /** @var \SaleBsmSiteMaster */
    private $component = null;
    /** @var Main\Request */
    private $request;
    private $formFieldList = ["BSM_SITE", "LID", "NAME", "SERVER_NAME", "DOC_ROOT", "WIZARD_REWRITE"];
    /** @var array site's fields */
    private $fields = [];
    /**
     * Check step errors
     */
    private function setStepErrors()
    {
    }
    /**
     * Prepare next/prev buttons
     *
     * @throws \ReflectionException
     */
    private function prepareButtons()
    {
    }
    /**
     * Initialization step id, title and next/prev step
     *
     * @throws Main\SystemException
     * @throws \ReflectionException
     */
    public function initStep()
    {
    }
    /**
     * Show step content
     *
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function showStep()
    {
    }
    /**
     * @return array
     */
    public function showButtons()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function onPostForm()
    {
    }
    /**
     * @throws Main\SystemException
     */
    private function checkSite()
    {
    }
    /**
     * @param $id
     * @return array|false
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getSiteDataById($id)
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function setFields()
    {
    }
    /**
     * @return array
     */
    private function getFields()
    {
    }
    /**
     * Check site's fields
     *
     * @throws Main\SystemException
     */
    private function checkFields()
    {
    }
    /**
     * @return array
     * @throws Main\SystemException
     */
    private function createNewSite()
    {
    }
    /**
     * @param $serverName
     * @return mixed
     */
    private function prepareServerName($serverName)
    {
    }
    /**
     * @param $documentRoot
     * @return bool
     */
    private function isIndexFileExists($documentRoot)
    {
    }
    /**
     * @param $documentRoot
     * @return array
     */
    private function getMissingRequiredFileList($documentRoot)
    {
    }
    /**
     * @param $documentRoot
     * @return bool
     */
    private function isDocumentRootExists($documentRoot)
    {
    }
    /**
     * @param $lid
     * @param $path
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\SystemException
     */
    private function prepareSite($lid, $path)
    {
    }
    /**
     * @param $arFields
     */
    private function addTemplate(&$arFields)
    {
    }
    /**
     * @param $siteId
     * @throws Main\ArgumentOutOfRangeException
     */
    private function setAuthComponentsTemplate($siteId)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getSiteList()
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function showSelectSiteHtml()
    {
    }
    /**
     * Add html for creating new site
     */
    private function createNewSiteHtml()
    {
    }
    /**
     * Get site id for form
     *
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getRandSiteId()
    {
    }
    /**
     * @return int
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getSort()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getDefaultParam()
    {
    }
    /**
     * Set site for person types
     *
     * @param $siteId
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function preparePersonTypes($siteId)
    {
    }
    /**
     * Show extended errors
     *
     * @param $strError
     * @return string
     */
    public function showExtendedErrors($strError)
    {
    }
    /**
     * Init form fields from wizard's var
     */
    private function initFormFields()
    {
    }
    /**
     * Save form fields to hidden fields
     *
     * @return string
     */
    private function saveFormHiddenFields()
    {
    }
    /**
     * Save form fields to wizard's var
     */
    private function saveFormFields()
    {
    }
    /**
     * Delete form fields
     */
    private function deleteFormFields()
    {
    }
    /**
     * @param $siteId
     * @param $wizardName
     * @param $path
     * @return bool
     * @throws Main\SystemException
     */
    private function createWizardIndex($siteId, $wizardName, $path)
    {
    }
    /**
     * @param $documentRoot
     * @return bool
     */
    private function copyAccessFile($documentRoot)
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getPersonTypeIndexContent()
    {
    }
}