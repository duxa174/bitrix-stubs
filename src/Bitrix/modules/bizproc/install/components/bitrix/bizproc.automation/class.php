<?php

class BizprocAutomationComponent extends \CBitrixComponent
{
    protected function getDocumentType()
    {
    }
    protected function getDocumentId()
    {
    }
    private function getStatusesEditUrl()
    {
    }
    private function getWorkflowEditUrl()
    {
    }
    private function getConstantsEditUrl()
    {
    }
    private function getParametersEditUrl()
    {
    }
    private function getTitleView()
    {
    }
    private function getTitleEdit()
    {
    }
    protected function getDocumentCategoryId()
    {
    }
    protected function isApiMode()
    {
    }
    protected function isOneTemplateMode()
    {
    }
    protected function getTemplateInfo()
    {
    }
    protected function getTemplates(array $statuses)
    {
    }
    protected function prepareTemplateForView()
    {
    }
    protected function getTemplateStatusList()
    {
    }
    public static function getTemplateViewData(array $template, $documentType)
    {
    }
    public static function getRobotViewData($robot, array $documentType)
    {
    }
    private static function getUsersFromResponsibleProperty(array $robot, $propertyName)
    {
    }
    public function executeComponent()
    {
    }
    public static function signDocument(array $documentType, $documentCategoryId, $documentId)
    {
    }
    /**
     * @param string $unsignedData
     * @return array
     */
    public static function unSignDocument($unsignedData)
    {
    }
    /**
     * @deprecated
     */
    public static function getDestinationData(array $documentType)
    {
    }
    private function getDocumentFields($filter = \null)
    {
    }
    private function getDocumentUserGroups()
    {
    }
    private function showError($message)
    {
    }
    private function prepareDelayMinLimitResult()
    {
    }
}