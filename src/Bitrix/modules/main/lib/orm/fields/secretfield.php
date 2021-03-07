<?php

namespace Bitrix\Main\ORM\Fields;

class SecretField extends \Bitrix\Main\ORM\Fields\CryptoField
{
    protected $secretLength = 20;
    /**
     * SecretField constructor.
     * @param string $name
     * @param array $parameters Can contain 'secret_length'.
     */
    public function __construct($name, $parameters = [])
    {
    }
    /**
     * @param int $length The length of the secret
     */
    public function configureSecretLength($length)
    {
    }
    /**
     * Encodes binary data before save into DB.
     * @param string $data
     * @return string
     */
    public function encode($data)
    {
    }
    /**
     * Decodes into binary data from DB.
     * @param $data
     * @return false|string
     */
    public function decode($data)
    {
    }
    /**
     * @return string
     */
    public function getRandomBytes()
    {
    }
}