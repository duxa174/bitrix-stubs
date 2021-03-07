<?php

namespace Bitrix\Sender\Preset\Templates;

/**
 * Class Rc
 * @package Bitrix\Sender\Preset\Templates
 */
class Rc
{
    const IMAGE_DIR = '/images/sender/preset/events/';
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
    private static function getProvidedMessageCodes()
    {
    }
    private static function getListByType()
    {
    }
    private static function getTemplates($templateId = null, $messageCode = null)
    {
    }
}