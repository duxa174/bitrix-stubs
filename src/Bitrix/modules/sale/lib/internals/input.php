<?php

namespace Bitrix\Sale\Internals\Input;

// TODO integrate with input.js on adding multiple item
class Manager
{
    static function initJs()
    {
    }
    protected static $types = array();
    /** Return html representation of value.
     * @param array $input - input settings values
     * @param mixed $value - value to render
     * @return string - html
     * @throws SystemException
     */
    static function getViewHtml(array $input, $value = null)
    {
    }
    /** Return html input control for value.
     * @param string $name - name for input control (eg: 'email', 'person[1][name]')
     * @param array $input - input settings values
     * @param mixed $value - value to render
     * @return string - html
     * @throws SystemException
     */
    static function getEditHtml($name, array $input, $value = null)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param null $value
     * @return mixed
     * @throws SystemException
     */
    static function getFilterEditHtml($name, array $input, $value = null)
    {
    }
    /** Get user input validation errors.
     * @param array $input - input settings values
     * @param string|array|null $value - value to validate
     * @return array - empty array on success OR array ([error code] => error message) on failure
     * @throws \Bitrix\Main\SystemException
     */
    static function getError(array $input, $value)
    {
    }
    /**
     * @param array $input
     * @param $value
     *
     * @return mixed
     * @throws SystemException
     */
    static function getRequiredError(array $input, $value)
    {
    }
    /** Get normalized user input value (for example to save to database).
     * Before saving to database check value for errors with Manager::getError!
     * @param array $input - input settings values
     * @param string|array|null $value - value to normalize
     * @return mixed result
     * @throws \Bitrix\Main\SystemException
     */
    static function getValue(array $input, $value)
    {
    }
    /** Get multiple value.
     * @param array $input
     * @param mixed $value
     * @return array - if value is single, wrap it in array (except null, which gets empty array)
     * @throws \Bitrix\Main\SystemException
     */
    static function asMultiple(array $input, $value)
    {
    }
    /** Get settings inputs for user control.
     * @param array $input - input settings values
     * @param string|null $reload - javascript form reload action
     * @return array - ([setting name] => input array)
     * @throws \Bitrix\Main\SystemException
     */
    static function getSettings(array $input, $reload = null)
    {
    }
    /** Get settings, common to all input types.
     * @param array $input - input settings values
     * @param string|null $reload - javascript form reload action
     * @return array - ([setting name] => input array)
     */
    static function getCommonSettings(array $input, $reload = null)
    {
    }
    /** Get all registered types.
     * @return array - ([TYPE NAME] => array('CLASS', 'NAME', ...))
     */
    static function getTypes()
    {
    }
    /** Register new type.
     * @param string $name - type name
     * @param array $type - type parameters
     *      'CLASS' => __NAMESPACE__.'ClassName'
     *      'NAME' => Loc::getMessage('CLASS_LOCALIZED_NAME')
     * @return void
     * @throws SystemException
     */
    static function register($name, array $type)
    {
    }
    protected static $initialized;
    protected function initialize()
    {
    }
}
abstract class Base
{
    const MULTITAG = 'div';
    /** Check if value is multiple.
     * @param $value
     * @return bool
     */
    static function isMultiple($value)
    {
    }
    /** Get single value.
     * @param $value
     * @return mixed - if value is multiple, get first meaningful value (which is not null)
     */
    static function asSingle($value)
    {
    }
    static function asMultiple($value)
    {
    }
    public static function getViewHtml(array $input, $value = null)
    {
    }
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    public static function getEditHtml($name, array $input, $value = null)
    {
    }
    /** @return string */
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    public static function getEditHtmlSingleDelete($name, array $input)
    {
    }
    public static function getEditHtmlInsert($tag, $replace, $name, $sample, $after)
    {
    }
    public static function getEditHtmlSingleAfterInsert()
    {
    }
    public static function getError(array $input, $value)
    {
    }
    /**
     * @param array $input
     * @param $value
     *
     * @return bool
     */
    public static function getRequiredError(array $input, $value)
    {
    }
    /**
     * @param array $input
     * @param $value
     *
     * @throws SystemException
     */
    public static function getErrorSingle(array $input, $value)
    {
    }
    public static function getValue(array $input, $value)
    {
    }
    public static function getValueSingle(array $input, $value)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
    // utils
    protected static function getHiddenRecursive($name, $value, $attributes)
    {
    }
    /** @deprecated */
    protected static function extractAttributes(array $input, array $boolean, array $other, $withGlobal = true)
    {
    }
    /**
     * @return bool
     */
    public static function hasMultipleValuesSupport()
    {
    }
}
/**
 * String
 */
class StringInput extends \Bitrix\Sale\Internals\Input\Base
{
    protected static $patternDelimiters = array('/', '#', '~');
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    static function getSettings(array $input, $reload)
    {
    }
    /**
     * @param $value
     *
     * @return bool
     */
    public static function isDeletedSingle($value)
    {
    }
}
/**
 * Number
 */
class Number extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
}
/**
 * Either Y or N
 */
class EitherYN extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    public static function getValueSingle(array $input, $value)
    {
    }
}
/**
 * Enumeration
 */
class Enum extends \Bitrix\Sale\Internals\Input\Base
{
    private static function flatten(array $array)
    {
    }
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getEditHtml($name, array $input, $value = null)
    {
    }
    private static function getEditOptionsHtml(array $options, array $selected, $selector, $group, $option)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    static function getSettings(array $input, $reload)
    {
    }
}
/**
 * File
 * Must use: File::getPostWithFiles before using this type!
 */
class File extends \Bitrix\Sale\Internals\Input\Base
{
    /** Normalize $_FILES structure and join it with $_POST.
     * Must be called before using File type!
     *
     * PHP default $_FILES structure:
     *
     * Array([name]     => Array([0] => photo.jpg     , [1] =>  )
     *       [type]     => Array([0] => image/jpeg    , [1] =>  )
     *       [tmp_name] => Array([0] => /tmp/dsk4le5se, [1] =>  )
     *       [error]    => Array([0] => 0             , [1] => 4)
     *       [size]     => Array([0] => 45673         , [1] => 0))
     *
     * Normalized files structure:
     *
     * Array(
     *     [0] => Array(
     *         [name]     => photo.jpg
     *         [type]     => image/jpeg
     *         [tmp_name] => /tmp/dsk4le5se
     *         [error]    => 0
     *         [size]     => 45673
     *     )
     *     [1] => Array(
     *         [name]     =>
     *         [type]     =>
     *         [tmp_name] =>
     *         [error]    => 4
     *         [size]     =>
     *     )
     * )
     *
     * Example: <input type="file" name="PROFILE[5][PHOTOS][]"> - will be normalized as expected in post
     *
     * @param array $post  - $_POST
     * @param array $files - $_FILES
     * @return array       - post + fixed files
     */
    static function getPostWithFiles(array $post, array $files)
    {
    }
    private static function getPostWithFilesRecursive(array &$root, array $values, $property)
    {
    }
    /** @deprecated
     * Load file array from database.
     * @param $value
     * @return array - file array
     */
    static function loadInfo($value)
    {
    }
    /** deprecated */
    static function loadInfoSingle($file)
    {
    }
    /** Check if file is marked for deletion.
     * @param $value
     * @return bool
     */
    static function isDeletedSingle($value)
    {
    }
    /** Check if file is uploaded.
     * @param $value
     * @return bool
     */
    static function isUploadedSingle($value)
    {
    }
    // input methods ///////////////////////////////////////////////////////////////////////////////////////////////////
    static function isMultiple($value)
    {
    }
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    public static function getEditHtmlSingleDelete($name, array $input)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    public static function getValueSingle(array $input, $value)
    {
    }
    public static function getSettings(array $input, $reload)
    {
    }
}
/**
 * Date
 */
class Date extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getEditHtmlSingleDelete($name, array $input)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
    static function getSettings(array $input, $reload)
    {
    }
}
/**
 * Location
 */
class Location extends \Bitrix\Sale\Internals\Input\Base
{
    public static function getViewHtmlSingle(array $input, $value)
    {
    }
    /**
     * @param $name
     * @param array $input
     * @param $value
     * @return string
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    public static function getEditHtml($name, array $input, $value = null)
    {
    }
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
    public static function getErrorSingle(array $input, $value)
    {
    }
}
/**
 * Class Address
 * @package Bitrix\Sale\Internals\Input
 */
class Address extends \Bitrix\Sale\Internals\Input\Base
{
    /**
     * @inheritdoc
     */
    static function isMultiple($value)
    {
    }
    /**
     * @inheritdoc
     */
    public static function hasMultipleValuesSupport()
    {
    }
    /**
     * @param array $input
     * @param \Bitrix\Location\Entity\Address $value
     * @return string
     */
    public static function getViewHtml(array $input, $value = null)
    {
    }
    /**
     * @inheritdoc
     */
    public static function getFilterEditHtml($name, array $input, $value)
    {
    }
    /**
     * @param array $input
     * @param $value
     * @return array
     */
    public static function getErrorSingle(array $input, $value)
    {
    }
    /**
     * @param array $input
     * @param $value
     * @return array
     */
    public static function getRequiredError(array $input, $value)
    {
    }
    /**
     * @inheritdoc
     */
    public static function getEditHtmlSingle($name, array $input, $value)
    {
    }
}