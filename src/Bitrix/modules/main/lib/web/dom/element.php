<?php

namespace Bitrix\Main\Web\DOM;

class Element extends \Bitrix\Main\Web\DOM\Node
{
    /**
     * @var Element $parentElement
     */
    protected $parentElement;
    /**
     * @var NamedNodeMap $attributes
     */
    protected $attributes;
    /**
     * @var string $tagName
     */
    protected $tagName;
    /**
     * @var array $classList
     */
    protected $classList;
    /**
     * @var string $id
     */
    protected $id;
    /**
     * @var string $name
     */
    protected $name;
    /**
     * @var string $className
     */
    protected $className;
    /**
     * @var string $style
     */
    protected $style;
    public function __construct($name)
    {
    }
    public function getTagName()
    {
    }
    public function getId()
    {
    }
    public function setId($id)
    {
    }
    public function getName()
    {
    }
    public function setName($id)
    {
    }
    public function getStyle()
    {
    }
    public function setStyle($style)
    {
    }
    public function getClassName()
    {
    }
    public function setClassName($className)
    {
    }
    public function getClassList()
    {
    }
    public function setClassList(array $classList)
    {
    }
    public function getParentElement()
    {
    }
    public function getTextContent()
    {
    }
    protected function setParentElement(\Bitrix\Main\Web\DOM\Element $parentElement)
    {
    }
    public function getAttributesArray()
    {
    }
    public function setAttributeNode(\Bitrix\Main\Web\DOM\Attr $attr)
    {
    }
    public function getAttributeNode($name)
    {
    }
    public function removeAttributeNode(\Bitrix\Main\Web\DOM\Attr $oldNode)
    {
    }
    public function setAttribute($name, $value)
    {
    }
    /**
     * @param string $attributeName
     * @return bool
     */
    public function hasAttribute($attributeName)
    {
    }
    public function getAttribute($name)
    {
    }
    public function removeAttribute($name)
    {
    }
}