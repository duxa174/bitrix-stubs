<?php

namespace Bitrix\Seo\Retargeting;

abstract class Response extends \Bitrix\Main\Result
{
    const TYPE_CODE = '';
    protected $id;
    protected $type;
    protected $adapter;
    protected $responseText;
    /* @var Request|null */
    protected $request;
    protected $result;
    protected $fetchIterator = 0;
    public function __construct()
    {
    }
    public function setId($id)
    {
    }
    public function getId()
    {
    }
    public function setData(array $data)
    {
    }
    public function setResponseText($responseText)
    {
    }
    public function getResponseText()
    {
    }
    public function fetch()
    {
    }
    public function getRequest()
    {
    }
    public function setRequest(\Bitrix\Seo\Retargeting\Request $request)
    {
    }
    /**
     * @param $type
     * @return static
     */
    public static function create($type)
    {
    }
    public abstract function parse($data);
}