<?php

namespace Bitrix\Main\Web\DOM;

abstract class Node
{
    const ELEMENT_NODE = 1;
    const ATTRIBUTE_NODE = 2;
    const TEXT_NODE = 3;
    const CDATA_SECTION_NODE = 4;
    const ENTITY_REFERENCE_NODE = 5;
    const ENTITY_NODE = 6;
    const PROCESSING_INSTRUCTION_NODE = 7;
    const COMMENT_NODE = 8;
    const DOCUMENT_FRAGMENT_NODE = 11;
    const DOCUMENT_NODE = 9;
    const DOCUMENT_TYPE_NODE = 10;
    const NOTATION_NODE = 12;
    public static $isNodeListAsArray = true;
    /*@var Document $ownerDocument*/
    protected $ownerDocument = null;
    /*@var string $nodeType*/
    protected $nodeType = null;
    /*@var string $nodeName*/
    protected $nodeName = null;
    /*@var string $nodeValue*/
    protected $nodeValue = null;
    /*@var NodeList $childNodes*/
    protected $childNodes = null;
    /*@var Node $parentNode*/
    protected $parentNode = null;
    /*@var null|NamedNodeMap $attributes*/
    protected $attributes = null;
    /*@var string $textContent*/
    protected $textContent = null;
    /*@var bool $bxIsAlreadyClosed*/
    public $bxIsAlreadyClosed = false;
    /*@var bool $bxClosable*/
    public $bxClosable = true;
    public function __construct()
    {
    }
    protected function init()
    {
    }
    public function getNodeType()
    {
    }
    public function getParentNode()
    {
    }
    public function setParentNode(\Bitrix\Main\Web\DOM\Node $node = null)
    {
    }
    public function hasAttributes()
    {
    }
    public function getAttributes()
    {
    }
    public function getNodeName()
    {
    }
    public function setNodeName($a)
    {
    }
    public function getNodeValue()
    {
    }
    public function getTextContent()
    {
    }
    public function getOwnerDocument()
    {
    }
    public function setOwnerDocument(\Bitrix\Main\Web\DOM\Document $owner)
    {
    }
    public function getFirstChild()
    {
    }
    public function getLastChild()
    {
    }
    public function getPreviousSibling()
    {
    }
    public function getNextSibling()
    {
    }
    /*
     * @return NodeList|Node[]
     */
    public function getChildNodes()
    {
    }
    /*
     * @return Node[]
     */
    public function getChildNodesArray()
    {
    }
    public function setChildNodesArray($childList)
    {
    }
    public function hasChildNodes()
    {
    }
    protected function haveChild($checkingChild)
    {
    }
    /**
     * Adds the node newChild to the end of the list of children of this node.
     * If the newChild is already in the tree, it is first removed.
     * */
    public function appendChild(\Bitrix\Main\Web\DOM\Node $newChild)
    {
    }
    public function insertBefore(\Bitrix\Main\Web\DOM\Node $newChild, \Bitrix\Main\Web\DOM\Node $refChild = null, $removeExist = true)
    {
    }
    public function removeChild(\Bitrix\Main\Web\DOM\Node $oldChild)
    {
    }
    public function replaceChild(\Bitrix\Main\Web\DOM\Node $newChild, \Bitrix\Main\Web\DOM\Node $oldChild)
    {
    }
    public function isEqual(\Bitrix\Main\Web\DOM\Node $node = null)
    {
    }
    public function getOuterHTML()
    {
    }
    public function getInnerHTML()
    {
    }
    public function setInnerHTML($html)
    {
    }
    /**
     * @param string $queryString
     * @return Node[]
     * */
    public function querySelectorAll($queryString)
    {
    }
    /**
     * @param string $queryString
     * @return Node|null
     * */
    public function querySelector($queryString)
    {
    }
    public function closest($queryString)
    {
    }
    public function toString()
    {
    }
    public function toArray()
    {
    }
}