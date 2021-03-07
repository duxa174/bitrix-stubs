<?php

namespace Bitrix\Bizproc\Automation\Engine;

/**
 * Class Template
 * @package Bitrix\Bizproc\Automation\Engine
 */
class Template
{
    protected static $parallelActivityType = 'ParallelActivity';
    protected static $sequenceActivityType = 'SequenceActivity';
    protected static $delayActivityType = 'DelayActivity';
    protected static $conditionActivityType = 'IfElseActivity';
    protected static $availableActivities = [];
    protected static $availableActivityClasses = [];
    protected $template;
    protected $autoExecuteType = \CBPDocumentEventType::Automation;
    /** @var  null|Robot[] */
    protected $robots;
    protected $isExternalModified;
    /**
     * Template constructor.
     * @param array $documentType
     * @param null $documentStatus
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct(array $documentType, $documentStatus = null)
    {
    }
    public static function createByTpl(\Bitrix\Bizproc\Workflow\Template\Tpl $tpl)
    {
    }
    public function getDocumentStatus()
    {
    }
    public function setDocumentStatus($status)
    {
    }
    public function getExecuteType($autoExecuteType)
    {
    }
    public function setExecuteType($autoExecuteType)
    {
    }
    public function getId()
    {
    }
    public function getRobotSettingsDialog(array $robot, $request = null)
    {
    }
    public function saveRobotSettings(array $robot, array $request)
    {
    }
    public function save(array $robots, $userId)
    {
    }
    public function setRobots(array $robots)
    {
    }
    /**
     * Convert instance data to array.
     * @return array
     */
    public function toArray()
    {
    }
    public static function getAvailableRobots(array $documentType)
    {
    }
    protected static function getAvailableRobotClasses(array $documentType)
    {
    }
    protected function addBizprocTemplate($userId)
    {
    }
    protected function makeTemplateName()
    {
    }
    protected function updateBizprocTemplate($id, $userId)
    {
    }
    protected function convertTemplate()
    {
    }
    protected function unConvertTemplate()
    {
    }
    protected function isRobot(array $activity)
    {
    }
    /**
     * @return Robot[] Robot activities.
     */
    public function getRobots()
    {
    }
    /**
     * Returns Robot by it`s id.
     * @param string $name Robot identificator.
     * @return Robot|null Robot instance.
     */
    public function getRobotByName(string $name) : ?\Bitrix\Bizproc\Automation\Engine\Robot
    {
    }
    /**
     * @return array Template activities.
     */
    public function getActivities()
    {
    }
    /**
     * Checks is template was modified by external editor.
     * @return bool
     */
    public function isExternalModified()
    {
    }
    public function getDocumentType() : array
    {
    }
    private function createSequenceActivity()
    {
    }
    private function createParallelActivity()
    {
    }
    private function createDelayActivity(array $delayProperties, $delayName)
    {
    }
}