<?php

namespace Bitrix\Main\Mail\Callback;

/**
 * Class Config
 *
 * @package Bitrix\Main\Mail\Callback
 */
class Config
{
    const SIGHT_SALT = 'main_mail_callback';
    /** @var  string $moduleId Module ID. */
    protected $moduleId;
    /** @var  string $entityType Entity type ID. */
    protected $entityType;
    /** @var  string $entityId Entity ID. */
    protected $entityId;
    /** @var  string $id ID. */
    protected $id;
    /** @var  string $host Host. */
    protected $host;
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
     * @throws ArgumentException
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
     * Additional category on callback. Unique per `moduleId`.
     *
     * @param string|null $entityType Entity type.
     * @return $this
     * @throws ArgumentException
     */
    public function setEntityType($entityType)
    {
    }
    /**
     * Get entity ID.
     * Unique per `moduleId` & `entityType`.
     * It might be an email or ID of row in some table.
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
     * @throws ArgumentException
     */
    public function setEntityId($entityId)
    {
    }
    /**
     * Set host.
     *
     * @param string $host Host.
     * @return $this
     */
    public function setHost($host)
    {
    }
    /**
     * Get host.
     *
     * @return string
     */
    public function getHost()
    {
    }
    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
    }
    /**
     * Get signature.
     *
     * @return string|null
     */
    public function getSignature()
    {
    }
    /**
     * Verify signature.
     *
     * @param string $signature Signature.
     * @return bool
     */
    public function verifySignature($signature)
    {
    }
    protected function getSignedString()
    {
    }
    /**
     * Generate ID.
     *
     * @param string $moduleId Module ID.
     * @param string|null $entityType Entity type.
     * @param string|int $entityId Entity ID.
     * @return $this
     * @throws ArgumentException
     */
    public static function generateId($moduleId, $entityType = null, $entityId)
    {
    }
    /**
     * Unpack ID.
     *
     * @param string $id ID.
     * @return $this
     * @throws ArgumentException
     */
    public function unpackId($id)
    {
    }
}