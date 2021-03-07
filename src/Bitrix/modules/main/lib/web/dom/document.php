<?php

namespace Bitrix\Main\Web\DOM;

class Document extends \Bitrix\Main\Web\DOM\Node
{
    /** @var $parser Parser */
    protected $parser;
    /** @var $queryEngine QueryEngine */
    protected $queryEngine;
    /*
     * @return void
     */
    public function __construct()
    {
    }
    /*
     * @param string $source
     * @return void
     */
    public function loadHTML($source)
    {
    }
    /*
     * @param null|Node $node
     * @return string
     */
    public function saveHTML(\Bitrix\Main\Web\DOM\Node $node = null)
    {
    }
    /*
     * @return QueryEngine
     */
    public function getQueryEngine()
    {
    }
    /*
     * @param QueryEngine $engine
     * @return void
     */
    public function setQueryEngine(\Bitrix\Main\Web\DOM\QueryEngine $engine)
    {
    }
    /*
     * @return Parser
     */
    public function getParser()
    {
    }
    /*
     * @param Parser $parser
     * @return void
     */
    public function setParser(\Bitrix\Main\Web\DOM\Parser $parser)
    {
    }
    /*
     * Changes the ownerDocument of a node, its children, as well as the attached attribute nodes if there are any.
     * If the node has a parent it is first removed from its parent child list.
     * This effectively allows moving a subtree from one document to another.
     */
    public function adoptNode(\Bitrix\Main\Web\DOM\Node $source)
    {
    }
    /*
     * @param string $tagName
     * @return Element
     */
    public function createElement($tagName)
    {
    }
    /*
     * @param string $name
     * @param string $value
     * @return Attr
     */
    public function createAttribute($name, $value)
    {
    }
    /*
     * @param string $comment
     * @return Comment
     */
    public function createComment($comment)
    {
    }
    /*
     * @param string $text
     * @return Text
     */
    public function createTextNode($text)
    {
    }
    /*
     * @return null
     */
    public function createDocumentFragment()
    {
    }
    /*
     * @return null|Node
     */
    public function getElementById($id)
    {
    }
    /*
     * @return null|Node
     */
    public function getElementByClassName($className)
    {
    }
    /*
     * @return array|NodeList
     */
    public function getElementsByName($name)
    {
    }
    public function getTextContent()
    {
    }
    /*
     * @return array|NodeList
     */
    public function getElementsByAttr($attrName, $attrValue = null, $limit = 0)
    {
    }
    /*
     * @return array|NodeList
     */
    public function getElementsByTagName($tagName)
    {
    }
    /*
     * @return array|NodeList
     */
    public function getElementsByClassName($className, $limit = 0)
    {
    }
    /*
     * @return null|Element
     */
    public function getDocumentElement()
    {
    }
    /*
     * Get HEAD element
     * @return null|Element
     */
    public function getHead()
    {
    }
    /*
     * Get BODY element
     * @return null|Element
     */
    public function getBody()
    {
    }
}