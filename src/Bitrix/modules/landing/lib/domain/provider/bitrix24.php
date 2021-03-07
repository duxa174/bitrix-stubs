<?php

namespace Bitrix\Landing\Domain\Provider;

class Bitrix24 extends \Bitrix\Landing\Domain\Provider
{
    /**
     * Returns unique provider code.
     * @return string
     */
    public function getCode() : string
    {
    }
    /**
     * Returns true, if provider is available.
     * @return bool
     */
    public function enable() : bool
    {
    }
    /**
     * Returns available tld.
     * @return array
     */
    public function getTld() : array
    {
    }
    /**
     * Get agreement's URL.
     * @return string|null
     */
    public function getAgreementURL() : ?string
    {
    }
    /**
     * Returns true, if domain is available for registration.
     * @param string $domainName Domain name.
     * @return bool
     */
    public function isEnableForRegistration(string $domainName) : bool
    {
    }
    /**
     * Returns keywords by domain name.
     * @param string $domainName
     * @return array
     */
    protected function getKeywordsByDomain(string $domainName) : array
    {
    }
    /**
     * Returns suggested domains by basic domain name.
     * @param string $domainName Domain name.
     * @param array $tld Domain tld.
     * @return array
     */
    public function getSuggestedDomains(string $domainName, array $tld) : array
    {
    }
    /**
     * Registration new domain. Returns true on success create.
     * @param string $domainName Domain name.
     * @param array $params Additional params.
     * @return bool
     */
    public function registrationDomain(string $domainName, array $params = []) : bool
    {
    }
    /**
     * Returns all current portal domains.
     * @return array
     */
    public function getPortalDomains() : array
    {
    }
}