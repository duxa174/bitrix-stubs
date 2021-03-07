<?php

namespace Bitrix\Sale\Exchange\Integration\Rest\Cmd;

class Base
{
    const DIRECTORY_PAGE = '/rest/';
    protected $query;
    protected $page;
    protected $directory;
    private $token;
    public function __construct()
    {
    }
    public function setField($name, $value)
    {
    }
    public function setFieldsValues($values)
    {
    }
    public function getFieldsValues()
    {
    }
    public function setDirectory($directory)
    {
    }
    public function setPageByType($type)
    {
    }
    public function setPage($page)
    {
    }
    public function build()
    {
    }
    public function call()
    {
    }
    public function fill()
    {
    }
    protected function buildDirectoryPage()
    {
    }
    protected function initialize(\Bitrix\Sale\Exchange\Integration\App\Base $application)
    {
    }
    private static function getAppToken($guid)
    {
    }
}