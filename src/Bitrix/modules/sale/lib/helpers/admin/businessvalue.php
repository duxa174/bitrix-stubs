<?php

namespace Bitrix\Sale\Helpers\Admin;

final class BusinessValueControl
{
    private $name;
    private $consumerCodePersonMapping = array();
    private $errors = array();
    public function __construct($name)
    {
    }
    public function setMapFromPost()
    {
    }
    /** @internal @deprecated */
    public static function sanitizeMapping($personTypeId, array &$mapping, array $providerKeys = null)
    {
    }
    public function changeConsumerKey($fromConsumerKey, $toConsumerKey)
    {
    }
    public function saveMap()
    {
    }
    private static function getTabControl($name, $personGroupCodes)
    {
    }
    private static function getPersonGroupCodes(array $consumers, array $filter)
    {
    }
    public function renderMap(array $options = array())
    {
    }
    /** @internal */
    public static function renderMapping(array $mappings, $inputNamePrefix, array $providerInput, array $providerValueInput, array $commonProviderInput = null, array $commonProviderValueInput = null)
    {
    }
    private static function correctMapping(array $providerInput, array $providerValueInput, array $mapping)
    {
    }
    private static function renderScript()
    {
    }
    /** @internal */
    public static function getFilter($filter)
    {
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    private static $personTypes;
    private static $personProviderInput, $personProviderValueInput;
    private static $groups, $consumerInput, $consumerCodeInput;
    /** @internal */
    public static function initialize()
    {
    }
    /** @internal */
    public static function getProviderInput($personTypeId, array $providerKeys = null)
    {
    }
    /** @internal */
    public static function getValueInput($personTypeId, $providerKey = null)
    {
    }
    /** @internal */
    public static function getConsumerInput()
    {
    }
    /** @internal */
    public static function getConsumerCodeInput()
    {
    }
    private static function getProviderInputs(array $providers, array $personTypes)
    {
    }
    private static function getConsumerInputs(array $consumers, array $groups)
    {
    }
    private static function sortRenameGroups(array &$groupedItems, array $groups, $flattenEmptyGroup = false)
    {
    }
}