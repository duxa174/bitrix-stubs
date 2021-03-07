<?php

namespace Bitrix\Main\Security;

class Cipher
{
    protected $cipherAlgorithm;
    protected $hashAlgorithm;
    protected $ivLength;
    protected $calculateHash;
    /**
     * Cipher constructor. Aes-256-ctr and sha256 are the best currently known methods.
     * @param string $cipherAlgorithm
     * @param string $hashAlgorithm
     * @param bool $calculateHash
     * @throws SecurityException
     */
    public function __construct($cipherAlgorithm = 'aes-256-ctr', $hashAlgorithm = 'sha256', $calculateHash = true)
    {
    }
    /**
     * Encrypts the data by key (symmetric cipher).
     * @param string $data
     * @param string $key
     * @return string Base64 encoded.
     * @throws SecurityException
     */
    public function encrypt($data, $key)
    {
    }
    /**
     * Decrypts the data by key (symmetric cipher).
     * @param string $data Base64 encoded
     * @param string $key
     * @return string
     * @throws SecurityException
     */
    public function decrypt($data, $key)
    {
    }
}