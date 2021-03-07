<?php

namespace Bitrix\Sale;

final class BusinessValue
{
    const ENTITY_DOMAIN = 'E';
    const INDIVIDUAL_DOMAIN = 'I';
    private static $redefinedFields = array();
    private static $consumers = array();
    private static $consumerCodePersonMapping = array();
    /** @deprecated */
    public static function getValueFromProvider(\Bitrix\Sale\IBusinessValueProvider $provider = null, $codeKey, $consumerKey)
    {
    }
    /**
     * @param array $fields
     */
    public static function redefineProviderField(array $fields)
    {
    }
    /** Get business value.
     * @param string $codeKey
     * @param string|null $consumerKey
     * @param IBusinessValueProvider|string|integer|null $personTypeId
     * @param mixed $providerInstance
     * @return mixed
     */
    public static function get($codeKey, $consumerKey = null, $personTypeId = null, $providerInstance = null)
    {
    }
    /** Check if mapping has been set.
     * @param string $codeKey
     * @param string|null $consumerKey
     * @param string|integer|null $personTypeId
     * @return bool
     */
    public static function isSetMapping($codeKey, $consumerKey = null, $personTypeId = null)
    {
    }
    const MATCH_ALL = -1;
    const MATCH_EXACT = 1;
    const MATCH_COMMON = 2;
    const MATCH_DEFAULT = 4;
    /** Get mapping.
     * @param string $codeKey
     * @param string|null $consumerKey
     * @param string|integer|null $personTypeId
     * @param array $options
     * @return array with PROVIDER_KEY and PROVIDER_VALUE if mapping was found, or empty array
     */
    public static function getMapping($codeKey, $consumerKey = null, $personTypeId = null, array $options = array())
    {
    }
    /** Set mapping.
     * @param string $codeKey
     * @param string|null $consumerKey
     * @param string|integer|null $personTypeId
     * @param array $mapping
     * @param bool $withCommon internal, do not use!
     * @return \Bitrix\Main\Entity\Result
     * @throws \Exception
     */
    public static function setMapping($codeKey, $consumerKey, $personTypeId, array $mapping, $withCommon = false)
    {
    }
    /**
     * @param $consumerKey
     * @param null $personTypeId
     * @throws SystemException
     */
    public static function delete($consumerKey, $personTypeId = null)
    {
    }
    /**
     * @param $consumerKey
     * @param $code
     * @param $personTypeId
     * @param $mapping
     * @throws SystemException
     */
    private static function deleteInternal($consumerKey, $code, $personTypeId, $mapping)
    {
    }
    /** @internal do not use! */
    public static function getConsumerCodePersonMapping()
    {
    }
    /**
     * Get all registered providers.
     * @return array
     * @throws SystemException
     */
    public static function getProviders()
    {
    }
    private static $commonConsumer = array();
    /** Get all registered consumers.
     * @return array
     * @throws SystemException
     */
    public static function getConsumers()
    {
    }
    private static function addConsumerByRef($consumerKey, array &$consumer)
    {
    }
    public static function addConsumer($consumerKey, array $consumer)
    {
    }
    public static function changeConsumer($consumerKey, array $consumer)
    {
    }
    public static function changeConsumerKey($fromConsumerKey, $toConsumerKey)
    {
    }
    public static function getGroups()
    {
    }
    /** @internal */
    private static function sortArray(array &$data)
    {
    }
    /** @internal */
    public static function getPersonTypes($all = false, array $resetAllPersonTypes = null)
    {
    }
    /**
     * @param $codeKey
     * @param array $oldMapping
     * @param array $newMapping
     * @param null $consumerKey
     * @param null $personTypeId
     * @return \Bitrix\Main\Entity\Result
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function updateMapping($codeKey, array $oldMapping, array $newMapping, $consumerKey = null, $personTypeId = null) : \Bitrix\Main\Entity\Result
    {
    }
    // DEPRECATED API //////////////////////////////////////////////////////////////////////////////////////////////////
    /** @deprecated */
    public static function install($parentName, $translationSource, $data)
    {
    }
    /** @deprecated */
    const COMMON_PERSON_ID = 0;
    // person type id
    /** @deprecated */
    const COMMON_DOMAIN = 'C';
}
/** @deprecated */
class BusinessValueHandlers
{
    public static function getProviders()
    {
    }
    public static function getConsumers()
    {
    }
    public static function getGroups()
    {
    }
}
/** @internal */
class BusinessValueConsumer1C
{
    const CONSUMER_KEY = '1C';
    private static $codes, $personMaxIndex;
    private static $systemProviderKeys = array('', 'VALUE', 'USER', 'ORDER', 'PROPERTY', 'COMPANY', 'PAYMENT', 'SHIPMENT');
    private static $rekvProviderKeys = array('VALUE', 'USER', 'ORDER', 'PROPERTY', 'COMPANY', 'PAYMENT', 'SHIPMENT');
    private static $codeNameInput = array('TYPE' => 'STRING', 'SIZE' => 40, 'MAXLENGTH' => 50);
    public static function &getConsumers()
    {
    }
    public static function getRekvCodeKey($personTypeId, $codeIndex)
    {
    }
    private static function getRekvCode($personTypeId, $codeIndex, $name)
    {
    }
    public static function sanitizeMapping($codeKey, $personTypeId, array &$mapping)
    {
    }
    public static function setMapping($codeKey, $personTypeId, array $mapping)
    {
    }
    public static function renderColumns($codeKey, $personTypeId, array $mappings, $inputNamePrefix)
    {
    }
    public static function getJavaScript()
    {
    }
}