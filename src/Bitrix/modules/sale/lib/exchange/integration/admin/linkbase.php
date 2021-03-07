<?php

namespace Bitrix\Sale\Exchange\Integration\Admin;

abstract class LinkBase
{
    protected $query;
    protected $page;
    public function __construct()
    {
    }
    public function setRequestUri($url)
    {
    }
    public function setField($name, $value)
    {
    }
    public function getField($name)
    {
    }
    public function setFieldsValues($values)
    {
    }
    public function getFieldsValues()
    {
    }
    public function setQuery($query)
    {
    }
    public function build()
    {
    }
    public function redirect()
    {
    }
    public function setPage($page)
    {
    }
    public function setPageByType($type)
    {
    }
    public function getPage()
    {
    }
    protected function parseParams($data)
    {
    }
    public abstract function getType();
    /**
     * @return $this
     */
    public abstract function fill();
    //setFieldsValues($this->getDefaultFieldsValues())
}