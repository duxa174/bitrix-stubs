<?php

namespace Bitrix\Main\Security\Sign;

/**
 * Class TimeSigner
 * @sine 14.0.7
 * @package Bitrix\Main\Security\Sign
 */
class TimeSigner
{
    /** @var Signer */
    protected $signer = null;
    /**
     * Creates new TimeSigner object. If you want use your own signing algorithm - you can this
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
     * Sign message with expired time, return string in format:
     *  {message}{separator}{expired timestamp}{separator}{signature}
     *
     * Simple example:
     * <code>
     *  // If salt needed
     *  $foo = (new TimeSigner)->sign('test', '+1 hour', 'my_salt');
     *
     *  // Otherwise
     *  $bar = (new TimeSigner)->sign('test', '+1 day');
     * </code>
     *
     * @param string $value Message for signing.
     * @param string $time Timestamp or datetime description (presented in format accepted by strtotime).
     * @param string|null $salt Salt, if needed.
     * @return string
     */
    public function sign($value, $time, $salt = null)
    {
    }
    /**
     * Check message signature and it lifetime. If everything is OK - return original message.
     *
     * Simple example:
     * <code>
     *  $signer = new TimeSigner;
     *
     *  // Sing message for 1 second
     *  $signedValue = $signer->sign('test', '+1 second');
     *
     *  // Or sign with expiring on some magic timestamp (e.g. 01.01.2030)
     *  $signedValue = $signer->sign('test', 1893445200);
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
     *  echo $signer->unsign($signedValue, 'invalid_salt');
     *  //throw BadSignatureException with message 'Signature does not match'
     *
     *  // Or expired lifetime
     *  echo $signer->unsign($signedValue);
     *  //throw BadSignatureException with message 'Signature timestamp expired (1403039921 < 1403040024)'
     *
     * </code>
     *
     * @param string $signedValue  Signed value, must be in format: {message}{separator}{expired timestamp}{separator}{signature}.
     * @param string|null $salt Salt, if used while signing.
     * @return string
     * @throws BadSignatureException
     */
    public function unsign($signedValue, $salt = null)
    {
    }
    /**
     * Return message signature
     *
     * @param string $value Message.
     * @param int $timestamp Expire timestamp.
     * @param null $salt Salt (if needed).
     * @return string
     * @throws ArgumentTypeException
     */
    public function getSignature($value, $timestamp, $salt = null)
    {
    }
    /**
     * Simply validation of message signature
     *
     * @param string $value Message.
     * @param int $timestamp Expire timestamp.
     * @param string $signature Signature.
     * @param string|null $salt Salt, if used while signing.
     * @return bool True if OK, otherwise - false.
     */
    public function validate($value, $timestamp, $signature, $salt = null)
    {
    }
    /**
     * Return timestamp parsed from English textual datetime description
     *
     * @param string|int $time Timestamp or datetime description (presented in format accepted by strtotime).
     * @return int
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\ArgumentException
     */
    protected function getTimeStamp($time)
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
}