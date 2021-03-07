<?php

namespace Bitrix\Main\ORM\Fields;

class CryptoField extends \Bitrix\Main\ORM\Fields\TextField
{
    protected $cryptoKey;
    // we might want to use different algorithms, so single var might not be enough
    /** @var Security\Cipher */
    protected static $cipher;
    /**
     * CryptoField constructor.
     * @param string $name
     * @param array $parameters Can contain the 'crypto_key' parameter, otherwise the key is taken from .settings.php as
     *  'crypto' => array('value' =>
     *		array (
     * 			'crypto_key' => 'mysupersecretphrase',
     *	))
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($name, $parameters = array())
    {
    }
    /**
     * Checks availability of the crypto class and the crypto key.
     * @param string $key
     * @return bool
     */
    public static function cryptoAvailable($key = '')
    {
    }
    public static function getDefaultKey()
    {
    }
    public function encrypt($data)
    {
    }
    public function decrypt($data)
    {
    }
}