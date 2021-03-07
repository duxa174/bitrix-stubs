<?php

namespace Bitrix\Main\Filter;

abstract class EntityDataProvider extends \Bitrix\Main\Filter\DataProvider
{
    /**
     * Get specified entity field caption.
     * @param string $fieldID Field ID.
     * @return string
     * @throws Main\NotImplementedException
     */
    protected function getFieldName($fieldID)
    {
    }
    /**
     * Create filter field.
     * @param string $fieldID Field ID.
     * @param array|null $params Field parameters (optional).
     * @return Field
     * @throws Main\NotImplementedException
     */
    protected function createField($fieldID, array $params = null)
    {
    }
}