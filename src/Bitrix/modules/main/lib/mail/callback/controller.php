<?php

namespace Bitrix\Main\Mail\Callback;

/**
 * Class Controller
 *
 * @package Bitrix\Main\Mail\Callback
 */
class Controller
{
    const STATUS_DEFERED = 'defered';
    const STATUS_BOUNCED = 'bounced';
    const STATUS_DELIVERED = 'delivered';
    const DESC_AUTH = 'AUTH_ERROR';
    const DESC_UNKNOWN_USER = 'UNKNOWN_USER';
    const DESC_UNROUTEABLE = 'UNROUTEABLE';
    /** @var  string $id ID of mail. */
    protected $id;
    /** @var  Result $result Result instance. */
    protected $result;
    /** @var  Config $config Config instance. */
    protected $config;
    /** @var  Address $address Address instance. */
    protected $address;
    /** @var string[] $blacklist Black list of emails. */
    protected $blacklist = [];
    /** @var bool $answerExceptions Flush exceptions in answer. */
    protected static $answerExceptions = true;
    /** @var bool $enableItemErrors Ignore item errors. */
    protected $enableItemErrors = false;
    /** @var int $countItems. */
    protected $countItems = 0;
    /** @var int $countItems. */
    protected $countItemsProcessed = 0;
    /** @var int $countItems. */
    protected $countItemsError = 0;
    /**
     * Run controller.
     *
     * @param string $data Data.
     * @param array $parameters Parameters.
     * @return void
     */
    public static function run($data = null, array $parameters = [])
    {
    }
    /**
     * Give answer.
     *
     * @param bool $isError Data.
     * @param string|array|null $answer Answer.
     * @return void
     */
    public static function giveAnswer($isError = false, $answer = null)
    {
    }
    /**
     * Controller constructor.
     */
    public function __construct()
    {
    }
    /**
     * Enable item errors.
     *
     * @return $this
     */
    public function enableItemErrors()
    {
    }
    protected function validateItem($item)
    {
    }
    /**
     * Process list.
     *
     * @param array $list List of items.
     * @return void
     * @throws SystemException
     */
    public function processList($list)
    {
    }
    /**
     * Process item.
     *
     * @param array $item Item data.
     * @return bool
     * @throws SystemException
     */
    public function processItem($item)
    {
    }
    /**
     * Get counters
     *
     * @return array
     */
    public function getCounters()
    {
    }
    /**
     * Return true if status is error.
     *
     * @param string $status Status.
     * @return bool
     */
    public static function isStatusError($status)
    {
    }
    /**
     * Return true if status is permanent error.
     *
     * @param string $status Status.
     * @return bool
     */
    public static function isStatusPermanentError($status)
    {
    }
    /**
     * Return true if status descriptions is blacklistable.
     *
     * @param string $description Description.
     * @return bool
     */
    public static function isBlacklistable($description)
    {
    }
}