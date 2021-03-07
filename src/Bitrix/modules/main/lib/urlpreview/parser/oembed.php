<?php

namespace Bitrix\Main\UrlPreview\Parser;

class Oembed extends \Bitrix\Main\UrlPreview\Parser
{
    const OEMBED_TYPE_XML = "text/xml+oembed";
    const OEMBED_TYPE_JSON = "application/json+oembed";
    /** @var string Possible values: (json|xml) */
    protected $metadataType;
    /** @var string */
    protected $metadataUrl;
    /** @var  string */
    protected $metadataEncoding;
    /**
     * Downloads and parses HTML's document metadata, formatted with oEmbed standard.
     *
     * @param HtmlDocument $document HTML document.
     * @param HttpClient|null $httpClient
     */
    public function handle(\Bitrix\Main\UrlPreview\HtmlDocument $document, \Bitrix\Main\Web\HttpClient $httpClient = null)
    {
    }
    /**
     * @param HtmlDocument $document
     * @return bool
     */
    protected function detectOembedLink(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * @param string $rawMetadata
     * @return array|false
     */
    protected function parseMetadata($rawMetadata)
    {
    }
    protected function parseJsonMetadata($rawMetadata)
    {
    }
    /**
     * @param string $rawMetadata
     * @return array|false
     */
    protected function parseXmlMetadata($rawMetadata)
    {
    }
    protected function getRawMetaData(\Bitrix\Main\Web\HttpClient $httpClient = null)
    {
    }
}