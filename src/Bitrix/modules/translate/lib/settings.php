<?php

namespace Bitrix\Translate;

class Settings extends \Bitrix\Translate\IO\File implements \Iterator, \Countable, \ArrayAccess
{
    const OPTION_FILE_NAME = '.settings.php';
    /** @var string[] */
    protected $options = null;
    /** @var int */
    protected $optionsCount = null;
    /** @var array */
    protected $optionCodes = [];
    /** @var int */
    protected $dataPosition = 0;
    /**
     * Constructs instance by lang path.
     *
     * @param string $fullPath Full path to language file.
     *
     * @return Translate\Settings|null
     * @throws Main\ArgumentException
     */
    public static function instantiateByPath($fullPath)
    {
    }
    //region Load & Save
    /**
     * Returns option for file/folder.
     *
     * @param string $langPath Path to language file.
     *
     * @return array
     */
    public function getOptions($langPath = '')
    {
    }
    //endregion
    //region Load & Save
    /**
     * Loads option file for operate.
     *
     * @return bool
     */
    public function load()
    {
    }
    /**
     * Save changes or create new file.
     *
     * @return boolean
     */
    public function save()
    {
    }
    //region ArrayAccess
    /**
     * Checks existence of the phrase by its code.
     *
     * @param string $code Phrase code.
     *
     * @return boolean
     */
    public function offsetExists($code)
    {
    }
    /**
     * Returns phrase by its code.
     *
     * @param string $code Phrase code.
     *
     * @return string|null
     */
    public function offsetGet($code)
    {
    }
    /**
     * Offset to set
     *
     * @param string $code Phrase code.
     * @param string $phrase Phrase.
     *
     * @return void
     */
    public function offsetSet($code, $phrase)
    {
    }
    /**
     * Unset phrase by code.
     *
     * @param string $code Language code.
     *
     * @return void
     */
    public function offsetUnset($code)
    {
    }
    //endregion
    //region Iterator
    /**
     * Return the current phrase element.
     *
     * @return array|null
     */
    public function current()
    {
    }
    /**
     * Move forward to next phrase element.
     *
     * @return void
     */
    public function next()
    {
    }
    /**
     * Return the key of the current phrase element.
     *
     * @return string|null
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @return boolean
     */
    public function valid()
    {
    }
    /**
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
    }
    //endregion
    //region Countable
    /**
     * Returns amount phrases in the language file.
     *
     * @param bool $allowDirectFileAccess Allow include file to count phrases.
     *
     * @return int
     */
    public function count($allowDirectFileAccess = false)
    {
    }
    //endregion
}