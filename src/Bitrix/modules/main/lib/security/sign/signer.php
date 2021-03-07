<?php

namespace Bitrix\Main\Security\Sign;

/**
 * Class Signer
 * @since 14.0.7
 * @package Bitrix\Main\Security\Sign
 */
class Signer
{
    /** @var \Bitrix\Main\Security\Sign\SigningAlgorithm Signing algorithm */
    protected $algorithm = null;
    protected $separator = '.';
    /** @var string Secret key */
    protected $key = null;
    /**
     * Creates new Signer object. If you want use your own signing algorithm - you can this
     *
     * @param SigningAlgorithm $algorithm Custom signing algorithm.
     */
    public function __construct(\Bitrix\Main\Security\Sign\SigningAlgorithm $algorithm = null)
    {
    }
    /**
     * Set key for signing
     *
     * @param string $value Key.
     * @return $this
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function setKey($value)
    {
    }
    /**
     * Return separator, used for packing/unpacking
     *
     * @return string
     */
    public function getSeparator()
    {
    }
    /**
     * Set separator, used for packing/unpacking
     *
     * @param string $value Separator.
     * @return $this
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function setSeparator($value)
    {
    }
    /**
     * Return message signature
     *
     * @param string $value Message.
     * @param string|null $salt Salt.
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function getSignature($value, $salt = null)
    {
    }
    /**
     * Sign message, return string in format "{message}{separator}{signature}"
     *
     * Simple example:
     * <code>
     *  // If salt needed
     *  $foo = (new Signer)->sign('test', 'my_salt');
     *
     *  // Otherwise
     *  $bar = (new Signer)->sign('test');
     * </code>
     *
     * @param string $value Message for signing.
     * @param string|null $salt Salt, if needed.
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function sign($value, $salt = null)
    {
    }
    /**
     * Check message signature and return original message.
     *
     * Simple example:
     * <code>
     *  $signer = new Signer;
     *
     *  // Sing message
     *  $signedValue = $signer->sign('test');
     *
     *  // Get original message with checking
     *  echo $signer->unsign($signedValue);
     *  // Output: 'test'
     *
     *  // Try to unsigning not signed value
     *  echo $signer->unsign('test');
     *  //throw BadSignatureException with message 'Separator not found in value'
     *
     *  // Or with invalid sign
     *  echo $signer->unsign('test.invalid_sign');
     *
     *  // Or invalid salt
     *  //throw BadSignatureException with message 'Signature does not match'
     *  echo $signer->unsign($signedValue, 'invalid_salt');
     *
     * </code>
     *
     * @param string $signedValue Signed value, must be in format "{message}{separator}{signature}".
     * @param string|null $salt Salt, if used while signing.
     * @return string
     * @throws BadSignatureException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function unsign($signedValue, $salt = null)
    {
    }
    /**
     * Simply validation of message signature
     *
     * @param string $value Message.
     * @param string $signature Signature.
     * @param string|null $salt Salt, if used while signing.
     * @return bool True if OK, otherwise - false.
     */
    public function validate($value, $signature, $salt = null)
    {
    }
    /**
     * Verify message signature provided by hashing algorithm
     *
     * @param string $value Message.
     * @param string $sig Signature.
     * @param string|null $salt Salt, if used while signing.
     * @return bool
     */
    protected function verifySignature($value, $sig, $salt = null)
    {
    }
    /**
     * Return salted key for signing.
     * If key was set by setKey - use it
     * Otherwise - used default (if default key does not exists - automatically generate it)
     *
     * @param string|null $salt Salt, if needed.
     * @throws BadSignatureException
     * @return string
     */
    protected function getKey($salt = null)
    {
    }
    /**
     * Return default (system) key for signing or generate if it does not exists
     *
     * @return string
     */
    protected function getDefaultKey()
    {
    }
    /**
     * Pack array values to single string:
     * pack(['test', 'all', 'values']) -> 'test.all.values'
     *
     * @param array $values Values for packing.
     * @return string
     */
    public function pack(array $values)
    {
    }
    /**
     * Unpack values from string (something like rsplit).
     * Simple example for separator ".":
     * <code>
     *  // Unpack all values:
     *  unpack('test.all.values', 0) -> ['test', 'all', 'values']
     *
     *  // Unpack 2 values (by default). First element containing the rest of string.
     *  unpack('test.all.values') -> ['test.all', 'values']
     *
     *  // Exception if separator is missing
     *  unpack('test.all values', 3) -> throws BadSignatureException
     * </code>
     *
     * @param string $value String for unpacking.
     * @param int $limit If $limit === 0 - unpack all values, default - 2.
     * @return array
     * @throws BadSignatureException
     */
    public function unpack($value, $limit = 2)
    {
    }
    /**
     * Return encoded signature
     *
     * @param string $value Signature in binary representation.
     * @return string Encoded signature
     */
    protected function encodeSignature($value)
    {
    }
    /**
     * Return decoded signature
     *
     * @param string $value Encoded signature.
     * @return string Signature in binary representation
     * @throws BadSignatureException
     */
    protected function decodeSignature($value)
    {
    }
}