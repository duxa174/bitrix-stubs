<?php

namespace Bitrix\Sale\Domain\Verification;

/**
 * Class Manager
 * @package Bitrix\Main\Domain
 */
abstract class BaseManager
{
    private const ON_BUILD_VERIFICATION_MANAGER_LIST = "onBuildVerificationManagerList";
    /**
     * @return string
     */
    public static abstract function getPathPrefix() : string;
    /**
     * @return string
     */
    protected static abstract function getUrlRewritePath() : string;
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getSiteList() : array
    {
    }
    /**
     * @return array
     * @throws Main\LoaderException
     */
    public static function getLandingSiteList() : array
    {
    }
    /**
     * @param $domain
     * @return bool
     * @throws Main\LoaderException
     */
    public static function isLandingSite($domain) : bool
    {
    }
    /**
     * @param array $parameters
     * @return Main\ORM\Query\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getList(array $parameters = []) : \Bitrix\Main\ORM\Query\Result
    {
    }
    /**
     * @param $data
     * @param $file (from $_FILES)
     * @return Main\ORM\Data\AddResult|Main\ORM\Data\UpdateResult|Main\Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\IO\FileNotFoundException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function save($data, $file)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    private static function prepareData(array $data) : array
    {
    }
    /**
     * @param $data
     * @return Main\Result
     */
    private static function checkData($data) : \Bitrix\Main\Result
    {
    }
    /**
     * @param $id
     * @return Main\ORM\Data\DeleteResult
     * @throws \Exception
     */
    public static function delete($id) : \Bitrix\Main\ORM\Data\DeleteResult
    {
    }
    /**
     * @param $path
     * @return bool|false|string
     * @throws Main\IO\FileNotFoundException
     */
    private static function readFile($path)
    {
    }
    /**
     * @param $domain
     * @return mixed|string
     */
    private static function prepareDomain($domain)
    {
    }
    /**
     * @param $entityName
     * @return bool
     * @throws NotImplementedException
     */
    public static function needVerification($entityName) : bool
    {
    }
    /**
     * @return array
     * @throws NotImplementedException
     */
    protected static abstract function getEntityList() : array;
    /**
     * @param string $domain
     * @param string $path
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function addUrlRewrite(string $domain, string $path) : bool
    {
    }
    /**
     * @param string $domain
     * @param string $path
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function deleteUrlRewrite(string $domain, string $path) : bool
    {
    }
    /**
     * @param $domain
     * @return mixed|null
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function getSiteIdByDomain($domain)
    {
    }
    /**
     * @param $serverName
     * @param $requestUri
     * @return array|false
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function searchByRequest($serverName, $requestUri)
    {
    }
    /**
     * @return bool
     */
    private static function isB24() : bool
    {
    }
    /**
     * @return array|string[]
     * @throws Main\LoaderException
     */
    public static function getManagerList() : array
    {
    }
    /**
     * @param $domain
     * @return bool
     * @throws Main\LoaderException
     */
    private static function canUseUrlRewrite($domain) : bool
    {
    }
    private static function registerLandingEventHandler() : void
    {
    }
    private static function registerB24EventHandler() : void
    {
    }
    private static function unRegisterEventHandlers() : void
    {
    }
    private static function unRegisterLandingEventHandler() : void
    {
    }
    private static function unRegisterB24EventHandler() : void
    {
    }
}