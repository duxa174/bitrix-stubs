<?php

namespace Bitrix\Sale;

/**
 * Class PersonType
 * @package Bitrix\Sale
 */
class PersonType
{
    /** @var int */
    protected $siteId;
    /** @var array  */
    private $personTypeList = array();
    /**
     * PersonType constructor.
     */
    protected function __construct()
    {
    }
    /**
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * @return mixed
     * @throws ArgumentException
     */
    private static function createPersonTypeObject()
    {
    }
    /**
     * @param null $siteId
     * @param null $id
     * @return mixed
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function load($siteId = null, $id = null)
    {
    }
    /**
     * @param array $parameters
     * @return \Bitrix\Main\ORM\Query\Result
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getList(array $parameters = [])
    {
    }
    /**
     * @param OrderBase $order
     * @return Result
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function doCalculate(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @return array
     */
    public static function generateXmlId()
    {
    }
}