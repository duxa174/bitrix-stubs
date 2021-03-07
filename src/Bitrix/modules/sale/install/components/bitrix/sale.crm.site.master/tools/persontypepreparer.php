<?php

namespace Bitrix\Sale\CrmSiteMaster\Tools;

/**
 * Class PersonTypePreparer
 * @package Bitrix\Sale\CrmSiteMaster\Tools
 */
class PersonTypePreparer
{
    /** @var array $errors */
    private $errors = [];
    /**
     * @param string $error
     */
    private function setError($error)
    {
    }
    /**
     * @return array errors
     */
    public function getErrors()
    {
    }
    /**
     * Set business values for person types
     *
     * @param $siteId
     * @param $personTypeList
     * @return bool
     */
    public function preparePersonType($siteId, $personTypeList)
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getPersonTypeList()
    {
    }
    /**
     * @param $personTypeId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getCurrentPersonTypeSite($personTypeId)
    {
    }
    /**
     * @param $personTypeId
     * @param $siteId
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    private function addSiteToPersonType($personTypeId, $siteId)
    {
    }
    /**
     * @param array $personTypes
     * @param $siteId
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function addSitesToPersonType(array $personTypes, $siteId)
    {
    }
    /**
     * @param $personTypeId
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws \Exception
     */
    private function deleteSitesFromPersonType($personTypeId)
    {
    }
}