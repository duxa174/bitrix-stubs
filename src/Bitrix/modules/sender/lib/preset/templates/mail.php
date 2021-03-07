<?php

namespace Bitrix\Sender\Preset\Templates;

/**
 * Class Mail
 * @package Bitrix\Sender\Preset\Templates
 */
class Mail
{
    const LOCAL_DIR = '/modules/sender/preset/template_v2/';
    /**
     * Return base templates.
     *
     * @param string|null $templateType Template type.
     * @param string|null $templateId Template ID.
     * @param string|null $messageCode Message code.
     * @return array
     */
    public static function onPresetTemplateList($templateType = null, $templateId = null, $messageCode = null)
    {
    }
    private static function getFileContent($fileName)
    {
    }
    /**
     * Get template html.
     *
     * @param array $replace Replace data.
     * @return mixed|null
     */
    public static function replaceTemplateHtml($content, $replace = [])
    {
    }
    /**
     * Get template html.
     *
     * @return string|null
     */
    public static function getTemplateHtml()
    {
    }
    private static function getTemplates($templateId = null)
    {
    }
}