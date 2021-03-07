<?php

namespace Bitrix\Sale\Exchange\OneC;

abstract class SettingsBase implements \Bitrix\Sale\Exchange\ISettings
{
    protected static $currentSettings = null;
    protected $settings = array();
    /**
     * ImportSettings constructor.
     * @param array|null $settings
     */
    protected function __construct(array $settings = null)
    {
    }
    /**
     * @param $entityTypeId
     * @return string
     * @throws ArgumentTypeException
     * @throws NotSupportedException
     */
    protected function resolveName($entityTypeId)
    {
    }
    /**
     * @return array|null
     * @throws ArgumentNullException
     */
    protected static function loadCurrentSettings()
    {
    }
    /**
     * @param $entityTypeId
     * @param $name
     * @param string $default
     * @return string
     */
    protected function getValueFor($entityTypeId, $name, $default = '')
    {
    }
    /**
     * @param $entityTypeId
     * @return mixed
     * @throws ArgumentTypeException
     * @throws NotSupportedException
     */
    public function prefixFor($entityTypeId)
    {
    }
}