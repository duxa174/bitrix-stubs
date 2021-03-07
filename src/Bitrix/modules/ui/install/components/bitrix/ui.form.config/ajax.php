<?php

class UiFormConfigAjaxController extends \Bitrix\Main\Engine\Controller
{
    /**
     * @param string $moduleId
     * @param string $entityTypeId
     * @param string $name
     * @param array $accessCodes
     * @param array $config
     * @param string $common
     * @return int|AjaxJson
     */
    public function saveAction(string $moduleId, string $entityTypeId, array $config, string $common, string $name = '', array $accessCodes = [])
    {
    }
    /**
     * @param string $moduleId
     * @param string $guid
     * @param string $scope
     * @param int $userScopeId
     * @return void|AjaxJson
     */
    public function setScopeAction(string $moduleId, string $categoryName, string $guid, string $scope, int $userScopeId = 0)
    {
    }
    /**
     * @param string $moduleId
     * @param int $scopeId
     * @param array $accessCodes
     * @return array|AjaxJson
     */
    public function updateScopeAccessCodesAction(string $moduleId, int $scopeId, array $accessCodes = [])
    {
    }
    /**
     * @return AjaxJson
     */
    private function getAccessDenied() : \Bitrix\Main\Engine\Response\AjaxJson
    {
    }
}