<?php

namespace Bitrix\Sender\Integration\Crm\Connectors;

/**
 * Class Lead
 * @package Bitrix\Sender\Integration\Crm\Connectors
 */
class Lead extends \Bitrix\Sender\Connector\BaseFilter
{
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get query.
     *
     * @return null|Entity\Query
     */
    public function getQuery($selectList = [])
    {
    }
    /**
     * Get data count by type.
     *
     * @return null|array
     */
    protected function getDataCountByType()
    {
    }
    /**
     * Get data.
     *
     * @return array|Result
     */
    public function getData()
    {
    }
    /**
     * Get personalize field list.
     *
     * @return array
     */
    public static function getPersonalizeList()
    {
    }
    /**
     * Get filter fields.
     *
     * @return array
     */
    public static function getUiFilterFields()
    {
    }
    /**
     * Get filter presets.
     *
     * @return array
     */
    public static function getUiFilterPresets()
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
    protected function onInitResultView()
    {
    }
    public function getUiFilterId()
    {
    }
    /**
     * Get fields for statistic
     * @return array
     */
    public function getStatFields()
    {
    }
    /**
     * @param array $selectList
     *
     * @return array|Result|\CAllDBResult
     */
    public function getDataWithCustomSelect($selectList = [])
    {
    }
}