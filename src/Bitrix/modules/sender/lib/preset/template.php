<?php

namespace Bitrix\Sender\Preset;

/**
 * Class Template
 * @package Bitrix\Sender\Preset
 * @deprecated
 * @internal
 */
class Template
{
    /**
     * Get list by type.
     *
     * @return array
     */
    public static function getListByType()
    {
    }
    /**
     * Get type list.
     *
     * @return array
     */
    public static function getTypeList()
    {
    }
    /**
     * Get template.
     *
     * @param string $type Template type.
     * @param string $id Template ID.
     * @return array|null
     */
    public static function getById($type, $id)
    {
    }
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return array
     */
    public static function getList(array $parameters = array())
    {
    }
    /**
     * Get template list html.
     *
     * @param string $containerId Container ID.
     * @return string
     * @deprecated Use component bitrix:sender.template.selector.
     */
    public static function getTemplateListHtml($containerId = 'TEMPLATE_CONTAINER')
    {
    }
}