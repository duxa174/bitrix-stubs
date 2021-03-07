<?php

namespace Bitrix\Mail\Registrar;

abstract class Registrar
{
    /**
     * Checks domain available.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true if domain exists.
     */
    public static abstract function checkDomain(string $user, string $password, string $domain, ?string &$error) : ?bool;
    /**
     * Suggests domains by query words.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $word1 Query word 1.
     * @param string $word2 Query word 2.
     * @param array $tlds Query tlds.
     * @param string|null &$error Error message if occurred.
     * @return array|null
     */
    public static abstract function suggestDomain(string $user, string $password, string $word1, string $word2, array $tlds, ?string &$error) : ?array;
    /**
     * Creates new domain.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static abstract function createDomain(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool;
    /**
     * Updates domain DNS.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static abstract function updateDns(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool;
}