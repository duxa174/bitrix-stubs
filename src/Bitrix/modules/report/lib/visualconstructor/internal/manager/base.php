<?php

namespace Bitrix\Report\VisualConstructor\Internal\Manager;

/**
 * Base Class Singleton for report managers
 * @package Bitrix\Report\VisualConstructor\Internal\Manager
 */
abstract class Base implements \Bitrix\Report\VisualConstructor\Internal\Error\IErrorable
{
    private $event;
    private static $instances = array();
    protected $errors;
    protected static $result;
    /**
     * @return string
     */
    protected abstract function getEventTypeKey();
    /**
     * @return mixed
     */
    public abstract function call();
    public function getErrors()
    {
    }
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return static Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
    }
    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }
    /**
     * @return Event
     */
    protected function getEvent()
    {
    }
    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }
    /**
     * @return $this
     */
    private function collect()
    {
    }
    /**
     * @return string
     */
    protected function getModuleId()
    {
    }
    /**
     * @return array
     */
    protected function getResult()
    {
    }
    /**
     * @return string
     */
    private function getManagerClassName()
    {
    }
}