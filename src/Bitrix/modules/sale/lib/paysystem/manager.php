<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class PaySystemManager
 * @package Bitrix\Sale\Payment
 */
final class Manager
{
    const HANDLER_AVAILABLE_TRUE = true;
    const HANDLER_AVAILABLE_FALSE = false;
    const HANDLER_INDEPENDENT_TRUE = true;
    const HANDLER_INDEPENDENT_FALSE = false;
    const EVENT_ON_GET_HANDLER_DESC = 'OnSaleGetHandlerDescription';
    const CACHE_ID = "BITRIX_SALE_INNER_PS_ID";
    const TTL = 31536000;
    /**
     * @var array
     */
    private static $handlerDirectories = array('CUSTOM' => '', 'LOCAL' => '/local/php_interface/include/sale_payment/', 'SYSTEM' => '/bitrix/modules/sale/handlers/paysystem/', 'SYSTEM_OLD' => '/bitrix/modules/sale/payment/');
    /**
     * @return mixed
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function getHandlerDirectories()
    {
    }
    /**
     * @param array $params
     * @return \Bitrix\Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getList(array $params = array())
    {
    }
    /**
     * @param $id
     * @return array|false
     */
    public static function getById($id)
    {
    }
    /**
     * @param $code
     * @return array|bool
     */
    public static function getByCode($code)
    {
    }
    /**
     * @param $primary
     * @param array $data
     * @return \Bitrix\Main\Entity\UpdateResult
     * @throws \Exception
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param array $data
     * @return \Bitrix\Main\Entity\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * @return string
     */
    public static function generateXmlId()
    {
    }
    /**
     * @param Request $request
     * @return array|false
     * @throws ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ObjectException
     */
    public static function searchByRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param string $className
     * @return mixed|string
     */
    public static function getFolderFromClassName($className)
    {
    }
    /**
     * @param string $name
     * @return mixed
     */
    public static function sanitize($name)
    {
    }
    /**
     * @param $paymentId
     * @param string $registryType
     * @return array
     */
    public static function getIdsByPayment($paymentId, $registryType = \Bitrix\Sale\Registry::REGISTRY_TYPE_ORDER)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getConsumersList()
    {
    }
    /**
     * @param $paySystemId
     * @return string
     */
    public static function getPsType($paySystemId)
    {
    }
    /**
     * @param Payment $payment
     * @param int $mode
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getListWithRestrictions(\Bitrix\Sale\Payment $payment, $mode = \Bitrix\Sale\Services\PaySystem\Restrictions\Manager::MODE_CLIENT)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    public static function getHandlerList()
    {
    }
    /**
     * @param $path
     * @return string
     */
    public static function getClassNameFromPath($path)
    {
    }
    /**
     * @param $handler
     * @param null $psMode
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function getHandlerDescription($handler, $psMode = null)
    {
    }
    /**
     * @param $folder
     * @return null|string
     */
    public static function getPathToHandlerFolder($folder)
    {
    }
    /**
     * @return int
     */
    public static function getInnerPaySystemId()
    {
    }
    /**
     * @return int
     * @throws \Exception
     */
    private static function createInnerPaySystem()
    {
    }
    /**
     * @param $id
     * @return bool
     */
    public static function isExist($id)
    {
    }
    /**
     * @param $id
     * @return Service|null
     */
    public static function getObjectById($id)
    {
    }
    /**
     * @param $folder
     * @param int $paySystemId
     * @return array|mixed
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function getTariff($folder, $paySystemId = 0)
    {
    }
    /**
     * @return array
     */
    public static function getBusValueGroups()
    {
    }
    /**
     * @param $primary
     * @return \Bitrix\Main\Entity\DeleteResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function delete($primary)
    {
    }
    /**
     * @param $paySystemId
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getPersonTypeIdList($paySystemId)
    {
    }
    /**
     * @param array $data
     * @return Payment|null
     * @throws ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getPaymentObjectByData(array $data)
    {
    }
    /**
     * @return array
     */
    public static function getDataRefundablePage()
    {
    }
    /**
     * @return array
     */
    private static function getRestHandlers()
    {
    }
    /**
     * @param $handler
     * @return bool
     */
    public static function isRestHandler($handler)
    {
    }
    /**
     * @param $actionFile
     * @return array
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function includeHandler($actionFile)
    {
    }
}