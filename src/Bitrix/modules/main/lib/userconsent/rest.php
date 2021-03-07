<?php

namespace Bitrix\Main\UserConsent;

/**
 * Class Rest
 * @package Bitrix\Main\UserConsent
 */
class Rest
{
    /**
     * Get agreement list.
     *
     * @param array $query Query parameters.
     * @param int $nav Navigation.
     * @param \CRestServer $server Rest server.
     * @return array
     */
    public static function getAgreementList($query, $nav = 0, \CRestServer $server)
    {
    }
    /**
     * Get agreement text.
     *
     * @param array $query Query parameters.
     * @param int $nav Navigation.
     * @param \CRestServer $server Rest server.
     * @return array
     * @throws RestException
     */
    public static function getAgreementText($query, $nav = 0, \CRestServer $server)
    {
    }
    /**
     * Add consent.
     *
     * @param array $query Query parameters.
     * @param int $nav Navigation.
     * @param \CRestServer $server Rest server.
     * @return int
     * @throws RestException
     */
    public static function addConsent($query, $nav = 0, \CRestServer $server)
    {
    }
    /**
     * Get agreement instance by ID.
     *
     * @param int|null $id ID.
     * @return Agreement
     * @throws RestException
     */
    protected static function getAgreementById($id)
    {
    }
    /**
     * Print rest errors.
     *
     * @param Error[] $errors Errors.
     * @throws RestException
     */
    protected static function printErrors(array $errors)
    {
    }
}