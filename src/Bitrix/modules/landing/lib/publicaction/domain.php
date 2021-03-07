<?php

namespace Bitrix\Landing\PublicAction;

class Domain
{
    /**
     * Get available domains.
     * @param array $params Params ORM array.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function getList(array $params = array())
    {
    }
    /**
     * Create new domain.
     * @param array $fields Domain data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function add(array $fields)
    {
    }
    /**
     * Update domain.
     * @param int $id Domain id.
     * @param array $fields Domain new data.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function update($id, array $fields)
    {
    }
    /**
     * Delete domain.
     * @param int $id Domain id.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function delete($id)
    {
    }
    /**
     * Punycode the domain name.
     * @param string $domain Domain for code.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function punycode($domain)
    {
    }
    /**
     * Checks if domain is available and puny it.
     * @param string $domain Domain name.
     * @param array $filter Additional filter for exclude in domain search.
     * @return \Bitrix\Landing\PublicActionResult
     */
    public static function check($domain, array $filter = [])
    {
    }
    /**
     * Returns info about domain registration.
     * @param string $domainName Domain name.
     * @param array $tld Domain tld.
     * @return PublicActionResult
     */
    public static function whois(string $domainName, array $tld) : \Bitrix\Landing\PublicActionResult
    {
    }
}