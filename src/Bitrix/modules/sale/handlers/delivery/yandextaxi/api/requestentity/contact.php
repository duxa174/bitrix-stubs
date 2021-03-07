<?php

namespace Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity;

/**
 * Class Contact
 * @package Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity
 * @internal
 */
final class Contact extends \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\RequestEntity
{
    /** @var string */
    protected $phone;
    /** @var string */
    protected $name;
    /** @var string */
    protected $email;
    /**
     * @return string
     */
    public function getPhone()
    {
    }
    /**
     * @param string $phone
     * @return Contact
     */
    public function setPhone(string $phone) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @param string $name
     * @return Contact
     */
    public function setName(string $name) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact
    {
    }
    /**
     * @return string
     */
    public function getEmail()
    {
    }
    /**
     * @param string $email
     * @return Contact
     */
    public function setEmail(string $email) : \Sale\Handlers\Delivery\YandexTaxi\Api\RequestEntity\Contact
    {
    }
}