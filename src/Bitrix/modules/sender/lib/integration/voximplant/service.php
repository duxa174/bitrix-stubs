<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class Service
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class Service
{
    /**
     * Can use.
     *
     * @return bool|null
     */
    public static function canUse()
    {
    }
    /**
     * Send.
     *
     * @param string $outputNumber Id of the line to perform outgoing call.
     * @param string $number Number to be called.
     * @param string $text Text to say.
     * @param string $voiceLanguage TTS voice (@see: Tts\Language).
     * @param string $voiceSpeed TTS voice speed (@see Tts\Speed).
     * @param string $voiceVolume TTS voice volume (@see Tts\Volume).
     * @return string|null
     */
    public static function send($outputNumber, $number, $text, $voiceLanguage = '', $voiceSpeed = '', $voiceVolume = '')
    {
    }
    /**
     * Send recordered audio file.
     *
     * @param string $outputNumber Id of the line to perform outgoing call.
     * @param string $number Number to be called.
     * @param string $fileUrl Audio file to be voiced.
     * @return string|null
     */
    public static function sendFile($outputNumber, $number, $fileUrl)
    {
    }
    /**
     * OnInfoCallResult event handler.
     * @param int  $callId Call id.
     * @param array $callData Call data.
     * @return void
     */
    public static function onInfoCallResult($callId, $callData)
    {
    }
    public static function getFormattedOutputNumber($value)
    {
    }
}