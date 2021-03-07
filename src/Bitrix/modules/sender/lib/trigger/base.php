<?php

namespace Bitrix\Sender\Trigger;

abstract class Base
{
    protected $fieldPrefix;
    protected $fieldValues;
    protected $fieldFormName;
    protected $moduleId;
    protected $siteId;
    protected $fields;
    protected $params;
    protected $isRunForOldData = false;
    protected $recipient;
    /**
     * @param string $moduleId
     * @return void
     */
    public function setModuleId($moduleId)
    {
    }
    /**
     * @return mixed
     */
    public function getModuleId()
    {
    }
    /**
     * @param string $siteId
     * @return void
     */
    public function setSiteId($siteId)
    {
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @return bool
     */
    public function requireConfigure()
    {
    }
    /**
     * @return bool
     */
    public static function isClosed()
    {
    }
    /**
     * @return bool
     */
    public static function canBeTarget()
    {
    }
    /**
     * @return bool
     */
    public static function canRunForOldData()
    {
    }
    /**
     * @param bool $isRunForOldData
     */
    public function setRunForOldData($isRunForOldData)
    {
    }
    /**
     * @return bool
     */
    public function isRunForOldData()
    {
    }
    /**
     * @param array $fieldValues
     * @return void
     */
    public function setFields(array $fieldValues = null)
    {
    }
    /**
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * @param string $name
     * @param mixed|null $defaultValue
     * @return mixed|null
     */
    public function getFieldValue($name, $defaultValue = null)
    {
    }
    /**
     * @param array $fieldValues
     * @return void
     */
    public function setParams(array $fieldValues = null)
    {
    }
    /**
     * @return array
     */
    public function getParams()
    {
    }
    /**
     * @param string $name
     * @param mixed|null $defaultValue
     * @return mixed
     */
    public function getParam($name, $defaultValue = null)
    {
    }
    /**
     * @param string $fieldFormName
     * @return void
     */
    public function setFieldFormName($fieldFormName)
    {
    }
    /**
     * @return string
     */
    public function getFieldFormName()
    {
    }
    /**
     * @param string $fieldPrefix
     * @return void
     */
    public function setFieldPrefix($fieldPrefix)
    {
    }
    /**
     * @return string
     */
    public function getFieldPrefix()
    {
    }
    /**
     * @param $id
     * @return string
     */
    public function getFieldId($id)
    {
    }
    /**
     * @param $name
     * @return string
     */
    public function getFieldName($name)
    {
    }
    /**
     * @return string
     */
    public function getFullEventType()
    {
    }
    /** @return array */
    public function getMailEventToPrevent()
    {
    }
    /** @return bool */
    public function filter()
    {
    }
    /**
     * @return string
     */
    public function getForm()
    {
    }
    /**
     * @return Connector\Result
     */
    public function getRecipientResult()
    {
    }
    /**
     * @return array
     */
    public function getPersonalizeFields()
    {
    }
    /**
     * @return array
     */
    public static function getPersonalizeList()
    {
    }
    /**
     * @return string
     */
    public abstract function getName();
    /**
     * @return string
     */
    public abstract function getCode();
    /**
     * @return string
     */
    public abstract function getEventModuleId();
    /**
     * @return string
     */
    public abstract function getEventType();
    /**
     * @return array|\Bitrix\Main\DB\Result|\CAllDBResult
     */
    public abstract function getRecipient();
}