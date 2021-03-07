<?php

namespace Bitrix\Calendar\Sync;

class GoogleApiSection
{
    private $userId, $connection;
    /**
     * GoogleApiSection constructor.
     * @param $userId
     */
    public function __construct($userId)
    {
    }
    /**
     * @return array|bool
     */
    public function sendSections()
    {
    }
    /**
     * @param $section
     *
     * @return array|null
     */
    public function sendSection($section)
    {
    }
    /**
     * @param $responseFields
     * @param $section
     * @return integer
     */
    private function saveSection($responseFields, $section)
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getLocalSections()
    {
    }
    /**
     * @return bool|mixed
     * @throws \Bitrix\Main\LoaderException
     */
    private function getGoogleConnection()
    {
    }
    /**
     * @param $sectionId
     * @return array|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getSectionById($sectionId)
    {
    }
}