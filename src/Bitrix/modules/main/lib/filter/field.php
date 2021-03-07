<?php

namespace Bitrix\Main\Filter;

class Field
{
    /** @var DataProvider|null  */
    protected $dataProvider = null;
    /** @var string  */
    protected $id = '';
    /** @var string  */
    protected $name = '';
    /** @var string  */
    protected $type = '';
    /** @var bool  */
    protected $isDefault = false;
    /** @var array|null  */
    protected $data = null;
    /** @var bool  */
    protected $isPartial = false;
    public function __construct(\Bitrix\Main\Filter\DataProvider $dataProvider, $id, array $params = null)
    {
    }
    /**
     * Get Data Provider.
     * @return DataProvider
     */
    public function getDataProvider()
    {
    }
    /**
     * Set Data Provider.
     * @param DataProvider $dataProvider Data Provider.
     */
    public function setDataProvider(\Bitrix\Main\Filter\DataProvider $dataProvider)
    {
    }
    /**
     * Prepare complete field data for field.
     * @return array|null
     */
    protected function prepareData()
    {
    }
    /**
     * Prepare Field additional HTML.
     * @return string
     */
    public function prepareHtml()
    {
    }
    /**
     * Get Field ID.
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Set Field ID.
     * @param string $id Field ID.
     */
    public function setID($id)
    {
    }
    /**
     * Get localized name.
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set localized name.
     * @param string $name Field Name.
     */
    public function setName($name)
    {
    }
    /**
     * Get Field Type.
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Set Field Type.
     * @param string $type Field Type Name.
     */
    public function setType($type)
    {
    }
    /**
     * Check if default field.
     * @return bool
     */
    public function isDefault()
    {
    }
    /**
     * Mark Field as default.
     * @param bool $isDefault Default Field Flag.
     */
    public function markAsDefault($isDefault)
    {
    }
    /**
     * Check if partial field.
     * Partial Field does not have data. Field is not completely initialized.
     * You may call "assemble" to load required data in it.
     * @return bool
     */
    public function isPartial()
    {
    }
    /**
     * Get Field Data.
     * @return array|null
     */
    public function getData()
    {
    }
    /**
     * Get Data Item by key.
     * @param string $key Data Item Key.
     * @return mixed|null
     */
    public function getDataItem($key)
    {
    }
    /**
     * Assemble field data.
     * This method will complete initialization of partially initialized field.
     * @return void
     */
    public function assemble()
    {
    }
    /**
     * Put Field Parameters in array.
     * @param array|null $options Options array.
     * @return array
     */
    public function toArray(array $options = null)
    {
    }
}