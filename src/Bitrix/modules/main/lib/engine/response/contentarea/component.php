<?php

namespace Bitrix\Main\Engine\Response\ContentArea;

class Component implements \Bitrix\Main\Engine\Response\ContentArea\ContentAreaInterface, \Bitrix\Main\Engine\Response\ContentArea\DataSectionInterface
{
    private $componentName = null;
    private $componentTemplate = null;
    private $componentParams = [];
    private $componentResult = [];
    /** @var array|callable  */
    private $dataKeys = [];
    private $parentComponent = null;
    private $functionParams = [];
    /**
     * Component constructor.
     *
     * @param $componentName
     * @param string $componentTemplate
     * @param array $componentParams
     * @param mixed $dataKeys
     */
    public function __construct($componentName, $componentTemplate = '', array $componentParams = [], $dataKeys = [])
    {
    }
    /**
     * @param array $params
     *
     * @return $this
     */
    public function setParameters(array $params)
    {
    }
    /**
     * @param $parentComponent
     *
     * @return $this
     */
    public function setParentComponent($parentComponent)
    {
    }
    /**
     * @param array $functionParams
     *
     * @return $this
     */
    public function setFunctionParameters(array $functionParams)
    {
    }
    /**
     * @return string
     */
    public function getHtml()
    {
    }
    /**
     * @return string
     */
    public function getSectionName() : string
    {
    }
    /**
     * @return array
     */
    public function getSectionData()
    {
    }
}