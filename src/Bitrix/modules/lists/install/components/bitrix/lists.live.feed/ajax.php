<?php

class LiveFeedAjaxController extends \Bitrix\Lists\Internals\Controller
{
    /** @var  array */
    protected $lists = array();
    protected $formOprions = array();
    /** @var  string */
    protected $iblockTypeId = 'bitrix_processes';
    protected $listPerm;
    protected $formId;
    protected $randomString;
    protected $iblockDescription;
    protected $iblockCode;
    /** @var  int */
    protected $socnetGroupId = 0;
    protected $iblockId;
    protected function listOfActions()
    {
    }
    protected function processActionGetList()
    {
    }
    protected function processActionSetDelegateResponsible()
    {
    }
    /**
     * Displays a form to fill constants
     * return html
     */
    protected function processActionSetResponsible()
    {
    }
    protected function createHtmlSetConstants($templateId, $templateName)
    {
    }
    protected function processActionIsConstantsTuned()
    {
    }
    /**
     * @param $iblockId
     * @return array
     */
    protected function getTemplatesIdList($iblockId)
    {
    }
    protected function processActionGetListAdmin()
    {
    }
    protected function processActionNotifyAdmin()
    {
    }
    protected function processActionGetBizprocTemplateId()
    {
    }
    protected function processActionCheckPermissions()
    {
    }
    protected function processActionCreateSettingsDropdown()
    {
    }
    protected function processActionCheckDelegateResponsible()
    {
    }
    protected function unEscape($data)
    {
    }
    protected function processActionCheckDataElementCreation()
    {
    }
    protected function checkPermission()
    {
    }
    protected function checkPermissionElement()
    {
    }
    protected function getListData()
    {
    }
    /**
     * @return array
     */
    protected function createFormData()
    {
    }
    protected function getElementFields()
    {
    }
    protected function createPreparedFields()
    {
    }
    protected function getBizprocData()
    {
    }
    protected function connectionFile($fieldId, $key, $value, $type)
    {
    }
    protected function connectionHtmlEditor($fieldId, $fieldNameForHtml, $params, $content)
    {
    }
    protected function createHtml()
    {
    }
}