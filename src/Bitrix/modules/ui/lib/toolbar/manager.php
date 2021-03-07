<?php

namespace Bitrix\UI\Toolbar;

final class Manager
{
    /** @var  Manager */
    private static $instance;
    /** @var Toolbar[] */
    protected $toolbars = [];
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    /**
     * Returns Singleton of Manager
     * @return Manager
     */
    public static function getInstance()
    {
    }
    /**
     * @param $id
     *
     * @return Toolbar|null
     */
    public function getToolbarById($id)
    {
    }
    public function createToolbar($id, $options)
    {
    }
}