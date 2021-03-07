<?php

namespace Bitrix\Main\Security\Sign;

/**
 * Class HmacAlgorithm
 * @since 14.0.7
 * @package Bitrix\Main\Security\Sign
 */
class HmacAlgorithm extends \Bitrix\Main\Security\Sign\SigningAlgorithm
{
    // ToDo: need option here?
    // Default hashing algorithm used by HMAC
    protected $hashAlgorithm = 'sha256';
    /**
     * Creates signing algorithm based on HMAC.
     *
     * @since 16.0.0
     * @param string|null $hashAlgorithm Hashing algorithm (optional). See registered algorithms in hash_algos().
     */
    public function __construct($hashAlgorithm = null)
    {
    }
    /**
     * Set hashing algorithm for using in HMAC
     *
     * @param string $hashAlgorithm Hashing algorithm. See registered algorithms in hash_algos().
     * @return $this
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
    }
    /**
     * Return currently used hashing algorithm
     *
     * @return string
     */
    public function getHashAlgorithm()
    {
    }
    /**
     * Return message signature
     *
     * @param string $value Message.
     * @param string $key Secret password for HMAC.
     * @return string
     */
    public function getSignature($value, $key)
    {
    }
    /**
     * Verify message signature
     *
     * @param string $value Message.
     * @param string $key Secret password used while signing.
     * @param string $sig Message signature password for HMAC.
     * @return bool
     */
    public function verify($value, $key, $sig)
    {
    }
    /**
     * A timing safe comparison method.
     *
     * C function memcmp() internally used by PHP, exits as soon as a difference
     * is found in the two buffers. That makes possible of leaking
     * timing information useful to an attacker attempting to iteratively guess
     * the unknown string (e.g. password).
     *
     * @param string $expected Expected string (e.g. generated signature).
     * @param string $actual Actual string (e.g. signature received from user).
     * @throws \Bitrix\Main\ArgumentTypeException
     * @return bool
     */
    protected function compareStrings($expected, $actual)
    {
    }
}