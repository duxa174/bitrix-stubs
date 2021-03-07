<?php

namespace Sale\Handlers\Delivery\Additional;

/**
 * Class Action
 * @package Sale\Handlers\Delivery\Additional
 */
class Action
{
    const EXECUTED_OPTION = 'handlers_dlv_add_action_executed';
    /**
     * @param array $params
     * @return Result
     */
    public static function execute(array $params)
    {
    }
    /**
     * @param string $id Action identifier.
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private static function isExecuted($id)
    {
    }
    /**
     * @param string $id Action identifier.
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private static function setExecuted($id)
    {
    }
}