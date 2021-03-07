<?php

class MFIComponent extends \CBitrixComponent
{
    /** @var ErrorCollection */
    protected $errorCollection;
    /** @var string  */
    protected $componentId = '';
    /** @var MFIController */
    protected $controller;
    public function __construct($component = \null)
    {
    }
    /**
     * @return bool|string
     */
    public function executeComponent()
    {
    }
    /**
     * Returns whether this is an AJAX (XMLHttpRequest) request.
     * @return boolean
     */
    protected function isAjaxRequest()
    {
    }
    protected function prepareParams()
    {
    }
}