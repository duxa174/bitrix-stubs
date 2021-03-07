<?php

namespace Bitrix\MobileApp;

class Mobile
{
    public static $platform = "ios";
    public static $apiVersion = 1;
    public static $pgVersion = "2.0.0";
    public static $supportedCordovaVersion = "3.6.3";
    public static $isDev = false;
    protected static $instance;
    protected static $isAlreadyInit = false;
    protected static $systemVersion = 9;
    private $pixelRatio = 1.0;
    private $minScale = false;
    private $iniScale = false;
    private $maxScale = false;
    private $scale = 1.2;
    private $width = false;
    private $userScalable = "no";
    private $deviceWidth = 320;
    private $deviceHeight = 480;
    private $screenCategory = "NORMAL";
    private $device = "";
    private $largeScreenSupport = true;
    private $isWebRtcSupported = false;
    private $isBXScriptSupported = false;
    private function __construct()
    {
    }
    /**
     * @param boolean $isWebRtcSupported
     */
    public function setWebRtcSupport($isWebRtcSupported)
    {
    }
    /**
     * @param boolean $isBXScriptSupported
     */
    public function setBXScriptSupported($isBXScriptSupported)
    {
    }
    /**
     * Return type of current device
     * @return string
     */
    public function getDevice()
    {
    }
    /**
     * Gets the value of pixelRatio.
     *
     * @return mixed
     */
    public function getPixelRatio()
    {
    }
    /**
     * Sets the value of pixelRatio.
     *
     * @param mixed $pixelRatio the pixelRatio
     */
    public function setPixelRatio($pixelRatio)
    {
    }
    /**
     * Returns true if mobile application made this request in background
     * @return bool
     */
    public static function isAppBackground()
    {
    }
    /**
     * Initiate the mobile platform
     */
    public static function Init()
    {
    }
    /**
     *  detects mobile platform and attaches all needed javascript files
     */
    protected function _Init()
    {
    }
    /**
     * @return \Bitrix\MobileApp\Mobile
     */
    public static function getInstance()
    {
    }
    /**
     * Sets viewport-metadata
     */
    public static function initScripts()
    {
    }
    /**
     * @return boolean
     */
    public function getBXScriptSupported()
    {
    }
    /**
     * Use it to get current value of "viewport"-metadata
     *
     * @param string $width
     *
     * @return mixed|string
     */
    public function getViewPort($width = "")
    {
    }
    /**
     * Gets the value of deviceWidth.
     *
     * @return mixed
     */
    public function getDeviceWidth()
    {
    }
    /**
     * Sets the value of deviceWidth.
     *
     * @param mixed $deviceWidth the deviceWidth
     */
    public function setDeviceWidth($deviceWidth)
    {
    }
    /**
     * Use it to get value of viewport-metadata for iPad.
     *
     * @param int $width
     *
     * @return mixed
     */
    public function getIPadViewPort($width = 320)
    {
    }
    /**
     * Gets the value of deviceDpi.
     *
     * @return mixed
     */
    public function getScreenCategory()
    {
    }
    /**
     * Sets the value of screenCategory.
     *
     * @param mixed $screenCategory the screenCategory
     */
    public function setScreenCategory($screenCategory)
    {
    }
    /**
     * Use it to get value of viewport-metadata for large screen of android based device.
     */
    public function getLargeScreenViewPort()
    {
    }
    /**
     * Gets target dpi for a viewport meta data
     *
     * @return string
     */
    public function getTargetDpi()
    {
    }
    /**
     * Gets the value of iniScale.
     *
     * @return mixed
     */
    public function getIniScale()
    {
    }
    /**
     * Sets the value of iniScale.
     *
     * @param mixed $iniScale the iniScale
     */
    public function setIniScale($iniScale)
    {
    }
    /**
     * Gets the value of maxScale.
     *
     * @return mixed
     */
    public function getMaxScale()
    {
    }
    /**
     * Sets the value of maxScale.
     *
     * @param mixed $maxScale the maxScale
     */
    public function setMaxScale($maxScale)
    {
    }
    /**
     * Gets the value of minScale.
     *
     * @return mixed
     */
    public function getMinScale()
    {
    }
    /**
     * Sets the value of minScale.
     *
     * @param mixed $minScale the minScale
     */
    public function setMinScale($minScale)
    {
    }
    /**
     * Return width of device's screen in pixels
     * @return integer
     */
    public function getWidth()
    {
    }
    /**
     * @param integer $width
     */
    public function setWidth($width)
    {
    }
    /**
     * Returns the value of  self::platform
     * @return string
     */
    public static function getPlatform()
    {
    }
    /**
     * Returns value of parameter user-scalable which will be used in viewport meta tag
     * @return string
     */
    public function getUserScalable()
    {
    }
    /**
     * Sets value of parameter "user-scalable" which will be used in viewport meta tag
     * @param boolean $userScalable
     */
    public function setUserScalable($userScalable)
    {
    }
    /**
     * Converts string from site charset in utf-8 and returns it
     *
     * @param string $s
     *
     * @return string
     */
    public static function PrepareStrToJson($s = '')
    {
    }
    /**
     * Converts string from utf-8 in site charset and returns it
     *
     * @param string $s
     *
     * @return string
     */
    public static function ConvertFromUtf($s = '')
    {
    }
    public static function onMobileInit()
    {
    }
    /**
     * Sets the value of self::$apiVersion
     *
     * @return int
     */
    public static function getApiVersion()
    {
    }
    /**
     * Returns phonegap version
     * @return string
     */
    public static function getPgVersion()
    {
    }
    /**
     * @return float
     */
    public static function getSystemVersion()
    {
    }
    /**
     * @return boolean
     */
    public function isWebRtcSupported()
    {
    }
    /**
     * Use it to get value of viewport-metadata for portrait orientation.
     *
     * @return string
     */
    public function getViewPortPortrait()
    {
    }
    /**
     * Use it to get value of viewport-metadata for landscape orientation.
     *
     * @return string
     */
    public function getViewPortLandscape()
    {
    }
    /**
     * Gets the value of deviceHeight.
     *
     * @return mixed
     */
    public function getDeviceHeight()
    {
    }
    /**
     * Sets the value of deviceHeight.
     *
     * @param mixed $deviceHeight the deviceHeight
     */
    public function setDeviceHeight($deviceHeight)
    {
    }
    /**
     * Gets the value of largeScreenSupport.
     *
     * @return mixed
     */
    public function getLargeScreenSupport()
    {
    }
    /**
     * Sets the value of largeScreenSupport.
     *
     * @param mixed $largeScreenSupport the $largeScreenSupport
     */
    public function setLargeScreenSupport($largeScreenSupport)
    {
    }
    /**
     * Gets the value of scale.
     *
     * @return mixed
     */
    public function getScale()
    {
    }
    /**
     * Sets the value of scale.
     *
     * @param $scale
     */
    public function setScale($scale)
    {
    }
    /**
     *  Returns true if device has a large screen
     * @return bool
     */
    public function isLarge()
    {
    }
    private function __clone()
    {
    }
}