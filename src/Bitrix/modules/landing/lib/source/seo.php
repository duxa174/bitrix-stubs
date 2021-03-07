<?php

namespace Bitrix\Landing\Source;

class Seo
{
    const TITLE = 'title';
    const BROWSER_TITLE = 'browser_title';
    const KEYWORDS = 'keywords';
    const DESCRIPTION = 'description';
    /** @var array seo properties */
    protected $properties = [];
    public function __construct()
    {
    }
    /**
     * @param array $values
     * @return void
     */
    public function setProperties(array $values)
    {
    }
    /**
     * @param string $name
     * @param string|array $value
     * @return void
     */
    public function setProperty($name, $value)
    {
    }
    /**
     * @return array|null
     */
    public function getProperties()
    {
    }
    /**
     * @param string $name
     * @return string|array|null
     */
    public function getProperty($name)
    {
    }
    /**
     * @return void
     */
    public function clear()
    {
    }
    /**
     * @return void
     */
    public function clearProperties()
    {
    }
    /**
     * @param string $name
     * @return void
     */
    public function clearProperty($name)
    {
    }
    /**
     * @param string $value
     * @return void
     */
    public function setTitle($value)
    {
    }
    /**
     * @param string $value
     * @return void
     */
    public function setBrowserTitle($value)
    {
    }
    /**
     * @param string|array $value
     * @return void
     */
    public function setKeywords($value)
    {
    }
    /**
     * @param string $value
     * @return void
     */
    public function setDescription($value)
    {
    }
    /**
     * @return string|null
     */
    public function getTitle()
    {
    }
    /**
     * @return string|null
     */
    public function getBrowserTitle()
    {
    }
    /**
     * @return string|null
     */
    public function getKeywords()
    {
    }
    /**
     * @return string|null
     */
    public function getDescription()
    {
    }
    /**
     * @param string $value
     * @param mixed $name
     * @return bool
     */
    protected static function clearValues($value, $name)
    {
    }
}