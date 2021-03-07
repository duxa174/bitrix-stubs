<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class Ofd
 * @package Bitrix\Sale\Cashbox
 */
abstract class Ofd
{
    protected const EVENT_ON_GET_CUSTOM_OFD_HANDLERS = 'OnGetCustomOfdHandlers';
    /**
     * @return array
     * @throws NotImplementedException
     */
    public static function getHandlerList()
    {
    }
    /**
     * @param Cashbox $cashbox
     * @return null
     */
    public static function create(\Bitrix\Sale\Cashbox\Cashbox $cashbox)
    {
    }
    /**
     * Ofd constructor.
     * @param Cashbox $cashbox
     */
    private function __construct(\Bitrix\Sale\Cashbox\Cashbox $cashbox)
    {
    }
    /**
     * @return string
     */
    protected function getUrl()
    {
    }
    /**
     * @return array
     */
    protected function getLinkParamsMap()
    {
    }
    /**
     * @param $data
     * @return string
     */
    public function generateCheckLink($data)
    {
    }
    /**
     * @throws NotImplementedException
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @return array
     */
    public static function getSettings()
    {
    }
    /**
     * @param $settings
     * @return Result
     */
    public function validate()
    {
    }
    /**
     * @param $name
     * @param $code
     * @return mixed
     */
    public function getValueFromSettings($name, $code = null)
    {
    }
    /**
     * @return bool
     */
    protected function isTestMode()
    {
    }
}