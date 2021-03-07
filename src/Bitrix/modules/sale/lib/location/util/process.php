<?php

namespace Bitrix\Sale\Location\Util;

abstract class Process
{
    const JUST_SHOW_STAGES = false;
    const MIN_TIME_LIMIT = 5;
    const DEBUG_MODE = false;
    const DEBUG_FOLDER = '%BX_ROOT%/tmp/';
    const DEBUG_FILE = '%SESSION_KEY%_process.txt';
    const LOCK_FILE = '%SESSION_KEY%_lock';
    const CALLBACK_TYPE_MANUAL = 'manual';
    const CALLBACK_TYPE_QUOTA = 'quota';
    protected $stages = array();
    protected $stagesByCode = array();
    protected $stage = 0;
    protected $step = 0;
    protected $data = array();
    protected $time = 0;
    protected $timeLimit = 20;
    // in seconds
    protected $sessionKey = 'long_process';
    protected $useLock = false;
    protected $options = array();
    public function __construct($options = array())
    {
    }
    public function addStage($params)
    {
    }
    public function restore()
    {
    }
    // reset current condition
    public function reset()
    {
    }
    public function performStage()
    {
    }
    public function performIteration()
    {
    }
    /////////////////////////////////////////////////
    /// Staging
    /////////////////////////////////////////////////
    public function setStepSize($code, $stepSize)
    {
    }
    // move to next stage
    public function nextStage()
    {
    }
    // move to next step
    public function nextStep()
    {
    }
    public function isStage($code)
    {
    }
    protected function stageCompare($code, $way)
    {
    }
    // $this->stage <= $code
    public function stageLT($code)
    {
    }
    // $code <= $this->stage
    public function stageGT($code)
    {
    }
    public function setStage($stage)
    {
    }
    public function onBeforePerformIteration()
    {
    }
    public function onAfterPerformIteration()
    {
    }
    public function getStageCode()
    {
    }
    public function getCurrStageIndex()
    {
    }
    public function getStep()
    {
    }
    public function getStage($code)
    {
    }
    public function getCurrStageStepSize()
    {
    }
    /////////////////////////////////////////////////
    /// Percentage
    /////////////////////////////////////////////////
    public function getStagePercent($sNum = false)
    {
    }
    public function getPercentBetween($codeFrom, $codeTo)
    {
    }
    public function getPercentFromToCurrent($codeFrom)
    {
    }
    public function getCurrentPercentRange()
    {
    }
    public function getPercent()
    {
    }
    public function calcSubPercent($range)
    {
    }
    public function getSubPercentByTotalAndDone($total, $done = 0)
    {
    }
    /////////////////////////////////////////////////
    /// Quotas info
    /////////////////////////////////////////////////
    public function checkQuota()
    {
    }
    public function setTimeLimit($timeLimit)
    {
    }
    public function getMemoryPeak()
    {
    }
    protected function saveStartTime()
    {
    }
    protected function saveMemoryPeak()
    {
    }
    /////////////////////////////////////////////////
    /// Logging
    /////////////////////////////////////////////////
    public function clearLogFile()
    {
    }
    public function getLogFileDir()
    {
    }
    public function getLogFilePath()
    {
    }
    public function logMessage($message = '', $addTimeStamp = true)
    {
    }
    public function logMemoryUsage()
    {
    }
    public function logFinalResult()
    {
    }
    /////////////////////////////////////////////////
    /// Lock
    /////////////////////////////////////////////////
    public function getLockFilePath()
    {
    }
    public function lockProcess()
    {
    }
    public function unLockProcess()
    {
    }
    public function checkProcessLocked()
    {
    }
    /////////////////////////////////////////////////
    /// Diagnostics tools
    /////////////////////////////////////////////////
    protected function getHitTime()
    {
    }
    protected function getProcessTime()
    {
    }
    protected function getProcessTimeString()
    {
    }
    protected function getHitTimeString()
    {
    }
    protected function getElapsedTimeString()
    {
    }
    protected function getTimeString($time = 0)
    {
    }
    protected function getTimeStampString()
    {
    }
    protected function getMemoryPeakString()
    {
    }
    /////////////////////////////////////////////////
    /// Util
    /////////////////////////////////////////////////
    public function getData()
    {
    }
    // special case for array
    protected function getBlock($from)
    {
    }
}