<?php

namespace Bitrix\Landing\Hook\Page;

class B24button extends \Bitrix\Landing\Hook\Page
{
    /**
     * Get script url from script-code.
     * @param string $script Script code.
     * @return string
     */
    protected static function getScriptUrl($script)
    {
    }
    /**
     * Get b24 buttons.
     * @return array
     */
    public static function getButtons() : array
    {
    }
    /**
     * Get raw data of b24 buttons
     *
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getButtonsData() : ?array
    {
    }
    /**
     * Find button ID by script code
     * @param $code - script for button
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getButtonIdByCode($code)
    {
    }
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public function enabled()
    {
    }
    /**
     * Exec or not hook in edit mode.
     * @return boolean
     */
    public function enabledInEditMode()
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec()
    {
    }
}