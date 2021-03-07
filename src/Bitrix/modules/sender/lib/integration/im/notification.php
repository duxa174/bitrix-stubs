<?php

namespace Bitrix\Sender\Integration\Im;

/**
 * Class Notification
 * @package Bitrix\Sender\Integration\Im
 */
class Notification
{
    /** @var array $to */
    protected $to = array();
    /** @var string $message */
    protected $message;
    /**
     * Can use.
     *
     * @return bool|null
     */
    public static function canUse()
    {
    }
    /**
     * Create.
     *
     * @return static
     */
    public static function create()
    {
    }
    /**
     * Set to.
     *
     * @param integer[] $list List.
     * @return $this
     */
    public function setTo(array $list)
    {
    }
    /**
     * Add to.
     *
     * @param integer $userId User ID.
     * @return $this
     */
    public function addTo($userId)
    {
    }
    /**
     * Add all authors.
     *
     * @return $this
     */
    public function toAllAuthors()
    {
    }
    /**
     * Add current user.
     *
     * @return $this
     */
    public function toCurrentUser()
    {
    }
    /**
     * With message.
     *
     * @param string $message Text.
     * @return $this
     */
    public function withMessage($message)
    {
    }
    /**
     * Send.
     *
     * @return void
     */
    public function send()
    {
    }
}