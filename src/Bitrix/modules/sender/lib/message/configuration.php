<?php

namespace Bitrix\Sender\Message;

class Configuration
{
    /** @var integer|string|null $id ID. */
    protected $id;
    /** @var array $data Data. */
    protected $data = array();
    /** @var callable $view View. */
    protected $view;
    /** @var ConfigurationOption[] $options UI Options. */
    protected $options = array();
    /**
     * Configuration constructor.
     * @param array $data Data.
     */
    public function __construct(array $data = array())
    {
    }
    /**
     * Get ID.
     *
     * @return int|string|null
     */
    public function getId()
    {
    }
    /**
     * Set ID.
     *
     * @param int|string|null $id ID.
     */
    public function setId($id)
    {
    }
    /**
     * Get view.
     *
     * @return string|null
     */
    public function getView()
    {
    }
    /**
     * Set view.
     *
     * @param callable $view View.
     */
    public function setView($view)
    {
    }
    /**
     * Set.
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
    }
    /**
     * Get.
     *
     * @param string $key Key
     * @param mixed $defaultValue Default value.
     * @return mixed
     */
    public function get($key, $defaultValue = null)
    {
    }
    /**
     * Get value.
     *
     * @param string $key Key.
     * @param mixed $defaultValue Default value.
     * @return mixed
     */
    public function getReadonlyView($key, $defaultValue = null)
    {
    }
    /**
     * Get option.
     *
     * @param $key
     * @return ConfigurationOption|null
     */
    public function getOption($key)
    {
    }
    /**
     * Has options.
     *
     * @return boolean
     */
    public function hasOptions()
    {
    }
    /**
     * Get options.
     *
     * @return ConfigurationOption[]
     */
    public function getOptions()
    {
    }
    /**
     * Get Array options.
     *
     * @return array
     */
    public function getArrayOptions()
    {
    }
    /**
     * Convert to array.
     *
     * @param ConfigurationOption[] $options Options.
     * @return array
     */
    public static function convertToArray(array $options)
    {
    }
    /**
     * Add option.
     *
     * @param ConfigurationOption $option Option.
     * @param string $targetOptionCode Target option code.
     * @param bool $isInsertAfter Is insert after.
     * @return void
     * @throws ArgumentException
     */
    public function addOption(\Bitrix\Sender\Message\ConfigurationOption $option, $targetOptionCode = null, $isInsertAfter = true)
    {
    }
    /**
     * Set array options.
     *
     * @param array $options Options.
     * @return void
     */
    public function setArrayOptions(array $options)
    {
    }
    /**
     * Get templated option.
     *
     * @return ConfigurationOption
     */
    public function getTemplatedOption()
    {
    }
    /**
     * Has templated option.
     *
     * @return bool
     */
    public function hasTemplatedOption()
    {
    }
    /**
     * Get options by group.
     *
     * @param integer $group Group.
     * @return ConfigurationOption[]
     */
    public function getOptionsByGroup($group)
    {
    }
    /**
     * Get options by type.
     *
     * @param string $type Type.
     * @return ConfigurationOption[]
     */
    public function getOptionsByType($type)
    {
    }
    /**
     * Get options of type.
     *
     * @param string $type Type.
     * @return ConfigurationOption|null
     */
    public function getOptionByType($type)
    {
    }
    /**
     * Has options of type.
     *
     * @param string $type Type.
     * @return bool
     */
    public function hasOptionsOfType($type)
    {
    }
    /**
     * Check options.
     *
     * @return Result
     */
    public function checkOptions()
    {
    }
    /**
     * Check required options.
     *
     * @param Result $result Result.
     * @return Result
     */
    protected function checkRequiredOptions(\Bitrix\Main\Result $result = null)
    {
    }
}