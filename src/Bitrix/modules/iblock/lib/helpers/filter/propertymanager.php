<?php

namespace Bitrix\Iblock\Helpers\Filter;

class PropertyManager
{
    private $iblockId = 0;
    private $listProperty = null;
    private $filterFields = null;
    private $catalogIncluded = null;
    private $catalog = null;
    public function __construct($iblockId)
    {
    }
    /**
     * @return array
     */
    public function getFilterFields()
    {
    }
    /**
     * @param string $filterId
     * @return void
     */
    public function renderCustomFields($filterId)
    {
    }
    /**
     * @param string $filterId
     * @param array &$filter
     * @return void
     */
    public function AddFilter($filterId, array &$filter)
    {
    }
    /**
     * @return array
     */
    private function getListProperty()
    {
    }
}