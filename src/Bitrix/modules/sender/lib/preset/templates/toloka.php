<?php

namespace Bitrix\Sender\Preset\Templates;

/**
 * Class Rc
 * @package Bitrix\Sender\Preset\Templates
 */
class Toloka
{
    const IMAGE_DIR = '/images/sender/preset/events/';
    const LOCAL_DIR = '/modules/sender/preset/template_toloka/';
    private static function getFileContent($fileName)
    {
    }
    private static function fileExists($path) : bool
    {
    }
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
    private static function getListByType()
    {
    }
    private static function getTemplates($templateId = null, $messageCode = null)
    {
    }
}