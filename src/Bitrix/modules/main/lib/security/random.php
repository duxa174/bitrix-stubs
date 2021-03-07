<?php

namespace Bitrix\Main\Security;

class Random
{
    const RANDOM_BLOCK_LENGTH = 64;
    // ToDo: In future versions (PHP >= 5.6.0) use shift to the left instead this s**t
    const ALPHABET_NUM = 1;
    const ALPHABET_ALPHALOWER = 2;
    const ALPHABET_ALPHAUPPER = 4;
    const ALPHABET_SPECIAL = 8;
    const ALPHABET_ALL = 15;
    protected static $alphabet = array(self::ALPHABET_NUM => '0123456789', self::ALPHABET_ALPHALOWER => 'abcdefghijklmnopqrstuvwxyz', self::ALPHABET_ALPHAUPPER => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', self::ALPHABET_SPECIAL => ',.#!*%$:-^@{}[]()_+=<>?&;');
    /**
     * Returns random integer with the given range
     *
     * @param int $min The lower bound of the range.
     * @param int $max The upper bound of the range.
     * @return int
     * @throws \Bitrix\Main\SystemException
     */
    public static function getInt($min = 0, $max = \PHP_INT_MAX)
    {
    }
    /**
     * Returns random (if possible) alphanum string
     *
     * @param int $length Result string length.
     * @param bool $caseSensitive Generate case sensitive random string (e.g. `SoMeRandom1`).
     * @return string
     */
    public static function getString($length, $caseSensitive = false)
    {
    }
    /**
     * Returns random (if possible) ASCII string for a given alphabet mask (@see self::ALPHABET_ALL)
     *
     * @param int $length Result string length.
     * @param int $alphabet Alpabet masks (e.g. Random::ALPHABET_NUM|Random::ALPHABET_ALPHALOWER).
     * @return string
     */
    public static function getStringByAlphabet($length, $alphabet)
    {
    }
    /**
     * Returns random (if possible) string for a given charset list.
     *
     * @param int $length Result string length.
     * @param string $charsetList Charset list, must be ASCII.
     * @return string
     */
    public static function getStringByCharsets($length, $charsetList)
    {
    }
    /**
     * Returns random (if possible) byte string
     *
     * @param int $length Result byte string length.
     * @return string
     */
    public static function getBytes($length)
    {
    }
    /**
     * Returns pseudo random block
     *
     * @return string
     */
    protected static function getPseudoRandomBlock()
    {
    }
    /**
     * Checks OpenSSL available
     *
     * @return bool
     */
    protected static function isOpensslAvailable()
    {
    }
    /**
     * Returns strings with charsets based on alpabet mask (see $this->alphabet)
     *
     * Simple example:
     * <code>
     * echo $this->getCharsetsforAlphabet(static::ALPHABET_NUM|static::ALPHABET_ALPHALOWER);
     * //output: 0123456789abcdefghijklmnopqrstuvwxyz
     *
     * echo $this->getCharsetsforAlphabet(static::ALPHABET_SPECIAL|static::ALPHABET_ALPHAUPPER);
     * //output:ABCDEFGHIJKLMNOPQRSTUVWXYZ,.#!*%$:-^@{}[]()_+=<>?&;
     *
     * echo $this->getCharsetsforAlphabet(static::ALPHABET_ALL);
     * //output: 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,.#!*%$:-^@{}[]()_+=<>?&;
     * </code>
     *
     * @param string $alphabet Alpabet masks (e.g. static::ALPHABET_NUM|static::ALPHABET_ALPHALOWER).
     * @return string
     */
    protected static function getCharsetsForAlphabet($alphabet)
    {
    }
    /**
     * Returns number of bits needed to represent an integer
     *
     * @param int $value Integer value for calculate.
     * @return int
     */
    protected static function countBits($value)
    {
    }
}