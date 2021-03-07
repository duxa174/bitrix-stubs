<?php

namespace Bitrix\Sale\Location\Util;

class Assert
{
    // checkers
    /**
     * Method checks if the given argument is an integer value, or can be casted to it
     *
     * @param mixed $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return integer checked and casted value
     */
    public static final function expectInteger($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a positive integer value, or can be casted to it
     *
     * @param mixed $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return integer checked and casted value
     */
    public static final function expectIntegerPositive($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a non-negative integer value, or can be casted to it
     *
     * @param mixed $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return integer checked and casted value
     */
    public static final function expectIntegerNonNegative($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a non-zero-length string value, or can be casted to it
     *
     * @param mixed $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return string checked and casted value
     */
    public static final function expectStringNotNull($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is an array
     *
     * @param mixed[] $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return mixed[] value being checked
     */
    public static final function expectArray($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a non-empty array
     *
     * @param mixed[] $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return mixed[] value being checked
     */
    public static final function expectNotEmptyArray($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a non-empty array of unique positive integers (or somehow can be casted to it)
     *
     * @param mixed[] $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return integer[] checked and casted value
     */
    public static final function expectArrayOfUniqueIntegerNotNull($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument is a non-empty array of unique non-zero-length strings (or somehow can be casted to it)
     *
     * @param mixed[] $arg argument to check
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return string[] checked and casted value
     */
    public static final function expectArrayOfUniqueStringNotNull($arg, $argName = '', $customMsg = '')
    {
    }
    /**
     * Method checks if the given argument belongs to a set of elements
     *
     * @param mixed[] $arg argument to check
     * @param mixed[] $enum enumeration to check argument belong to
     * @param string $argName argument name to figure in a error message
     * @param string $customMsg custom message to be shown instead of a standard one
     *
     * @throws \Bitrix\Main\ArgumentException
     *
     * @return mixed[] checked and casted value
     */
    public static final function expectEnumerationMember($arg, $enum = array(), $argName = '', $customMsg = '')
    {
    }
    // casters
    public static function castTrimLC($value)
    {
    }
    // announcers
    /**
     * Method announces that method or action is not implemented
     *
     * @param string $msg message to be shown
     *
     * @throws \Bitrix\Main\NotImplementedException
     */
    public static final function announceNotImplemented($msg = '')
    {
    }
    /**
     * Method announces that method or action is not supported
     *
     * @param string $msg message to be shown
     *
     * @throws \Bitrix\Main\NotImplementedException
     */
    public static final function announceNotSupported($msg = '')
    {
    }
    private static final function formMessage($msgCode, $argName = '', $customMsg = '')
    {
    }
}