<?php

namespace Bitrix\Sale\Exchange\Entity;

abstract class UserImportBase extends \Bitrix\Sale\Exchange\ImportBase
{
    const EXTERNAL_AUTH_ID = 'sale';
    /** @var  ImportBase */
    protected $entity;
    /**
     * @param ImportBase $entity
     */
    public function setEntity(\Bitrix\Sale\Exchange\ImportBase $entity)
    {
    }
    /**
     * @return ImportBase
     */
    public function getEntity()
    {
    }
    /**
     * @param $personalTypeId
     * @param $profile
     * @param $property
     * @return array
     */
    public function getPropertyOrdersByConfig($personalTypeId, $profile, $property)
    {
    }
    /**
     * @param $orgFormId
     * @param array $userProps
     * @return bool
     */
    public function getFieldsConfig($orgFormId, $userProps = array())
    {
    }
    /**
     * @return null
     */
    public function getConfig()
    {
    }
    /**
     * @param $siteId
     * @return array
     */
    public function getListPersonType($siteId)
    {
    }
    /**
     * @return bool
     */
    public function isFiz()
    {
    }
    /**
     * @param $fields
     * @return int|null|string
     */
    public function resolvePersonTypeId($fields)
    {
    }
    /**
     * @param $personTypeId
     * @return mixed
     */
    public static function getPropertyOrdersByPersonalTypeId($personTypeId)
    {
    }
    /**
     * @param $fields
     * @param $arErrors
     * @return bool|int|string
     */
    public function registerUser($fields, &$arErrors)
    {
    }
    /**
     * @param $id
     * @param $xmlIdUser
     * @param $xmlIdFields
     * @return bool
     * @internal
     */
    public static function updateEmptyXmlId($id, $xmlId)
    {
    }
    public function initFields()
    {
    }
    /**
     * @param IBusinessValueProvider $entity
     * @return Order
     */
    protected static function getBusinessValueOrderProvider(\Bitrix\Sale\IBusinessValueProvider $entity)
    {
    }
}