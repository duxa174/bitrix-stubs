<?php

namespace Bitrix\Sender\Preset;

/**
 * Class MailBlockBase
 * @package Bitrix\Sender\Preset
 * @deprecated
 * @internal
 */
class MailBlockBase
{
    /**
     *
     */
    const LOCAL_DIR_BLOCK = '/modules/sender/preset/mailblock/';
    /**
     * @return array
     */
    public static function onPresetMailBlockList()
    {
    }
    /**
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * @return array
     */
    public static function getBlockListByType()
    {
    }
    /**
     * @param $blockName
     * @return array|null
     */
    public static function getById($blockName)
    {
    }
    /**
     * @param $blockName
     * @param $html
     * @return bool|int
     */
    public static function update($blockName, $html)
    {
    }
}