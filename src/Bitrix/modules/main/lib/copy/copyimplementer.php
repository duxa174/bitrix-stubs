<?php

namespace Bitrix\Main\Copy;

/**
 * Interface CopyImplementer for copy entities.
 * @package Bitrix\Main\Copy
 */
abstract class CopyImplementer
{
    /**
     * @var Result
     */
    protected $result;
    /**
     * @var \CUserTypeManager|null
     */
    protected $userTypeManager;
    protected $ufIgnoreList = [];
    protected $executiveUserId;
    public function __construct()
    {
    }
    /**
     * @return \Bitrix\Main\Error[]
     */
    public function getErrors()
    {
    }
    /**
     * To copy uf fields, you must pass the uf field manager.
     *
     * @param \CUserTypeManager $userTypeManager Uf fields.
     */
    public function setUserFieldManager(\CUserTypeManager $userTypeManager)
    {
    }
    /**
     * To avoid copying specific fields, specify a list of fields to ignore.
     *
     * @param array $ufIgnoreList Ignore list.
     */
    public function setUfIgnoreList(array $ufIgnoreList) : void
    {
    }
    /**
     * To copy on agent need user id.
     *
     * @param int $executiveUserId
     */
    public function setExecutiveUserId(int $executiveUserId) : void
    {
    }
    protected function copyUfFields(int $entityId, int $copiedEntityId, string $ufObject)
    {
    }
    /**
     * Adds entity.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return entity id or false.
     */
    public abstract function add(\Bitrix\Main\Copy\Container $container, array $fields);
    /**
     * Returns entity fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public abstract function getFields(\Bitrix\Main\Copy\Container $container, $entityId);
    /**
     * Preparing data before creating a new entity.
     *
     * @param Container $container
     * @param array $fields List entity fields.
     * @return array $fields
     */
    public abstract function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields);
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $entityId Entity id.
     * @param int $copiedEntityId Copied entity id.
     * @return Result
     */
    public abstract function copyChildren(\Bitrix\Main\Copy\Container $container, $entityId, $copiedEntityId);
    /**
     * @param Result[] $results
     * @return Result
     */
    protected function getResult(array $results = [])
    {
    }
}