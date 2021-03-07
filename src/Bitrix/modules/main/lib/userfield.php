<?php

namespace Bitrix\Main;

/**
 * Entity representation of UserFields.
 * @package bitrix
 * @subpackage main
 */
class UserFieldTable extends \Bitrix\Main\ORM\Data\DataManager
{
    // to use in uts serialized fields
    const MULTIPLE_DATE_FORMAT = 'Y-m-d';
    const MULTIPLE_DATETIME_FORMAT = 'Y-m-d H:i:s';
    public static function getMap()
    {
    }
    public static function getLabelsReference(string $referenceName = null, string $languageId = null) : \Bitrix\Main\ORM\Fields\Relations\Reference
    {
    }
    public static function getLabelFields() : array
    {
    }
    public static function getLabelsSelect(string $referenceName = null) : array
    {
    }
    public static function getFieldData(int $id) : ?array
    {
    }
    /**
     * @param array $data
     *
     * @return \Bitrix\Main\ORM\Data\AddResult|void
     * @throws NotImplementedException
     */
    public static function add(array $data)
    {
    }
    /**
     * @param mixed $primary
     * @param array $data
     *
     * @return \Bitrix\Main\ORM\Data\UpdateResult|void
     * @throws NotImplementedException
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param mixed $primary
     *
     * @return ORM\Data\DeleteResult|void
     * @throws NotImplementedException
     */
    public static function delete($primary)
    {
    }
    /**
     * @param ORM\Entity $entity
     * @param            $ufId
     *
     * @throws ArgumentException
     * @throws SystemException
     */
    public static function attachFields(\Bitrix\Main\ORM\Entity $entity, $ufId)
    {
    }
    /**
     * @param ORM\Entity $srcEntity
     * @param array      $utsFields
     * @param array      $utmFields
     * @param null       $ufId
     *
     * @return ORM\Entity
     * @throws ArgumentException
     * @throws SystemException
     */
    protected static function createUtsEntity(\Bitrix\Main\ORM\Entity $srcEntity, array $utsFields, array $utmFields, $ufId = null)
    {
    }
    /**
     * @param ORM\Fields\Field       $entityField
     * @param ORM\Fields\Field|array $fieldAsType
     *
     * @throws ArgumentException
     */
    public static function setMultipleFieldSerialization(\Bitrix\Main\ORM\Fields\Field $entityField, $fieldAsType)
    {
    }
    public static function rewriteUtsReference($referenceDesc)
    {
    }
    protected static function getUtsEntityClassNameBySrcEntity(\Bitrix\Main\ORM\Entity $srcEntity)
    {
    }
    protected static function getUtsEntityTableNameBySrcEntity(\Bitrix\Main\ORM\Entity $srcEntity, $ufId = null)
    {
    }
    /**
     * @param ORM\Entity $srcEntity
     * @param array      $utmFields
     * @param null       $ufId
     *
     * @return ORM\Entity
     * @throws ArgumentException
     * @throws SystemException
     */
    protected static function createUtmEntity(\Bitrix\Main\ORM\Entity $srcEntity, array $utmFields, $ufId = null)
    {
    }
    protected static function getUtmEntityClassNameBySrcEntity(\Bitrix\Main\ORM\Entity $srcEntity)
    {
    }
    protected static function getUtmEntityTableNameBySrcEntity(\Bitrix\Main\ORM\Entity $srcEntity, $ufId = null)
    {
    }
    /**
     * @param Type\DateTime[] $value
     *
     * @return string
     */
    public static function serializeMultipleDatetime($value)
    {
    }
    /**
     * @param string $value
     *
     * @return array
     * @throws ObjectException
     */
    public static function unserializeMultipleDatetime($value)
    {
    }
    /**
     * @param Type\Date[] $value
     *
     * @return string
     */
    public static function serializeMultipleDate($value)
    {
    }
    /**
     * @param string $value
     *
     * @return array
     * @throws ObjectException
     */
    public static function unserializeMultipleDate($value)
    {
    }
}