<?php

namespace Bitrix\Main\Web\DOM;

abstract class Parser
{
    /*@var $htmlParser HtmlParser */
    private static $htmlParser;
    /*@var $config ParserConfig */
    protected $config;
    public static function getHtmlParser()
    {
    }
    public function setConfig(\Bitrix\Main\Web\DOM\ParserConfig $config)
    {
    }
    public function getConfig()
    {
    }
    public abstract function parse($text = "", \Bitrix\Main\Web\DOM\Node $toNode);
    public abstract function getSource(\Bitrix\Main\Web\DOM\Node $node);
}