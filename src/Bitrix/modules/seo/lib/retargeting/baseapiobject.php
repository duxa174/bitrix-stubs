<?php

namespace Bitrix\Seo\Retargeting;

class BaseApiObject
{
    const TYPE_CODE = '';
    /** @var Request $request */
    protected $request;
    /** @var Service $service */
    protected $service;
    protected static $listRowMap = array();
    public static function normalizeListRow(array $row)
    {
    }
    public function __construct()
    {
    }
    /**
     * @return Request
     */
    public function getRequest()
    {
    }
    public function setRequest(\Bitrix\Seo\Retargeting\Request $request)
    {
    }
    /**
     * @param $type
     * @param null $parameters
     * @param IService|null $service
     * @return static
     */
    public static function create($type, $parameters = null, \Bitrix\Seo\Retargeting\IService $service = null)
    {
    }
    public function setService(\Bitrix\Seo\Retargeting\IService $service)
    {
    }
}