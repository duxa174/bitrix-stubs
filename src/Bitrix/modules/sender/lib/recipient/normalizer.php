<?php

namespace Bitrix\Sender\Recipient;

/**
 * Class Normalizer
 * @package Bitrix\Sender\Recipient
 */
class Normalizer
{
    /**
     * Normalize.
     *
     * @param string $code Code.
     * @param integer $typeId Type ID.
     * @return string|null
     */
    public static function normalize($code, $typeId = \Bitrix\Sender\Recipient\Type::EMAIL)
    {
    }
    /**
     * Normalize email.
     *
     * @param string $code Code.
     * @return string
     */
    public static function normalizeEmail($code)
    {
    }
    /**
     * Normalize phone number.
     *
     * @param string $phone Phone number.
     * @return string|null
     */
    public static function normalizePhone($phone)
    {
    }
    /**
     * Normalize im.
     *
     * @param string $code Code.
     * @return string
     */
    public static function normalizeIm($code)
    {
    }
    /**
     * Normalize Crm entity code.
     *
     * @param string $code Code.
     * @return string
     */
    public static function normalizeCrmEntityId($code)
    {
    }
}