<?php

namespace Bitrix\Sender\Recipient;

/**
 * Class Validator
 * @package Bitrix\Sender\Recipient
 */
class Validator
{
    /**
     * Validate.
     *
     * @param string $code Code.
     * @param integer $typeId Type ID.
     * @return string
     */
    public static function validate($code, $typeId = \Bitrix\Sender\Recipient\Type::EMAIL)
    {
    }
    /**
     * Validate email.
     *
     * @param string $email Email.
     * @return string
     */
    public static function validateEmail($email)
    {
    }
    /**
     * Validate phone number.
     *
     * @param string $phone Phone number.
     * @return bool
     */
    public static function validatePhone($phone)
    {
    }
    /**
     * Validate im code.
     *
     * @param string $code Code.
     * @return bool
     */
    public static function validateIm($code)
    {
    }
    /**
     * Validate Crm entity code.
     *
     * @param string $code Code.
     * @return bool
     */
    public static function validateCrmEntityId($code)
    {
    }
}