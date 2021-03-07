<?php

namespace Bitrix\Main\Engine;

final class Router
{
    const COMPONENT_MODE_AJAX = 'ajax';
    const COMPONENT_MODE_CLASS = 'class';
    protected $vendor = \Bitrix\Main\Engine\Resolver::DEFAULT_VENDOR;
    protected $module = 'main';
    protected $action = 'index';
    protected $component;
    protected $mode;
    /**
     * @var HttpRequest
     */
    private $request;
    /**
     * Router constructor.
     * @param HttpRequest $request
     */
    public function __construct(\Bitrix\Main\HttpRequest $request)
    {
    }
    private function resolveModuleAndAction($action)
    {
    }
    private function resolveVendor($action)
    {
    }
    protected function refineModuleName($vendor, $module)
    {
    }
    /**
     * @param $componentName
     *
     * @param string|null $signedParameters
     *
     * @param null $template
     *
     * @return Controllerable|null
     * @throws Security\Sign\BadSignatureException
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    protected function buildComponent($componentName, $signedParameters = null, $template = null)
    {
    }
    /**
     * @return array
     */
    public function getControllerAndAction()
    {
    }
    private function getComponentControllerAndAction()
    {
    }
    private function includeModule($module)
    {
    }
    private function includeComponentAjaxClass($name)
    {
    }
    private function getAjaxClassForPath($componentPath)
    {
    }
    /**
     * @param HttpRequest $request
     * @return $this
     */
    public function setRequest(\Bitrix\Main\HttpRequest $request)
    {
    }
    /**
     * @return string
     */
    public function getVendor()
    {
    }
    /**
     * @return string
     */
    public function getModule()
    {
    }
    /**
     * @return string
     */
    public function getAction()
    {
    }
    /**
     * @return string
     */
    public function getComponent()
    {
    }
    /**
     * @return string
     */
    public function getMode()
    {
    }
}