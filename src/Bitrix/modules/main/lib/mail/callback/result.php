<?php

namespace Bitrix\Main\Mail\Callback;

/**
 * Class Result
 *
 * @package Bitrix\Main\Mail\Callback
 */
class Result
{
    /** @var  string $moduleId Module ID. */
    protected $moduleId;
    /** @var  string $entityType Entity type. */
    protected $entityType;
    /** @var  string $entityId Entity ID. */
    protected $entityId;
    /** @var  string $email Email. */
    protected $email;
    /** @var  int $dateSent Date sent timestamp. */
    protected $dateSent = 0;
    /** @var  bool $isError Is error. */
    protected $isError;
    /** @var  bool $isPermanentError Is permanent error. */
    protected $isPermanentError;
    /** @var  bool $isBlacklistable Is email blacklistable. */
    protected $isBlacklistable;
    /** @var  string $message Status text. */
    protected $message;
    /** @var  string $description Status description. */
    protected $description;
    /**
     * Return true if result is belong to module ID and entity type.
     *
     * @param string $moduleId Module ID.
     * @param string $entityType|null Entity type.
     * @return bool
     */
    public function isBelongTo($moduleId, $entityType = null)
    {
    }
    /**
     * Return true if result is newest than custom date.
     *
     * @param DateTime|integer $dateSent Date sent.
     * @return bool
     */
    public function isNewest($dateSent)
    {
    }
    /**
     * Get module ID.
     *
     * @return string
     */
    public function getModuleId()
    {
    }
    /**
     * Set module ID.
     *
     * @param string $moduleId Module ID.
     * @return $this
     */
    public function setModuleId($moduleId)
    {
    }
    /**
     * Get entity type.
     *
     * @return string
     */
    public function getEntityType()
    {
    }
    /**
     * Set entity type.
     *
     * @param string $entityType Entity type.
     * @return $this
     */
    public function setEntityType($entityType)
    {
    }
    /**
     * Get entity ID.
     *
     * @return string
     */
    public function getEntityId()
    {
    }
    /**
     * Set entity ID.
     *
     * @param string $entityId Entity ID.
     * @return $this
     */
    public function setEntityId($entityId)
    {
    }
    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
    }
    /**
     * Set email.
     *
     * @param string $email Email.
     * @return $this
     */
    public function setEmail($email)
    {
    }
    /**
     * Get date sent.
     *
     * @return string
     */
    public function getDateSent()
    {
    }
    /**
     * Set date sent.
     *
     * @param string $dateSent Date sent.
     * @return $this
     */
    public function setDateSent($dateSent)
    {
    }
    /**
     * Return true if error.
     *
     * @return bool
     */
    public function isError()
    {
    }
    /**
     * Set as error.
     *
     * @param bool $isError Is error.
     * @return $this
     */
    public function setError($isError)
    {
    }
    /**
     * Return true if permanent error.
     *
     * @return bool
     */
    public function isPermanentError()
    {
    }
    /**
     * Set as permanent error.
     *
     * @param bool $isPermanentError Is permanent error.
     * @return $this
     */
    public function setPermanentError($isPermanentError)
    {
    }
    /**
     * Return true if email is blacklistable.
     *
     * @return bool
     */
    public function isBlacklistable()
    {
    }
    /**
     * Set as blacklistable.
     *
     * @param bool $isBlacklistable Is blacklistable.
     * @return $this
     */
    public function setBlacklistable($isBlacklistable)
    {
    }
    /**
     * Get message text.
     *
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * Set message text.
     *
     * @param string $message Message.
     * @return $this
     */
    public function setMessage($message)
    {
    }
    /**
     * Get description text.
     *
     * @return string
     */
    public function getDescription()
    {
    }
    /**
     * Set description text.
     *
     * @param string $description Description.
     * @return $this
     */
    public function setDescription($description)
    {
    }
    /**
     * Send event of receiving result.
     *
     * @return bool
     */
    public function sendEvent()
    {
    }
}