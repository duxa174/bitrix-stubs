<?php

namespace Bitrix\Landing\External;

class Site24
{
    /**
     * Update domain by name.
     * @param string $domain Current domain name.
     * @param string $newName New domain name.
     * @param string $url Local url of site.
     *
     * @return mixed
     * @throws SystemException
     */
    public static function updateDomain($domain, $newName, $url)
    {
    }
    /**
     * Activate domain by name.
     * @param string $domain Domain name.
     * @param string $active Activate (Y) or deactivate (N).
     * @param string $lang Lang code.
     *
     * @return mixed
     * @throws SystemException
     */
    public static function activateDomain($domain, $active = 'Y', $lang = '')
    {
    }
    /**
     * Add new domain.
     * @param string $domain Domain name.
     * @param string $url Local url of site.
     * @param string string $active Activate (Y) or deactivate (N).
     * @param string string $type Site type.
     * @param string $lang Lang code.
     *
     * @return mixed
     * @throws SystemException
     */
    public static function addDomain($domain, $url, $active = 'Y', $type = 'site', $lang = '')
    {
    }
    /**
     * Exist or not domain.
     * 0 - domain name is available
     * 1 - domain name is not available, but you are owner
     * 2 - domain name is not available
     * @param string $domain Domain name.
     *
     * @return mixed
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function isDomainExists($domain)
    {
    }
    /**
     * Delete domain by name.
     * @param string $domain Domain name.
     *
     * @return mixed
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function deleteDomain($domain)
    {
    }
    /**
     * Add domain with random name.
     * @param string $url Local url of site.
     * @param string $type Site type.
     * @param string $lang Lang code.
     *
     * @return mixed
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function addRandomDomain($url, $type = 'site', $lang = '')
    {
    }
    /**
     * General executable method.
     * @param string $operation Operation code.
     * @param array $params Additional params.
     * @return mixed
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected static function Execute($operation, $params = array())
    {
    }
}