<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class State
 * @package Bitrix\Sender\Dispatch
 */
class State
{
    const NEWISH = 'N';
    const INIT = 'I';
    const READY = 'R';
    const SENDING = 'S';
    const WAITING = 'W';
    const PLANNED = 'T';
    const PAUSED = 'P';
    const SENT = 'Y';
    const STOPPED = 'X';
    const HALTED = 'H';
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /** @var DateTime $dateTime Date. */
    protected $dateTime;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Is ready to send.
     *
     * @return bool
     */
    public function isReady()
    {
    }
    /**
     * Is sent.
     *
     * @return bool
     */
    public function isSent()
    {
    }
    /**
     * Is finished.
     *
     * @return bool
     */
    public function isFinished()
    {
    }
    /**
     * Is stopped.
     *
     * @return bool
     */
    public function isStopped()
    {
    }
    /**
     * Is sending started.
     *
     * @return bool
     */
    public function isWaiting()
    {
    }
    /**
     * Is halted.
     *
     * @return bool
     */
    public function isHalted()
    {
    }
    /**
     * Is sending started.
     *
     * @return bool
     */
    public function isSending()
    {
    }
    /**
     * Is sending planned.
     *
     * @return bool
     */
    public function isPlanned()
    {
    }
    /**
     * Is sending paused.
     *
     * @return bool
     */
    public function isPaused()
    {
    }
    /**
     * Is sending was started.
     *
     * @return bool
     */
    public function wasStartedSending()
    {
    }
    /**
     * Is posting was built.
     *
     * @return bool
     */
    public function wasPostingBuilt()
    {
    }
    /**
     * Is sending limit exceeded.
     *
     * @return bool
     */
    public function isSendingLimitExceeded()
    {
    }
    /**
     * Is sending limit exceeded.
     *
     * @return bool
     * @deprecated
     */
    public function isSendingPlanned()
    {
    }
    /**
     * Get sent date.
     *
     * @return string|DateTime|null
     */
    public function getDateSend()
    {
    }
    /**
     * Get send date.
     *
     * @return string|DateTime|null
     */
    public function getDatePause()
    {
    }
    /**
     * Get send date.
     *
     * @return string|DateTime|null
     */
    public function getDateSent()
    {
    }
    /**
     * Get create date.
     *
     * @return string|DateTime|null
     */
    public function getDateCreate()
    {
    }
    /**
     * Get planned date send.
     *
     * @return string|DateTime|null
     */
    public function getPlannedDateSend()
    {
    }
    /**
     * Get last exec date.
     *
     * @return string|DateTime|null
     */
    public function getLastExecutedDate()
    {
    }
    /**
     * Update planed date send.
     *
     * @param Date $date Date.
     * @return bool
     */
    public function updatePlannedDateSend(\Bitrix\Main\Type\Date $date)
    {
    }
    /**
     * Update send date.
     *
     * @return bool
     */
    protected function updateDateSend()
    {
    }
    /**
     * Update pause date.
     *
     * @return bool
     */
    protected function updateDatePause()
    {
    }
    /**
     * Update sent date.
     *
     * @return bool
     */
    protected function updateDateSent()
    {
    }
    /**
     * Update date.
     *
     * @param string $name Name.
     * @param DateTime|null $date Date.
     * @return bool
     */
    protected function updateDate($name, $date = null)
    {
    }
    /**
     * Get current state code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get current state name.
     *
     * @return string
     */
    public function getName()
    {
    }
    protected static function getStateName($code)
    {
    }
    /**
     * Get states.
     *
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Plan sending.
     *
     * @param Date $sendDate Send date.
     * @return bool
     * @throws InvalidOperationException
     */
    public function plan(\Bitrix\Main\Type\Date $sendDate)
    {
    }
    /**
     * Change state to ready.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function ready()
    {
    }
    /**
     * Send.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function send()
    {
    }
    /**
     * Send errors.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function sendErrors()
    {
    }
    /**
     * Pause.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function pause()
    {
    }
    /**
     * Halt.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function halt()
    {
    }
    /**
     * Resume.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function resume()
    {
    }
    /**
     * Stop.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function stop()
    {
    }
    /**
     * Init.
     *
     * @return bool
     * @throws InvalidOperationException
     */
    public function init()
    {
    }
    /**
     * Reset.
     *
     * @return bool
     * @throws InvalidOperationException
     * @throws NotImplementedException
     */
    public function reset()
    {
    }
    /**
     * Wait.
     *
     * @param Dispatch\MethodSchedule|null $method Method.
     * @return bool
     * @throws InvalidOperationException
     */
    public function wait(\Bitrix\Sender\Dispatch\MethodSchedule $method = null)
    {
    }
    /**
     * Check ready possibility.
     *
     * @return bool
     */
    public function canReady()
    {
    }
    /**
     * Check send possibility.
     *
     * @return bool
     */
    public function canSend()
    {
    }
    /**
     * Check send errors possibility.
     *
     * @return bool
     */
    public function canSendErrors()
    {
    }
    /**
     * Check plan possibility.
     *
     * @return bool
     */
    public function canPlan()
    {
    }
    /**
     * Check pause possibility.
     *
     * @return bool
     */
    public function canPause()
    {
    }
    /**
     * Check stop possibility.
     *
     * @return bool
     */
    public function canStop()
    {
    }
    /**
     * Check resume possibility.
     *
     * @return bool
     */
    public function canResume()
    {
    }
    /**
     * Check reset possibility.
     *
     * @return bool
     */
    public function canReset()
    {
    }
    /**
     * Check init possibility.
     *
     * @return bool
     */
    public function canInit()
    {
    }
    /**
     * Check wait possibility.
     *
     * @return bool
     */
    public function canWait()
    {
    }
    /**
     * Check halt possibility.
     *
     * @return bool
     */
    public function canHalt()
    {
    }
    /**
     * Get possible states.
     *
     * @return array
     */
    protected function getPossibleStates()
    {
    }
    /**
     * Return true if can change state.
     *
     * @param string $state State.
     * @return bool
     */
    private function canChangeState($state)
    {
    }
    /**
     * Change state.
     *
     * @param string $state State.
     * @param Date|null $sendDate Send date.
     * @return bool
     * @throws InvalidOperationException
     */
    private function changeState($state, \Bitrix\Main\Type\Date $sendDate = null)
    {
    }
    /**
     * Change status.
     *
     * @param string $state State.
     * @return bool
     */
    private function isPossibleState($state)
    {
    }
    /**
     * Update status.
     *
     * @param string $status Status.
     * @param string $state State.
     * @param Date|null $sendDate Send date.
     * @return bool
     */
    private function updateStatus($status, $state, \Bitrix\Main\Type\Date $sendDate = null)
    {
    }
    /**
     * Change status.
     *
     * @return array
     */
    private static function getStateMap()
    {
    }
    /**
     * Change status.
     *
     * @return array
     */
    private static function getStatusMap()
    {
    }
    private function isCampaignActive()
    {
    }
}