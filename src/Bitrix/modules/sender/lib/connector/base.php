<?php

namespace Bitrix\Sender\Connector;

abstract class Base
{
    protected $fieldPrefix;
    protected $fieldPrefixExtended;
    protected $fieldValues;
    protected $fieldFormName;
    protected $moduleId;
    /** @var  ResultView $resultView View of result. */
    protected $resultView;
    /** @var  integer $dataTypeId Data type ID. */
    protected $dataTypeId = \Bitrix\Sender\Recipient\Type::EMAIL;
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
     * Get data type ID.
     *
     * @return integer
     */
    public function getDataTypeId()
    {
    }
    /**
     * Set data type ID.
     *
     * @param integer $dataTypeId Data type ID.
     * @return void
     */
    public function setDataTypeId($dataTypeId)
    {
    }
    /**
     * @param string $fieldFormName
     * @return void
     */
    public function setFieldFormName($fieldFormName)
    {
    }
    /** @return string */
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
    /** @return string */
    public function getFieldPrefix()
    {
    }
    /**
     * @param string $fieldPrefixExtended
     * @return void
     */
    public function setFieldPrefixExtended($fieldPrefixExtended)
    {
    }
    /** @return string */
    public function getFieldPrefixExtended()
    {
    }
    /**
     * Set field values.
     *
     * @param array $fieldValues Values.
     * @return void
     */
    public function setFieldValues(array $fieldValues = null)
    {
    }
    /**
     * Get field values.
     *
     * @return array
     */
    public function getFieldValues()
    {
    }
    /**
     * Return true if it has field values.
     *
     * @return bool
     */
    public function hasFieldValues()
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
     * @param $name
     * @param mixed $defaultValue
     * @return null
     */
    public function getFieldValue($name, $defaultValue = null)
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Get data count.
     *
     * @return integer
     */
    public function getDataCount()
    {
    }
    /**
     * Get data count by type.
     *
     * @return null|array|DataCounter
     */
    protected function getDataCountByType()
    {
    }
    /**
     * Get data counter.
     *
     * @return DataCounter
     */
    final function getDataCounter()
    {
    }
    /**
     * Get result.
     *
     * @return Result
     */
    final function getResult()
    {
    }
    /**
     * Return true if support view of result.
     *
     * @return bool
     */
    public function isResultViewable()
    {
    }
    /**
     * Get result view.
     *
     * @return ResultView
     * @return void
     */
    public function getResultView()
    {
    }
    /**
     * Set result view.
     *
     * @param ResultView $resultView Result view.
     * @return void
     */
    public function setResultView($resultView)
    {
    }
    protected function onInitResultView()
    {
    }
    /**
     * @return bool
     */
    public function requireConfigure()
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
     *
     *
     * @return array|\Bitrix\Main\DB\Result|\CAllDBResult
     */
    public abstract function getData();
    /**
     * @param array $selectList
     *
     * @return array|\Bitrix\Main\DB\Result|\CAllDBResult
     */
    public function getDataWithCustomSelect($selectList = [])
    {
    }
    /**
     * @return string
     */
    public abstract function getForm();
    /**
     * Get fields for statistic
     * @return array
     */
    public function getStatFields()
    {
    }
}