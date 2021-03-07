<?php

namespace Bitrix\Iblock\ORM;

/**
 * @package    bitrix
 * @subpackage iblock
 */
abstract class CommonElement extends \Bitrix\Iblock\ORM\EO_CommonElement
{
    /**
     * Handles relation with general section
     *
     * @param $iblockSectionId
     *
     * @return CommonElement
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function setIblockSectionId($iblockSectionId)
    {
    }
    /**
     * Accepts PropertyValue and scalar, converts it to property reference
     *
     * @param $fieldName
     * @param $value
     *
     * @return EntityObject
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function sysSetValue($fieldName, $value)
    {
    }
    /**
     * Accepts PropertyValue and scalar, converts it to property reference
     *
     * @param $fieldName
     * @param $remoteObject
     *
     * @return bool|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function sysAddToCollection($fieldName, $remoteObject)
    {
    }
    /**
     * Accepts PropertyValue and scalar, converts it to property reference
     *
     * @param $fieldName
     * @param $remoteObject
     *
     * @return bool|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public function sysRemoveFromCollection($fieldName, $remoteObject)
    {
    }
    /**
     * @param mixed               $value
     * @param PropertyReference|PropertyOneToMany $field
     *
     * @return mixed|EntityObject
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    protected function sysConvertPropertyValue($value, $field)
    {
    }
}