<?php

namespace Bitrix\Iblock\Template;

/**
 * Class Engine
 * Provides interface for templates processing.
 * @package Bitrix\Iblock\Template
 */
class Engine
{
    /**
     * Takes an entity (Element, Section or Iblock) and processes the template.
     * <code>
     * if (\Bitrix\Main\Loader::includeModule('iblock'))
     * &#123;
     * 	$e = new \Bitrix\Iblock\Template\Entity\Element(6369);
     * 	echo "<pre>", print_r(\Bitrix\Iblock\Template\Engine::process($e, "Name: {=this.Name}. Code:{=this.code}"), 1), "</pre>";
     * &#125;
     * </code>
     *
     * @param Entity\Base $entity Context entity for template processing.
     * @param string $template Template to make substitutions in.
     *
     * @return string
     */
    public static function process(\Bitrix\Iblock\Template\Entity\Base $entity, $template)
    {
    }
    /**
     * Splits template by tokens and builds execution tree.
     *
     * @param string $template Source expression.
     * @param NodeRoot $parent Root node.
     *
     * @return NodeRoot
     */
    protected static function parseTemplateTree($template, \Bitrix\Iblock\Template\NodeRoot $parent)
    {
    }
    /**
     * Parses "{=" part of the template. Moves internal pointer right behind balanced "}"
     * after {= a field of the entity should follow
     * or a function call.
     *
     * @param array[]string &$parsedTemplate Template tokens.
     *
     * @return NodeEntityField|NodeFunction|null
     */
    protected static function parseFormula(array &$parsedTemplate)
    {
    }
    /**
     * Adds function arguments to a $function.
     * An formula may be evaluated as oa argument.
     * An number or
     * A string in double quotes.
     *
     * @param string $token Expression string.
     * @param array[]string &$parsedTemplate Template tokens.
     * @param NodeFunction $function Function object to which arguments will be added.
     *
     * @return void
     */
    protected static function parseFunctionArguments($token, array &$parsedTemplate, \Bitrix\Iblock\Template\NodeFunction $function)
    {
    }
    /**
     * Explodes a string into function arguments.
     * Numbers or strings.
     *
     * @param string $token Expression string.
     * @param NodeFunction $function Function object to which arguments will be added.
     *
     * @return void
     */
    protected static function explodeFunctionArgument($token, \Bitrix\Iblock\Template\NodeFunction $function)
    {
    }
}
/**
 * Class NodeBase
 * Base class for template parsed tree nodes.
 * @package Bitrix\Iblock\Template
 */
abstract class NodeBase
{
    /**
     * Converts internal contents of the node into external presentation.
     * It's a string or an array of strings.
     *
     * @param Entity\Base $entity Sets the context of processing.
     *
     * @return string
     */
    public abstract function process(\Bitrix\Iblock\Template\Entity\Base $entity);
}
/**
 * Class NodeRoot
 * Present simple collection of child nodes
 *
 * @package Bitrix\Iblock\Template
 */
class NodeRoot extends \Bitrix\Iblock\Template\NodeBase
{
    /** @var array[int]NodeBase */
    protected $children = array();
    protected $modifiers = array();
    /**
     * Appends a child to the children collection.
     *
     * @param NodeBase $child Object to be added as a child.
     *
     * @return void
     */
    public function addChild(\Bitrix\Iblock\Template\NodeBase $child)
    {
    }
    /**
     * Sets modifiers to be used at the last stage of processing.
     *
     * @param string $modifiers String which contains modifiers.
     *
     * @return void
     */
    public function setModifiers($modifiers)
    {
    }
    /**
     * Calls process for each of it's children.
     * Returns concatenation of their results.
     *
     * @param Entity\Base $entity Sets the context of processing.
     *
     * @return string
     */
    public function process(\Bitrix\Iblock\Template\Entity\Base $entity)
    {
    }
}
/**
 * Class NodeText
 * Plain text node
 *
 * @package Bitrix\Iblock\Template
 */
class NodeText extends \Bitrix\Iblock\Template\NodeBase
{
    protected $content = "";
    /**
     * Sets text contents into $content.
     *
     * @param string $content A text to be saved.
     */
    function __construct($content = "")
    {
    }
    /**
     * Returns text contents.
     *
     * @param Entity\Base $entity Sets the context of processing.
     *
     * @return string
     */
    public function process(\Bitrix\Iblock\Template\Entity\Base $entity)
    {
    }
}
/**
 * Class NodeEntityField
 * Represents an entity field in the formula.
 * For example: this.name
 *
 * @package Bitrix\Iblock\Template
 */
class NodeEntityField extends \Bitrix\Iblock\Template\NodeBase
{
    protected $entityField = "";
    /**
     * Initializes the object.
     * $entityName and $entityField is case insensitive.
     *
     * @param string $entityField Field of the Entity.
     */
    function __construct($entityField = "")
    {
    }
    /**
     * Calls "resolve" method of the $entity.
     * On success returns field value of the resolved.
     * Otherwise returns empty string.
     *
     * @param Entity\Base $entity Sets the context of processing.
     *
     * @return string
     */
    public function process(\Bitrix\Iblock\Template\Entity\Base $entity)
    {
    }
}
/**
 * Class NodeFunction
 * Represents a function call in the formula.
 *
 * @package Bitrix\Iblock\Template
 */
class NodeFunction extends \Bitrix\Iblock\Template\NodeBase
{
    protected $functionName = "";
    protected $parameters = array();
    /**
     * Initialize function object.
     *
     * @param string $functionName Name of the function. Case insensitive.
     */
    public function __construct($functionName = "")
    {
    }
    /**
     * Adds new parameters to the function call.
     *
     * @param NodeBase $parameter A new parameter to be added.
     *
     * @return void
     */
    public function addParameter(\Bitrix\Iblock\Template\NodeBase $parameter)
    {
    }
    /**
     * Uses Functions\Fabric to get an instance of the function object by it's name.
     * On success calls onPrepareParameters, then calculate method.
     * Otherwise returns an empty string.
     *
     * @param Entity\Base $entity Sets the context of processing.
     *
     * @return string
     */
    public function process(\Bitrix\Iblock\Template\Entity\Base $entity)
    {
    }
}