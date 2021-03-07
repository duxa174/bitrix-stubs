<?php

namespace Bitrix\Rest\Configuration;

/**
 * Temp work with current context for step by step action
 */
class Setting
{
    const SETTING_MANIFEST = 'SETTING_MANIFEST';
    const SETTING_RATIO = 'SETTING_RATIO';
    const SETTING_APP_INFO = 'APP_INFO';
    const SETTING_EXPORT_ARCHIVE_NAME = 'EXPORT_ARCHIVE_NAME';
    private $context = 'null';
    private $optionCode = '~configuration_action_setting';
    private $optionModule = 'rest';
    private $ttlContext = 14400;
    //3600*4
    /**
     * @param $context string [a-zA-Z0-9_]
     */
    public function __construct($context)
    {
    }
    /**
     * Add data in context
     *
     * @param $code string needed code setting
     * @param $data mixed any saved data
     *
     * @return boolean
     */
    public function set($code, $data)
    {
    }
    /**
     * Return needed setting by code with context
     * @param $code string
     *
     * @return mixed|null
     */
    public function get($code)
    {
    }
    /**
     * All setting with context
     *
     * @return array
     */
    public function getFull()
    {
    }
    /**
     * @param $code string
     *
     * @return boolean
     */
    public function delete($code)
    {
    }
    /**
     * @return boolean
     */
    public function deleteFull()
    {
    }
    /**
     * All setting
     *
     * @return array
     */
    private function getOption()
    {
    }
    private function saveOption($data)
    {
    }
    public function deleteOption()
    {
    }
}