<?php

namespace Sale\Handlers\Delivery;

/**
 * Class RestHandler
 * @package Sale\Handlers\Delivery
 */
final class RestHandler extends \Bitrix\Sale\Delivery\Services\Base
{
    protected static $canHasProfiles = true;
    protected static $whetherAdminExtraServicesShow = true;
    private $handlerCode = '';
    /**
     * Returns class name
     * @return string
     */
    public static function getClassTitle() : string
    {
    }
    /**
     * @return string Class, service description.
     */
    public static function getClassDescription() : string
    {
    }
    /**
     * @param array $initParams Initial data params from table record.
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public function __construct(array $initParams)
    {
    }
    /**
     * @return mixed|string
     */
    public function getHandlerCode()
    {
    }
    private function getHandlerSettings()
    {
    }
    /**
     * @return array
     * @throws \Exception
     */
    protected function getConfigStructure() : array
    {
    }
    /**
     * @param int $serviceId
     * @param array $fields
     * @return bool
     * @throws Main\ArgumentTypeException
     * @throws Main\SystemException
     */
    public static function onAfterAdd($serviceId, array $fields = array()) : bool
    {
    }
    /**
     * @return array All profile fields.
     */
    public function getProfilesListFull() : array
    {
    }
    /**
     * @param string $type
     * @param array $fields
     * @return array
     */
    private function getProfileDefaultParams($type, array $fields) : array
    {
    }
    /**
     * @return bool
     */
    public function isCalculatePriceImmediately() : bool
    {
    }
    /**
     * @return bool
     */
    public static function whetherAdminExtraServicesShow() : bool
    {
    }
    /**
     * @return array
     */
    public static function getChildrenClassNames() : array
    {
    }
    /**
     * @return array profiles ids and names
     */
    public function getProfilesList() : array
    {
    }
    /**
     * @return bool
     */
    public static function canHasProfiles() : bool
    {
    }
}