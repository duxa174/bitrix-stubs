<?php

namespace Bitrix\Sender\Preset\Templates;

/**
 * Class Sms
 * @package Bitrix\Sender\Preset\Templates
 */
class AudioCall
{
    const AUDIO_DIR = 'http://dl.bitrix24.com/sender/audiocall/';
    const METADATA_FILE = 'http://dl.bitrix24.com/sender/audiocall/metadata.json';
    /**
     * Get supported lang codes
     * @return array
     */
    public static function getSupportedLangs()
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
    /**
     * Get audio file url by preset code
     * @param string $code Preset code.
     * @return bool|string
     */
    public static function getAudioFileUrlByCode($code)
    {
    }
    /**
     * Does preset exists
     * @param string $code Preset code.
     * @return bool
     */
    public static function presetExists($code)
    {
    }
    /**
     * Get audio duration by preset code
     * @param string $code Preset code.
     * @return bool|int
     */
    public static function getDurationByCode($code)
    {
    }
    /**
     * Get default preset code
     * @return mixed
     */
    public static function getDefaultCode()
    {
    }
    /**
     * Get preset code with lang
     * @param string $code Preset code.
     * @return string
     */
    private static function getCodeWithLang($code)
    {
    }
    /**
     * Get current audio lang
     * @return string
     */
    private static function getLang()
    {
    }
    /**
     * Get templates list
     * @param null|int $templateId Template id.
     * @return array
     */
    private static function getTemplates($templateId = null)
    {
    }
    /**
     * Get presets extra data
     * @return array|bool
     * @throws \Bitrix\Main\SystemException
     */
    private static function getMetadata()
    {
    }
}