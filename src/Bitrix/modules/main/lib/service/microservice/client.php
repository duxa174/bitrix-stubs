<?php

namespace Bitrix\Main\Service\MicroService;

class Client
{
    const TYPE_BITRIX24 = "B24";
    const TYPE_BOX = "BOX";
    public static function getPortalType() : string
    {
    }
    /**
     * Return license code of the portal (to be used as a part of request verification scheme).
     *
     * @return string
     */
    public static function getLicenseCode() : string
    {
    }
    public static function getServerName() : string
    {
    }
    /**
     * Returns request authorization hash string.
     *
     * @param array $parameters Array or request parameters to be signed.
     * @param string $suffix Suffix to append to signed string
     *
     * @return string
     */
    public static function signRequest(array $parameters, string $suffix = "") : string
    {
    }
}