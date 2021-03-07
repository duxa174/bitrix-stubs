<?php

namespace Bitrix\Translate\Controller;

/**
 * Stepper
 *
 * @implements Translate\Controller\ITimeLimit
 */
trait Stepper
{
    /** @var string */
    protected $processToken;
    /** @var boolean */
    protected $isNewProcess = true;
    /** @var boolean */
    protected $isProcessCompleted = false;
    /** @var int */
    protected $processedItems = 0;
    /** @var int */
    protected $totalItems = 0;
    /** @var Translate\Controller\Timer */
    protected $timer;
    /**
     * Initializes controller stepper and checks necessary parameters.
     * @see \Bitrix\Main\Engine\Action::onBeforeRun
     *
     * @return bool
     */
    protected function onBeforeRun()
    {
    }
    /**
     * Performs action.
     *
     * @param \Closure|callable|string $action Action to be executed.
     * @param array $params Parameters.
     *
     * @return array|Main\Engine\Response\AjaxJson
     */
    protected function performStep($action, array $params = array())
    {
    }
    /**
     * Switch accomplishment flag of the process.
     *
     * @param boolean $flag Accomplishment flag value.
     *
     * @return void
     */
    public function declareAccomplishment($flag = true)
    {
    }
    /**
     * Tells true if process has completed.
     *
     * @return boolean
     */
    public function hasProcessCompleted()
    {
    }
    /**
     * Getting array of errors.
     * @return boolean
     */
    public function hasErrors()
    {
    }
    /**
     * Gets timer.
     *
     * @return Translate\Controller\Timer
     */
    public function instanceTimer()
    {
    }
    /**
     * Sets start up time.
     *
     * @see Translate\Controller\ITimeLimit
     *
     * @return void
     */
    public function startTimer()
    {
    }
    /**
     * Tells true if time limit reached.
     *
     * @see Translate\Controller\ITimeLimit
     *
     * @return boolean
     */
    public function hasTimeLimitReached()
    {
    }
}