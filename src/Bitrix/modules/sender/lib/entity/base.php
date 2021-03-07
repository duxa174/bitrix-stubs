<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Base
 * @package Bitrix\Sender\Entity
 */
abstract class Base
{
    const SEARCH_FIELD_NAME = 'SEARCH_CONTENT';
    /** @var ErrorCollection $errors */
    protected $errors;
    /** @var integer $id ID. */
    protected $id;
    /** @var array $data Data. */
    protected $data = array();
    /** @var Security\User|null $user User. */
    protected $user;
    /** @var Search\Builder|null $searchBuilder Search builder. */
    protected $searchBuilder;
    /**
     * Create instance.
     *
     * @param integer|null $id ID.
     * @return static
     */
    public static function create($id = null)
    {
    }
    /**
     * Base constructor.
     *
     * @param integer|null $id ID.
     */
    public function __construct($id = null)
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
    protected function filterDataByEntityFields(\Bitrix\Main\Entity\Base $entity, array &$data)
    {
    }
    protected function filterDataByChanging(array &$data, array $previousData)
    {
    }
    /**
     * Save data by data manager class name.
     *
     * @param MainEntityBase $entity Entity.
     * @param array|integer|null $id ID.
     * @param array $data Data.
     * @param array|null $primary Primary.
     * @return integer|null
     * @throws SystemException
     */
    protected function saveByEntity(\Bitrix\Main\Entity\Base $entity, $id = null, array $data, $primary = null)
    {
    }
    /**
     * Remove by data manager class name.
     *
     * @param MainEntityBase $entity Entity.
     * @param array|integer $primary Primary.
     * @return bool
     * @throws SystemException
     */
    protected function removeByEntity(\Bitrix\Main\Entity\Base $entity, $primary)
    {
    }
    /**
     * Load data.
     *
     * @param integer $id ID.
     * @return array|null
     */
    protected abstract function loadData($id);
    /**
     * Save data.
     *
     * @param integer|null $id ID.
     * @param array $data Data.
     * @return integer|null
     */
    protected abstract function saveData($id = null, array $data);
    /**
     * Copy data.
     *
     * @param integer $id ID.
     * @param array $data Data.
     * @return integer|null
     */
    protected function copyData($id, array $data = array())
    {
    }
    /**
     * Load by array.
     *
     * @param array $data Data.
     * @return bool
     */
    public function loadByArray(array $data)
    {
    }
    /**
     * Load.
     *
     * @param integer $id ID.
     * @return bool
     */
    public function load($id)
    {
    }
    /**
     * Save.
     */
    public function save()
    {
    }
    /**
     * Get ID.
     *
     * @return integer
     */
    public function getId()
    {
    }
    /**
     * Set ID.
     *
     * @param integer $id ID.
     * @return $this
     */
    public function setId($id)
    {
    }
    /**
     * Set data value by key.
     *
     * @param string $key Key.
     * @param mixed $value Value.
     * @return $this
     */
    public function set($key, $value)
    {
    }
    /**
     * Unset data value by key.
     *
     * @param string $key Key.
     * @return $this
     */
    public function unsetByKey($key)
    {
    }
    /**
     * Get data value by key.
     *
     * @param string $key Key.
     * @param mixed|null $defaultValue Default value.
     * @return mixed
     */
    public function get($key, $defaultValue = null)
    {
    }
    /**
     * Merge data.
     *
     * @param array $data Data.
     * @return $this
     */
    public function mergeData(array $data)
    {
    }
    /**
     * Set data.
     *
     * @param array $data Data.
     * @return $this
     */
    public function setData(array $data)
    {
    }
    /**
     * Get data.
     */
    public function getData()
    {
    }
    /**
     * Return true if it have errors.
     *
     * @return bool
     */
    public function hasErrors()
    {
    }
    /**
     * Clear errors.
     */
    public function clearErrors()
    {
    }
    /**
     * Add error.
     *
     * @param string $message Message text.
     * @param string|null $code Code.
     */
    public function addError($message, $code = null)
    {
    }
    /**
     * Get error collection.
     *
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    /**
     * Get errors.
     *
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Get error messages.
     *
     * @return array
     */
    public function getErrorMessages()
    {
    }
    /**
     * Set user.
     *
     * @param Security\User|null $user User.
     * @return $this;
     */
    public function setUser(\Bitrix\Sender\Security\User $user = null)
    {
    }
    /**
     * Get user.
     *
     * @return Security\User;
     */
    public function getUser()
    {
    }
    /**
     * Get data class.
     *
     * @return null|MainDataManager;
     */
    public static function getDataClass()
    {
    }
    /**
     * Get data class.
     *
     * @return null|Search\Builder
     */
    public static function getSearchBuilder()
    {
    }
    /**
     * Prepare search content.
     *
     * @return $this
     */
    protected function prepareSearchContent()
    {
    }
    /**
     * Save search index.
     *
     * @return bool
     */
    public function saveSearchIndex()
    {
    }
}