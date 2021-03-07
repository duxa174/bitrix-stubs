<?php

/**
 * Class SaleDomainVerificationForm
 */
class SaleDomainVerificationForm extends \CBitrixComponent
{
    private const DOMAIN_GRID_ID = "verified_domain_list";
    /** @var ErrorCollection $errors */
    private $errors;
    /** @var Sale\Domain\Verification\BaseManager $domainVerificationManager */
    private $domainVerificationManager;
    /**
     * @param $params
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * @return array
     */
    protected function listKeysSignedParameters() : array
    {
    }
    private function initResult()
    {
    }
    /**
     * @param $params
     */
    private function checkRequiredParams($params)
    {
    }
    private function printErrors()
    {
    }
    /**
     * @param $entity
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function prepareGrid($entity)
    {
    }
    /**
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function initSiteList()
    {
    }
    /**
     * @return bool
     */
    private function isSave()
    {
    }
    /**
     * @return bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\IO\FileNotFoundException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function saveDomain()
    {
    }
    private function prepareResult()
    {
    }
    /**
     * @return mixed|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function executeComponent()
    {
    }
}