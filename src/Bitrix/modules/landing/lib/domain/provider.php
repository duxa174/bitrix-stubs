<?php

namespace Bitrix\Landing\Domain;

abstract class Provider
{
    /**
     * Provider constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns unique provider code.
     * @return string
     */
    public abstract function getCode() : string;
    /**
     * Returns true, if provider is available.
     * @return bool
     */
    public abstract function enable() : bool;
    /**
     * Returns true, if domain is available for registration.
     * @param string $domainName Domain name
     * @return bool
     */
    public abstract function isEnableForRegistration(string $domainName) : bool;
    /**
     * Returns suggested domains by basic domain name.
     * @param string $domainName Domain name.
     * @param array $tld Domain tld.
     * @return array
     */
    public abstract function getSuggestedDomains(string $domainName, array $tld) : array;
    /**
     * Registration new domain. Returns true on success create.
     * @param string $domainName Domain name.
     * @param array $params Additional params.
     * @return bool
     */
    public abstract function registrationDomain(string $domainName, array $params = []) : bool;
    /**
     * Returns all current portal domains.
     * @return array
     */
    public abstract function getPortalDomains() : array;
}