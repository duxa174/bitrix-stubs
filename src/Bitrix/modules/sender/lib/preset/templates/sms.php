<?php

namespace Bitrix\Sender\Preset\Templates;

/**
 * Class Sms
 * @package Bitrix\Sender\Preset\Templates
 */
class Sms
{
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
    private static function getTemplates($templateId = null, $messageCode = null)
    {
    }
}