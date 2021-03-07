<?php

namespace Bitrix\Main\Web;

final class CookiesCrypter
{
    public const COOKIE_MAX_SIZE = 4096;
    public const COOKIE_RESERVED_SUFFIX_BYTES = 3;
    private const SIGN_PREFIX = '-crpt-';
    private const CIPHER_KEY_SUFFIX = 'cookiecrypter';
    /** @var string */
    protected $cipherKey;
    /** @var Cipher */
    protected $cipher;
    public function __construct()
    {
    }
    protected function buildCipher() : self
    {
    }
    protected function prependSuffixToKey(string $key) : string
    {
    }
    /**
     * @param CryptoCookie $cookie
     * @return iterable|Cookie[]
     */
    public function encrypt(\Bitrix\Main\Web\CryptoCookie $cookie) : iterable
    {
    }
    public function decrypt(string $name, string $value, iterable $cookies) : string
    {
    }
    /**
     * @param CryptoCookie $cookie
     * @param string       $encryptedValue
     * @return iterable|Cookie[]
     */
    protected function packCookie(\Bitrix\Main\Web\CryptoCookie $cookie, string $encryptedValue) : iterable
    {
    }
    protected function unpackCookie(string $mainCookie, iterable $cookies) : string
    {
    }
    protected function encryptValue(string $value) : string
    {
    }
    protected function decryptValue(string $value) : string
    {
    }
    private function decodeUrlSafeB64($input)
    {
    }
    private function encodeUrlSafeB64($input)
    {
    }
    public function shouldEncrypt(\Bitrix\Main\Web\Cookie $cookie) : bool
    {
    }
    public function shouldDecrypt(string $cookieName, string $cookieValue) : bool
    {
    }
    protected function prependSign(string $value) : string
    {
    }
    protected function removeSign(string $value) : string
    {
    }
    public function getCipherKey() : string
    {
    }
}