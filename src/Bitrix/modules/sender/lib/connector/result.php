<?php

namespace Bitrix\Sender\Connector;

class Result
{
    /** @var \Bitrix\Main\DB\Result $resource */
    public $resource;
    /** @var \CAllDBResult $resourceCDBResult */
    public $resourceCDBResult;
    /** fields filter */
    protected $fields;
    /** additional fields */
    protected $additionalFields;
    /** disallowed fields */
    protected $fieldsDisallowed = ['NAME', 'USER_ID'];
    /** @var  integer $dataTypeId Data type ID. */
    protected $dataTypeId = \Bitrix\Sender\Recipient\Type::EMAIL;
    /**
     * @param array|\Bitrix\Main\DB\Result|\CAllDBResult $resource
     */
    public function __construct($resource)
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
     * @param array $fields
     */
    public function setFilterFields(array $fields)
    {
    }
    /**
     * @return array
     */
    public function getFilterFields()
    {
    }
    /**
     * @param array $additionalFields
     */
    public function setAdditionalFields(array $additionalFields)
    {
    }
    /**
     * @return array|null
     */
    public function fetchPlain()
    {
    }
    /**
     * @return array|null
     */
    public function fetch()
    {
    }
    protected function fetchModifierFields(array $result)
    {
    }
    /**
     * @return int
     */
    public function getSelectedRowsCount()
    {
    }
    /**
     * Get query sql.
     *
     * @return string|null
     */
    public function getQuerySql()
    {
    }
}