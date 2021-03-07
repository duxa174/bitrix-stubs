<?php

class CBitrixPlayer extends \CBitrixComponent
{
    protected const PLAYER_JS_PATH = '/bitrix/js/fileman/player';
    protected $playerType;
    protected $jwConfig;
    protected $path;
    protected $warning = '';
    protected $conf;
    protected $jwFlashPath;
    public static function escapeFlashVar($str)
    {
    }
    public static function isAndroid() : bool
    {
    }
    public static function isIOS() : bool
    {
    }
    public static function isMobile() : bool
    {
    }
    protected function addFlashVar(&$jwConfig, $key, $value, $default = \false)
    {
    }
    protected function addJsVar(&$wmvConfig, $key, $value, $default = \false)
    {
    }
    protected static function getFileExtension($path)
    {
    }
    public function getComponentId()
    {
    }
    // fix 0084070
    public function GetContentType($src)
    {
    }
    /**
     * Find an absolute path for html, set mime-type
     *
     * @param $path
     * @param null $type
     * @param bool $warning
     * @return string
     */
    protected function findCorrectFile($path, &$type = \null, $warning = \false)
    {
    }
    protected static function GetRtmpContentType($src)
    {
    }
    public static function isYoutubeSource($path)
    {
    }
    public static function isVimeoSource($path)
    {
    }
    public static function isStreamingSource($path)
    {
    }
    public static function isFlashSource($path)
    {
    }
    public static function isAudioSource($path)
    {
    }
    public static function isWmvSource($path, $type)
    {
    }
    /**
     * Parse xml playlist. Return array of tracks or false on wrong format
     *
     * @param $path
     * @return array|bool
     */
    public function parsePlaylist($path)
    {
    }
    public function onPrepareComponentParams($arParams)
    {
    }
    public function executeComponent()
    {
    }
    /**
     * Generate configs for wmv-player
     */
    protected function processWmv()
    {
    }
    /**
     * Generate configs for jwplayer
     */
    protected function processJwPlayer()
    {
    }
    /**
     * Process one file. Return array on success or false if track should be removed from playlist
     *
     * @param $arTrack
     * @return array|bool
     */
    protected function processTrack(&$arTrack)
    {
    }
    /**
     * Find skin and apply it
     */
    protected function processSkin()
    {
    }
    /**
     * Process playlist. Fill config, show popup for playlist edit
     */
    protected function processPlaylist()
    {
    }
}