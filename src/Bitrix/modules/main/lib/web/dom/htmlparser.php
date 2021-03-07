<?php

namespace Bitrix\Main\Web\DOM;

class HtmlParser extends \Bitrix\Main\Web\DOM\Parser
{
    public $debugTime = 0;
    protected $tagsMustBeClosed = array('SCRIPT', 'STYLE');
    public $storePhpCode = true;
    protected static $objectCounter = 0;
    protected $currentObjectNumber;
    protected $storedItemCounter;
    protected $storedPHP = array();
    public function __construct()
    {
    }
    /*
     * @param Node $node
     * @return string
     */
    public function getSource(\Bitrix\Main\Web\DOM\Node $node)
    {
    }
    protected function getSourceAttr(\Bitrix\Main\Web\DOM\Attr $node)
    {
    }
    protected function getSourceElement(\Bitrix\Main\Web\DOM\Element $node)
    {
    }
    protected function getSourceDocType(\Bitrix\Main\Web\DOM\DocumentType $node)
    {
    }
    /*
     * @param string $text
     * @param Node $node
     * @return void
     */
    public function parse($text = "", \Bitrix\Main\Web\DOM\Node $node)
    {
    }
    protected function parseElement($text)
    {
    }
    protected function parseDocType($text)
    {
    }
    protected function parseAttributes($text)
    {
    }
    protected function parseAttributesOld($text)
    {
    }
    protected function getNextNode($tag, \Bitrix\Main\Web\DOM\Node $parentNode)
    {
    }
    /*
     * @param string $html
     * @return string
     */
    public function commentPHP($html)
    {
    }
    /*
     * @param string $html
     * @return string
     */
    public function storePHP($html)
    {
    }
    /*
     * @param string $html
     * @return string
     */
    public function restorePHP($html)
    {
    }
}