<?php

namespace Bitrix\Main\Web;

class Json
{
    const JSON_ERROR_UNKNOWN = -1;
    /**
     * Returns a string containing the JSON representation of $data.
     *
     * @param mixed $data The value being encoded.
     * @param null $options Bitmasked options. Default is JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_HEX_QUOT.
     *
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @see json_encode
     */
    public static function encode($data, $options = null)
    {
    }
    /**
     * Takes a JSON encoded string and converts it into a PHP variable.
     *
     * @param string $data The json string being decoded.
     *
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @see json_decode
     */
    public static function decode($data)
    {
    }
    /**
     * Executes serializeJson on JsonSerializable objects for non-UTF8 instances.
     * We have to do it manually to prevent "malformed UTF-8 characters" error.
     *
     * @param mixed $data
     */
    protected static function serializeJson(&$data)
    {
    }
    /**
     * Converts $data to UTF-8 charset.
     *
     * @param mixed $data Input data.
     * @return mixed
     */
    protected static function convertData($data)
    {
    }
    /**
     * Converts $data from UTF-8 charset.
     *
     * @param mixed $data Input data.
     * @return mixed
     */
    protected static function unConvertData($data)
    {
    }
    /**
     * Checks global error flag and raises exception if needed.
     *
     * @param integer $options Bitmasked options. When JSON_PARTIAL_OUTPUT_ON_ERROR passed no exception is raised.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function checkException($options = 0)
    {
    }
    /**
     * Throws exception with message given.
     *
     * @param string $e Exception message.
     *
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function throwException($e)
    {
    }
}