<?php

namespace Bitrix\Vote\Base;

final class Diag
{
    private $showOnDisplay = 0;
    private $exclusiveUserId = null;
    private $enableLog = false;
    /** @var  Diag */
    private static $instance;
    private $stackSql = array();
    private $stackMemory = array();
    /** @var Connection connection */
    private $connection;
    private function __construct()
    {
    }
    /**
     * Gets instance of Diag.
     * @return Diag
     */
    public static function getInstance()
    {
    }
    /**
     * Sets value to status of show log message on display.
     * @param bool $showOnDisplay Value.
     * @return $this
     */
    public function setShowOnDisplay($showOnDisplay)
    {
    }
    /**
     * Sets user id who can use class Diag. If set null then everybody can use it.
     * @param int $exclusiveUserId Id of user.
     * @return $this
     */
    public function setExclusiveUserId($exclusiveUserId)
    {
    }
    /**
     * Activate log.
     * @return $this
     */
    public function activate()
    {
    }
    /**
     * Deactivate log.
     * @return $this
     */
    public function deactivate()
    {
    }
    /**
     * Collects debug info.
     * @param mixed $uniqueId Id of segment.
     * @return void
     */
    public function collectDebugInfo($uniqueId)
    {
    }
    private function getDebugInfoSql()
    {
    }
    /**
     * Logs debug info.
     * @param mixed $uniqueId Id of segment.
     * @param null  $label Label for human.
     * @throws SystemException
     * @return void
     */
    public function logDebugInfo($uniqueId, $label = null)
    {
    }
    /**
     * Logs data in common log (@see AddMessage2Log).
     * @param mixed $data Mixed data to log.
     * @return void
     */
    public function log($data)
    {
    }
    private function reformatBackTrace(array $backtrace)
    {
    }
    /**
     * @return array|bool|\CAllUser|\CUser
     */
    private function getUser()
    {
    }
}