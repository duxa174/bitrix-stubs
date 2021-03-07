<?php

namespace Bitrix\Main\Update;

/**
* Class Stepper
* @package Bitrix\Main\Update
* This class can be used if only:
* 1. you do not alter tables in DB. Agent will not be executed if module is not installed.
* Code to bind agent in updater:
* \Bitrix\Main\Update\Stepper::bindClass('Bitrix\Tasks\Update1701', 'tasks');
* or
* if($updater->CanUpdateDatabase()) {
$basePath = $updater->CanUpdateKernel() ? $updater->curModulePath.'/lib/somepath' : BX_ROOT.'/modules/lists/lib/somepath';
if(include_once($_SERVER["DOCUMENT_ROOT"].$basePath."ecrmpropertyupdate.php"))
\Bitrix\Lists\SomePath\EcrmPropertyUpdate::bind();
}
*/
abstract class Stepper
{
    protected static $moduleId = "main";
    protected $deleteFile = false;
    protected $outerParams = [];
    private static $filesToUnlink = array();
    private static $countId = 0;
    const CONTINUE_EXECUTION = true;
    const FINISH_EXECUTION = false;
    /**
     * Returns HTML to show updates.
     * @param array|string $ids
     * @param string $title
     * @return string
     */
    public static function getHtml($ids = array(), $title = "")
    {
    }
    public static function getTitle()
    {
    }
    /**
     * Execute an agent
     * @return string
     */
    public static function execAgent()
    {
    }
    public function __destruct()
    {
    }
    /**
     * Executes some action, and if return value is false, agent will be deleted.
     * @param array $option Array with main data to show if it is necessary like {steps : 35, count : 7}, where steps is an amount of iterations, count - current position.
     * @return boolean
     */
    abstract function execute(array &$option);
    public function setOuterParams(array $outerParams) : void
    {
    }
    public function getOuterParams() : array
    {
    }
    /**
     * It is possible to pass only integer and string values for now. But you can make your own method or extend this one.
     * @param array $arguments
     * @return string
     */
    public static function makeArguments($arguments = []) : string
    {
    }
    /**
     * Just fabric method.
     * @return Stepper
     */
    public static function createInstance()
    {
    }
    /**
     * Wrap-function to get moduleId.
     * @return string
     */
    public static function getModuleId()
    {
    }
    /**
     * Adds agent for current class.
     * @param int $delay Delay for running agent
     * @param array $withArguments Data that will available in $stepper->outerParams
     * @return void
     */
    public static function bind($delay = 300, $withArguments = [])
    {
    }
    /**
     * Adds agent for class $className for $moduleId module. Example for updater: \Bitrix\Main\Stepper::bindClass('\Bitrix\SomeModule\SomeClass', 'somemodule').
     * @param string $className Class like \Bitrix\SomeModule\SomeClass extends Stepper.
     * @param string $moduleId Module ID like somemodule.
     * @param int $delay Delay for running agent
     * @param array $withArguments
     * @return void
     */
    public static function bindClass($className, $moduleId, $delay = 300, $withArguments = [])
    {
    }
    /**
     * Just method to check request.
     * @return void
     */
    public static function checkRequest()
    {
    }
    /**
     * Sends json.
     * @param $result
     * @return void
     */
    private static function sendJson($result)
    {
    }
    protected function writeToLog(\Exception $exception)
    {
    }
}