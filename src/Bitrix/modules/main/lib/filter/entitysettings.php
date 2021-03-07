<?php

namespace Bitrix\Main\Filter;

abstract class EntitySettings extends \Bitrix\Main\Filter\Settings
{
    const FLAG_NONE = 0;
    /** @var int */
    protected $flags = 0;
    function __construct(array $params)
    {
    }
    /**
     * Get Entity Type Name.
     * @return string
     */
    public abstract function getEntityTypeName();
    /**
     * Get User Field Entity ID.
     * @return string
     */
    public abstract function getUserFieldEntityID();
    /**
     * Check if specified flag is enabled.
     * @param int $flag Flag value.
     * @return bool
     */
    public function checkFlag($flag)
    {
    }
}