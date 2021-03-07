<?php

namespace Bitrix\Landing;

class PublicAction
{
    /**
     * Scope for REST (default commands).
     */
    const REST_SCOPE_DEFAULT = 'landing';
    /**
     * Scope for REST (cloud repo commands).
     */
    const REST_SCOPE_CLOUD = 'landing_cloud';
    /**
     * Code indicating used blocks in REST statistics.
     */
    public const REST_USAGE_TYPE_BLOCK = 'blocks';
    /**
     * Code indicating used pages in REST statistics.
     */
    public const REST_USAGE_TYPE_PAGE = 'pages';
    /**
     * REST application.
     * @var array
     */
    protected static $restApp = null;
    /**
     * Raw data from waf.
     * @var mixed
     */
    protected static $rawData = null;
    /**
     * Get full namespace for public classes.
     * @return string
     */
    protected static function getNamespacePublicClasses()
    {
    }
    /**
     * Get info about method - class/method/params.
     * @param string $action Full name of action (\Namespace\Class::method).
     * @param array $data Array of data.
     * @return array
     * @throws \ReflectionException
     */
    protected static function getMethodInfo($action, $data = array())
    {
    }
    /**
     * Processing the AJAX/REST action.
     * @param string $action Action name.
     * @param mixed $data Data.
     * @param boolean $isRest Is rest call.
     * @return array|null
     * @throws \ReflectionException
     */
    protected static function actionProcessing($action, $data, $isRest = false)
    {
    }
    /**
     * Get raw data of curring processing.
     * @return mixed
     */
    public static function getRawData()
    {
    }
    /**
     * Listen commands from ajax.
     * @return array|null
     * @throws \ReflectionException
     */
    public static function ajaxProcessing()
    {
    }
    /**
     * Register methods in REST.
     * @return array
     * @throws \ReflectionException
     */
    public static function restBase()
    {
    }
    /**
     * Gateway between REST and publicaction.
     * @param array $fields Rest fields.
     * @param mixed $t Var.
     * @param \CRestServer $server Server instance.
     * @return mixed
     * @throws \ReflectionException
     */
    public static function restGateway($fields, $t, $server)
    {
    }
    /**
     * Get current REST application.
     * @return array
     */
    public static function restApplication()
    {
    }
    /**
     * On REST app delete.
     * @param array $app App info.
     * @return void
     */
    public static function restApplicationDelete($app)
    {
    }
    /**
     * Before REST app delete.
     * @param \Bitrix\Main\Event $event Event data.
     * @return \Bitrix\Main\EventResult
     */
    public static function beforeRestApplicationDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Gets stat data of using rest app.
     * @param bool $humanFormat Gets data in human format.
     * @param bool $onlyActive Gets data only in active states.
     * @param array $additionalFilter Additional filter array.
     * @return array
     */
    public static function getRestStat($humanFormat = false, $onlyActive = true, array $additionalFilter = [])
    {
    }
}