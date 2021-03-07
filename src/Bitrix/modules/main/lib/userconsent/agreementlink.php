<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class AgreementLink
 * @package Bitrix\Main\UserConsent
 */
class AgreementLink
{
    const SIGN_SALT = 'user_consent';
    /** @var array $errors Errors. */
    protected static $errors = array();
    /**
     * Return Uri parameters.
     *
     * @param integer $agreementId Agreement ID.
     * @param array $replace Replace data.
     * @param string $baseUri Base Uri.
     * @return array
     */
    public static function getUri($agreementId, array $replace = array(), $baseUri = '')
    {
    }
    /**
     * Replace template by data.
     *
     * @param array $parameters Uri parameters.
     * @return Agreement
     */
    public static function getAgreementFromUriParameters(array $parameters = array())
    {
    }
    protected static function clearErrors()
    {
    }
    /**
     * Get errors.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
}