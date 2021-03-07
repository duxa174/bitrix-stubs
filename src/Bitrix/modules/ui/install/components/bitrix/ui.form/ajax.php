<?php

class CUIFormComponentAjaxController extends \Bitrix\Main\Engine\Controller
{
    /** @var UI\Form\EntityEditorConfiguration  */
    protected static $configuration;
    protected function getConfiguration(string $categoryName = \null) : \Bitrix\UI\Form\EntityEditorConfiguration
    {
    }
    public function saveConfigurationAction($guid, array $config, array $params, string $categoryName = '')
    {
    }
    public function resetConfigurationAction($guid, array $params, string $categoryName = '')
    {
    }
    public function setScopeAction($guid, $scope, string $categoryName = '')
    {
    }
    public function forceCommonScopeForAllAction($guid, string $categoryName = '')
    {
    }
    public static function renderImageInputAction($moduleId, $name, $value)
    {
    }
}