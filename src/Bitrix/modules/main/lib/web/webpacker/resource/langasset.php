<?php

namespace Bitrix\Main\Web\WebPacker\Resource;

/**
 * Class LangAsset
 *
 * @package Bitrix\Main\Web\WebPacker\Resource
 */
class LangAsset extends \Bitrix\Main\Web\WebPacker\Resource\Asset
{
    protected $type = self::LANG;
    protected $useAllLangs = false;
    /**
     * Get content.
     *
     * @return array
     */
    public function getContent()
    {
    }
    /**
     * Use all languages.
     *
     * @param bool $use Use.
     * @return $this
     */
    public function useAllLangs($use)
    {
    }
    /**
     * Convert messages to camel case.
     *
     * @param array $messages Messages.
     * @return array
     */
    public static function toCamelCase(array $messages)
    {
    }
    /**
     * Delete prefixes in messages.
     *
     * @param array $messages Messages.
     * @param array $prefixes Prefixes.
     * @return array
     */
    public static function deletePrefixes(array $messages, array $prefixes)
    {
    }
    /**
     * Return true if asset exists.
     *
     * @param string $path Relative path.
     * @return string
     */
    public static function isExists($path)
    {
    }
    protected static function getLanguages()
    {
    }
}