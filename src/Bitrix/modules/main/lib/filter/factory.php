<?php

namespace Bitrix\Main\Filter;

class Factory
{
    protected static $methods = null;
    /**
     * Prepare Entity Filter Factory Methods
     * Function will rise event "OnBuildFilterFactoryMethods" if it required.
     * @return array
     */
    protected static function prepareMethods()
    {
    }
    /**
     * Create Entity Filter by Entity Type Name.
     * @param string $entityTypeName Entity Type Name
     * @param array $settingsParams Filter Settings Params
     * @param array $additionalParams Factory Method Additional Params.
     * @return Filter
     * @throws Main\NotSupportedException
     */
    public static function createEntityFilter($entityTypeName, array $settingsParams, array $additionalParams = null)
    {
    }
}