<?php

namespace Bitrix\Rest;

abstract class UserFieldProxy
{
    protected $entityID = '';
    /** @var \CUser @ */
    protected $user = null;
    protected $isAdminUser = null;
    protected $isAuthorizedUser = null;
    protected $namePrefix = '';
    private static $langs = null;
    private static $fieldsInfo = null;
    private static $langIncluded = false;
    function __construct($entityID, \CUser $user = null)
    {
    }
    public function getEntityID()
    {
    }
    public function getNamePrefix()
    {
    }
    public function setNamePrefix($prefix)
    {
    }
    public static function getFields()
    {
    }
    public static function getEnumerationElementFields()
    {
    }
    public static function getSettingsFields($typeID)
    {
    }
    public static function getTypes(\CRestServer $server = null)
    {
    }
    public function add(array $fields)
    {
    }
    public function get($ID)
    {
    }
    public function getList(array $order, array $filter)
    {
    }
    public function update($ID, array $fields)
    {
    }
    public function delete($ID)
    {
    }
    protected static function sanitizeFields(array &$fields)
    {
    }
    protected function isAuthorizedUser()
    {
    }
    protected function isAdminUser()
    {
    }
    protected function getCurrentUser()
    {
    }
    protected static function getAllLanguages()
    {
    }
    protected static function prepareLabels(array &$fields, $name, $defaultLabel)
    {
    }
    protected function checkCreatePermission()
    {
    }
    protected function checkReadPermission()
    {
    }
    protected function checkUpdatePermission()
    {
    }
    protected function checkDeletePermission()
    {
    }
    private static function includeLangFile()
    {
    }
}