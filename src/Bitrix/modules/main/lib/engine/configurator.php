<?php

namespace Bitrix\Main\Engine;

final class Configurator
{
    const EVENT_ON_BUILD_ACTIONS = 'onBuildActions';
    const MODE_ANNOTATIONS = 0x1;
    protected $mode = 0;
    /**
     * Configurator constructor.
     */
    public function __construct()
    {
    }
    public function getConfigurationByAnnotations(array $annotations)
    {
    }
    public function getConfigurationByController(\Bitrix\Main\Engine\Controller $controller)
    {
    }
    private function isExists(array $configuration, $actionName)
    {
    }
    private function checkReflectionMethodAsAction(\ReflectionMethod $reflectionMethod, array $annotations = null)
    {
    }
    private function onBuildConfigurationOfActions(\Bitrix\Main\Engine\Controller $controller)
    {
    }
    public function wrapFiltersClosure(array $filters)
    {
    }
    private function wrapClosure(array $configurations)
    {
    }
    private function checkConfigurations(array $configurations)
    {
    }
    private function checkFilters(array $filters)
    {
    }
}