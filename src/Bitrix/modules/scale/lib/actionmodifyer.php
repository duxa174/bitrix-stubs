<?php

namespace Bitrix\Scale;

/**
* Class ActionModifyer
* @package Bitrix\Scale
*/
class ActionModifyer
{
    /**
     * MYSQL_ADD_SLAVE action modifyer
     * @param string $actionId - action idenifyer
     * @param array $actionParams - action parameterss
     * @param string $hostname - server hostname
     * @param array $userParamsValues
     * @return array - modifyed action params
     * @throws NeedMoreUserInfoException
     */
    public static function mysqlAddSlave($actionId, $actionParams, $hostname, $userParamsValues)
    {
    }
    /**
     * MYSQL_ADD_SLAVE, MYSQL_CHANGE_MASTER, MYSQL_DEL_SLAVE actions modifier/
     * @param string $actionId - action idenifyer
     * @param array $actionParams - action parameters
     * @param string $hostname - server hostname
     * @param array $userParamsValues
     * @return array - modifyed action params
     * @throws NeedMoreUserInfoException
     */
    public static function checkExtraDbExist($actionId, $actionParams, $hostname, $userParamsValues)
    {
    }
    /**
     * SET_EMAIL_SETTINGS modifier
     * @param string $actionId
     * @param array $actionParams
     * @param string $hostname
     * @param array $userParamsValues
     * @return array mixed
     */
    public static function emailSettingsModifier($actionId, $actionParams, $hostname, $userParamsValues)
    {
    }
    /**
     * SITE_CREATE_LINK modifier
     * @param string $actionId
     * @param array $actionParams
     * @param string $hostname
     * @param array $userParamsValues
     * @return array mixed
     */
    public static function siteCreateLinkModifier($actionId, $actionParams, $hostname, $userParamsValues)
    {
    }
}