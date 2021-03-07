<?php

namespace Bitrix\Main\Component;

class ParameterSigner
{
    /**
     * @param string $componentName
     * @param array $parameters
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function signParameters($componentName, $parameters)
    {
    }
    /**
     * @param string $componentName
     * @param string $signedParameters
     *
     * @return array
     * @throws Security\Sign\BadSignatureException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function unsignParameters($componentName, $signedParameters)
    {
    }
    private static function unserialize(string $str, string $componentName)
    {
    }
    protected static function refineComponentName($componentName)
    {
    }
}