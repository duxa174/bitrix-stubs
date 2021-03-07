<?php

namespace Bitrix\Iblock\Template;

/**
 * Class Helper
 * Provides some helper functions.
 * @package Bitrix\Iblock\Template
 */
class Helper
{
    /**
     * Returns array with two elements.
     * First with template and second with optional modifiers.
     *
     * @param string $template Template string. For example: "{=this.name}/lt-".
     *
     * @return array
     */
    public static function splitTemplate($template)
    {
    }
    /**
     * Returns array of modifiers if any found.
     *
     * @param string $modifiers Modifiers string. for example: "lt-".
     *
     * @return array
     */
    public static function splitModifiers($modifiers)
    {
    }
    /**
     * Returns TEMPLATE with modifiers encoded and concatenated.
     *
     * @param array[string]string $template Template information as it comes from DB.
     *
     * @return string
     */
    public static function convertArrayToModifiers(array $template)
    {
    }
    /**
     * Returns $template with additional information.
     * TEMPLATE field without modifiers
     * and each modifier as distinct field.
     *
     * @param array[string]string $template Template information as it comes from DB.
     *
     * @return array[string]string
     */
    public static function convertModifiersToArray(array $template = null)
    {
    }
    /**
     * Function returns file name formatted by the template.
     *
     * @param \Bitrix\Iblock\InheritedProperty\BaseTemplate $ipropTemplates Templates to lookup.
     * @param string $templateName Name of the template to choose from $ipropTemplates.
     * @param array $fields Array contains fields for processing the template.
     * @param array $file Array contains information about file in format of $_FILES.
     *
     * @return string
     */
    public static function makeFileName(\Bitrix\Iblock\InheritedProperty\BaseTemplate $ipropTemplates, $templateName, array $fields, array $file)
    {
    }
}