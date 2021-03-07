<?php

namespace Bitrix\Landing\Domain;

class Register
{
    /**
     * B24 service for detect IP for current lang zone.
     */
    const B24_SERVICE_DETECT_IP = 'https://ip.bitrix24.site/getipforzone/?bx24_zone=';
    /**
     * B24 service for detect that domain is available.
     */
    const B24_SERVICE_DETECT_DOMAIN = 'https://ip.bitrix24.site/getdomainstatus/?bx24_site_domain=';
    /**
     * Default IP for DNS.
     */
    const B24_DEFAULT_DNS_IP = '52.59.124.117';
    /**
     * Default CNAME for DNS.
     */
    const B24_DEFAULT_DNS_CNAME = 'lb.bitrix24.site.';
    /**
     * Finds registrator instance and returns it.
     * @return Provider|null
     */
    public static function getInstance() : ?\Bitrix\Landing\Domain\Provider
    {
    }
    /**
     * Returns INA && CNAME records value for domain registration.
     * @return array
     */
    public static function getDNSRecords() : array
    {
    }
    /**
     * Returns true if domain is enable and active now.
     * @param string $domainName Domain name.
     * @return bool
     */
    public static function isDomainActive(string $domainName) : bool
    {
    }
}