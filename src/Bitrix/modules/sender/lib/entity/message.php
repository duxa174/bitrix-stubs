<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Message
 * @package Bitrix\Sender\Entity
 */
class Message extends \Bitrix\Sender\Entity\Base
{
    /**
     * Load configuration.
     *
     * @param integer|null $id ID.
     * @param Configuration $configuration Configuration.
     * @return Configuration
     */
    public function loadConfiguration($id = null, \Bitrix\Sender\Message\Configuration $configuration = null)
    {
    }
    /**
     * Save configuration.
     *
     * @param Configuration $configuration Configuration.
     * @return \Bitrix\Main\Result
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Copy configuration.
     *
     * @param integer|string|null $id ID.
     * @return Result|null
     */
    public function copyConfiguration($id)
    {
    }
    /**
     * Remove configuration.
     *
     * @param integer $id ID.
     * @return bool
     */
    public function removeConfiguration($id)
    {
    }
    /**
     * Remove by ID.
     *
     * @param integer $id ID.
     * @return \Bitrix\Main\Result
     */
    public static function removeById($id)
    {
    }
    /**
     * Get fields.
     */
    public function getFields()
    {
    }
    /**
     * Set fields.
     *
     * @param array $fields Fields.
     * @return $this
     */
    public function setFields(array $fields)
    {
    }
    /**
     * Get code.
     */
    public function getCode()
    {
    }
    /**
     * Set code.
     *
     * @param string $code Code.
     * @return $this
     */
    public function setCode($code)
    {
    }
    /**
     * Get default data.
     *
     * @return array
     */
    protected function getDefaultData()
    {
    }
    /**
     * Load data.
     *
     * @param integer $id ID.
     * @return array|null
     */
    protected function loadData($id)
    {
    }
    protected function parsePersonalizeList($text)
    {
    }
    /**
     * Save data.
     *
     * @param integer|null $id ID.
     * @param array $data Data.
     * @return integer|null
     */
    protected function saveData($id = null, array $data)
    {
    }
}