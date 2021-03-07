<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class Audio
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class Audio
{
    const AUDIO_TYPE_PRESET = 'preset';
    const AUDIO_TYPE_FILE = 'file';
    /** @var string $fileId File name. */
    private $fileId = '';
    /** @var string $presetName Preset name. */
    private $presetName = '';
    /** @var string $messageCode Message code. */
    private $messageCode = '';
    private $duration;
    /**
     * Create instance.
     *
     * @return static
     */
    public static function create()
    {
    }
    /**
     * SpeechRate constructor.
     */
    public function __construct()
    {
    }
    /**
     * With value.
     *
     * @param string $value Value from user interface.
     * @return $this
     */
    public function withValue($value)
    {
    }
    /**
     * With json value.
     *
     * @param string $json Value as json string from DB.
     * @return $this
     */
    public function withJsonString($json)
    {
    }
    /**
     * With message code.
     *
     * @param string $messageCode Message code.
     * @return $this
     */
    public function withMessageCode($messageCode = null)
    {
    }
    /**
     * With file.
     *
     * @param string $fileId File id.
     * @return $this
     */
    public function withFile($fileId = null)
    {
    }
    /**
     * With preset.
     *
     * @param string $presetName Preset code.
     * @return $this
     */
    public function withPreset($presetName = null)
    {
    }
    /**
     * Does audio created from a preset
     *
     * @return bool
     */
    public function createdFromPreset()
    {
    }
    /**
     * Get audio file url
     * @param bool $useAbsoluteUrl Force using absolute url.
     * @return bool|string|null
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getFileUrl($useAbsoluteUrl = false)
    {
    }
    /**
     * Get value for db (as json string)
     * @return bool|string
     * @throws ArgumentException
     */
    public function getDbValue()
    {
    }
    /**
     * Get default audio preset url for player.
     * @return string
     */
    public function getDefaultFileUrl()
    {
    }
    /**
     * Get file id
     * @return string
     */
    public function getFileId()
    {
    }
    /**
     * Get preset code
     * @return string
     */
    public function getPreset()
    {
    }
    /**
     * Get message code
     * @return string
     */
    public function getMessageCode()
    {
    }
    /**
     * get duration of current audio
     * @return integer
     */
    public function getDuration()
    {
    }
    /**
     * Get preset audio duration
     * @param string $presetCode Preset code.
     * @return bool
     */
    protected function getPresetFileDuration($presetCode)
    {
    }
    /**
     * Get preset code without message code
     * @return string
     */
    private function getPresetCode()
    {
    }
    /**
     * Get mp3 file duration
     * @param int $fileId File id.
     * @return int
     */
    protected function getMp3fileDuration($fileId)
    {
    }
    /**
     * Get length of Id3v2 tag
     * @param string $header Header.
     * @return int
     */
    private function getId3v2TagLength($header)
    {
    }
    /**
     * Get frame info
     * @param string $frame Frame.
     * @return array
     */
    private function getFrameInfo($frame)
    {
    }
    /**
     * Is $fileName an url?
     * @param string $fileName Filename or url.
     * @return bool
     */
    private function isRemoteFile($fileName)
    {
    }
}