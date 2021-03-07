<?php

namespace Bitrix\Sender\Preset;

/**
 * Class TemplateBase
 * @package Bitrix\Sender\Preset
 * @deprecated
 * @internal
 */
class TemplateBase
{
    const LOCAL_DIR_TMPL = '/modules/sender/preset/template/';
    const LOCAL_DIR_IMG = '/images/sender/preset/template/';
    /**
     * Return base templates.
     *
     * @param string|null $templateType Template type.
     * @param string|null $templateId Template ID.
     * @return array
     */
    public static function onPresetTemplateList($templateType = null, $templateId = null)
    {
    }
    /**
     * Return site templates.
     *
     * @param string|null $templateType Template type.
     * @param string|null $templateId Template ID.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onPresetTemplateListSite($templateType = null, $templateId = null)
    {
    }
    /**
     * @return array
     */
    public static function getListName()
    {
    }
    /**
     * @param string $templateName
     * @return array|null
     */
    public static function getById($templateName)
    {
    }
    /**
     * @param string $template
     * @return string
     */
    protected static function replaceTemplateByDefaultData($template)
    {
    }
    /**
     * @param $templateName
     * @param $html
     * @return bool|int
     */
    public static function update($templateName, $html)
    {
    }
}