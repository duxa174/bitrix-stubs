<?php

namespace Bitrix\MobileApp\Janative;

class Utils
{
    /**
     * @param $entityIdentifier
     * @param string $defaultNamespace
     * @return array["name", "namespace","fullname", "defaultFullname"]
     */
    public static function extractEntityDescription($entityIdentifier, $defaultNamespace = "bitrix")
    {
    }
    /**
     * @param $string
     * @param int $options
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function jsonEncode($string, $options = JSON_HEX_TAG | JSON_HEX_AMP | JSON_PRETTY_PRINT | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE)
    {
    }
}