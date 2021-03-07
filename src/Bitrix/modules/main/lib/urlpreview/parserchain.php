<?php

namespace Bitrix\Main\UrlPreview;

class ParserChain
{
    /** @var array */
    protected static $metadataParsers = array('Bitrix\\Main\\UrlPreview\\Parser\\OpenGraph', 'Bitrix\\Main\\UrlPreview\\Parser\\SchemaOrg', 'Bitrix\\Main\\UrlPreview\\Parser\\Oembed', 'Bitrix\\Main\\UrlPreview\\Parser\\Common');
    /**
     * @var array Key is host, value - parser class name
     */
    protected static $metadataParsersByHost = ['vk.com' => 'Bitrix\\Main\\UrlPreview\\Parser\\Vk', 'www.facebook.com' => 'Bitrix\\Main\\UrlPreview\\Parser\\Facebook', 'www.instagram.com' => 'Bitrix\\Main\\UrlPreview\\Parser\\Instagram', 'maps.apple.com' => 'Bitrix\\Main\\UrlPreview\\Parser\\AppleMaps'];
    /**
     * @param Uri $uri
     * @return array
     */
    protected static function getParserChain(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * Executes chain of parsers, passing them $document
     *
     * @param HtmlDocument $document
     */
    public static function extractMetadata(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * Registers special parser for host
     *
     * @param string $host
     * @param string $parserClassName Parser class must extend \Bitrix\Main\UrlPreview\Parser
     * @throws ArgumentException
     */
    public static function registerMetadataParser($host, $parserClassName)
    {
    }
}