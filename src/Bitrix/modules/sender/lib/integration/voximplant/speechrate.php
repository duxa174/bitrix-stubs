<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class SpeechRate
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class SpeechRate
{
    /** @var string $speedId Speed ID. */
    private $speedId;
    /** @var string $text Text. */
    private $text = '';
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
     * With speed.
     *
     * @param string|null $speedId
     * @return $this
     */
    public function withSpeed($speedId = null)
    {
    }
    /**
     * With text.
     *
     * @param string $text
     * @return $this
     */
    public function withText($text = '')
    {
    }
    /**
     * Return speech duration of text.
     *
     * @return integer
     */
    public function getDuration()
    {
    }
    private function getRatioPerChar()
    {
    }
    /**
     * Get list of rates: chars in 30 seconds.
     *
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Get base interval in seconds.
     *
     * @return integer
     */
    public static function getBaseInterval()
    {
    }
}