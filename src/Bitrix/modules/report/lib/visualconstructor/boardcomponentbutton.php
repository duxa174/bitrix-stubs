<?php

namespace Bitrix\Report\VisualConstructor;

class BoardComponentButton extends \Bitrix\Report\VisualConstructor\BoardButton
{
    private $componentName;
    private $componentTemplateName = '';
    private $componentParams = [];
    private $jsPathList = array();
    private $cssPathList = array();
    private $processed = false;
    public function __construct($componentName, $componentTemplateName = '', $componentParams = [])
    {
    }
    /**
     * @return mixed
     */
    public function getComponentName()
    {
    }
    /**
     * @param mixed $componentName
     */
    public function setComponentName($componentName)
    {
    }
    /**
     * @return string
     */
    public function getComponentTemplateName()
    {
    }
    /**
     * @param string $componentTemplateName
     */
    public function setComponentTemplateName($componentTemplateName)
    {
    }
    /**
     * @return array
     */
    public function getComponentParams()
    {
    }
    /**
     * @param array $componentParams
     */
    public function setComponentParams($componentParams)
    {
    }
    /**
     * @return $this|BoardButton
     */
    public function process()
    {
    }
    public function flush()
    {
    }
    private function collectAssetsPathList()
    {
    }
    /**
     * @return array
     */
    private function getComponentJsList()
    {
    }
    /**
     * @return array
     */
    private function getComponentCssList()
    {
    }
    /**
     * @return array
     */
    private function getComponentStringList()
    {
    }
    /**
     * @return bool
     */
    public function isProcessed()
    {
    }
    /**
     * @param bool $processed
     */
    public function setProcessed($processed)
    {
    }
}