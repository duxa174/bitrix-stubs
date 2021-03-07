<?php

namespace Bitrix\Main\UrlPreview\Parser;

class SchemaOrg extends \Bitrix\Main\UrlPreview\Parser
{
    /** @var  \DOMDocument */
    protected $dom;
    /** @var  array */
    protected $schemaMetadata = array();
    protected $documentEncoding;
    /**
     * Parses HTML document's Schema.org metadata.
     *
     * @param HtmlDocument $document
     */
    public function handle(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
    /**
     * @return bool
     */
    protected function getSchemaMetadata()
    {
    }
    /**
     * @param \DOMElement $currentNode
     * @param int $currentDepth
     */
    protected function walkDomTree(\DOMElement $currentNode, $currentDepth = 0)
    {
    }
    /**
     * @param \DOMElement $node
     * @return null|string
     */
    protected function getSchemaPropertyValue(\DOMElement $node)
    {
    }
    /**
     * @param \DOMElement $node
     */
    protected function handleNode(\DOMElement $node)
    {
    }
    /**
     * @param \DOMElement $element
     * @return string
     */
    protected function getNodeInnerHtml(\DOMElement $element)
    {
    }
    /**
     * @param HtmlDocument $document
     * @return bool
     */
    protected function initializeDom(\Bitrix\Main\UrlPreview\HtmlDocument $document)
    {
    }
}