<?php

namespace Bitrix\Sender\Templates;

/**
 * Class Recent
 * @package Bitrix\Sender\Templates
 */
class Recent
{
    private static $maxCount = 4;
    private static $cacheTtl = 3600;
    /**
     * Return recent templates.
     *
     * @param string|null $templateType Template type.
     * @param string|null $templateId Template ID.
     * @param string|null $messageCode Message code.
     * @return array
     */
    public static function onPresetTemplateList($templateType = null, $templateId = null, $messageCode = null)
    {
    }
    private static function getTemplates($messageCode = null)
    {
    }
}