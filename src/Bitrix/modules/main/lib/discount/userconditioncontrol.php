<?php

namespace Bitrix\Main\Discount;

class UserConditionControl extends \CSaleCondCtrlComplex
{
    const ENTITY_USER_ID = 'CondMainUserId';
    const ENTITY_USER_GROUP_ID = 'BX:CondMainUserGroupId';
    public static function onBuildDiscountConditionInterfaceControls()
    {
    }
    public static function getControlDescr()
    {
    }
    public static function getClassName()
    {
    }
    public static function getControlShow($params)
    {
    }
    public static function checkBasket(array $order, array $userIds, $type)
    {
    }
    public static function generate($oneCondition, $params, $control, $subs = false)
    {
    }
    /**
     * @param bool|string $controlId
     *
     *@return array|bool
     */
    public static function getControls($controlId = false)
    {
    }
    public static function getShowIn($arControls)
    {
    }
    private static function generateOrderConditions(array $oneCondition, array $params, array $control, $values)
    {
    }
    /**
     * @return string
     */
    private static function getAdminSection()
    {
    }
}