<?php

namespace Bitrix\Seo\Checkout;

/**
 * Class Response
 * @package Bitrix\Seo\Checkout
 */
abstract class Response extends \Bitrix\Main\Result
{
    const TYPE_CODE = '';
    protected $type;
    protected $responseText;
    /* @var Request|null */
    protected $request;
    /**
     * Response constructor.
     */
    public function __construct()
    {
    }
    /**
     * @param array $data
     * @return Result|void
     */
    public function setData(array $data)
    {
    }
    /**
     * @param $responseText
     */
    public function setResponseText($responseText)
    {
    }
    /**
     * @return mixed
     */
    public function getResponseText()
    {
    }
    /**
     * @return Request|null
     */
    public function getRequest()
    {
    }
    /**
     * @param Request $request
     * @return Request
     */
    public function setRequest(\Bitrix\Seo\Checkout\Request $request)
    {
    }
    /**
     * @param $type
     * @return static
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function create($type)
    {
    }
    /**
     * @param $data
     */
    public abstract function parse($data);
}