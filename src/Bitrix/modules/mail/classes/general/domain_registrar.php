<?php

class CMailDomainRegistrar
{
    /**
     * Allowed registrar classes by zones.
     */
    const REGISTRAR_CLASSES = ['ru' => '\\Bitrix\\Mail\\Registrar\\RegRu', 'ua' => '\\Bitrix\\Mail\\Registrar\\Omnilance'];
    /**
     * Current registrar class.
     * @var string
     */
    private static $classRegistrar = '\\Bitrix\\Mail\\Registrar\\RegRu';
    /**
     * Sets new class registrar.
     * @param string $className Class name.
     * @return void
     */
    public static function setRegistrarClass(string $className) : void
    {
    }
    /**
     * Checks domain available.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true if domain exists.
     */
    public static function isDomainExists(string $user, string $password, string $domain, ?string &$error) : ?bool
    {
    }
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
    public static function suggestDomain(string $user, string $password, ?string $word1, ?string $word2, array $tlds, ?string &$error) : ?array
    {
    }
    /**
     * Creates new domain.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static function createDomain(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool
    {
    }
    public static function checkDomain($user, $password, $domain, &$error)
    {
    }
    public static function renewDomain($user, $password, $domain, &$error)
    {
    }
    /**
     * Updates domain DNS.
     * @param string $user User name.
     * @param string $password User password.
     * @param string $domain Domain name.
     * @param array $params Additional params.
     * @param string|null &$error Error message if occurred.
     * @return bool|null Returns true on success.
     */
    public static function updateDns(string $user, string $password, string $domain, array $params, ?string &$error) : ?bool
    {
    }
    public static function getDomainsList($user, $password, $filter = array(), &$error)
    {
    }
    private static function getErrorCode($error)
    {
    }
}