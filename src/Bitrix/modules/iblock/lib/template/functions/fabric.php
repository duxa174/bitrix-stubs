<?php

namespace Bitrix\Iblock\Template\Functions;

/**
 * Class Fabric
 * Provides function object instance by it's name.
 * Has some builtin function such as: upper, lower, concat and limit.
 * Fires event OnTemplateGetFunctionClass. Handler of the event has to return acclass name not an instance.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class Fabric
{
    protected static $functionMap = array();
    /**
     * Instantiates an function object by function name.
     *
     * @param string $functionName Name of the function in the lower case.
     * @param mixed $data Additional data for function instance.
     *
     * @return FunctionBase
     */
    public static function createInstance($functionName, $data = null)
    {
    }
}
/**
 * Class FunctionBase
 * Base class for all function objects processed by engine.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionBase
{
    protected $data = null;
    /**
     * @param mixed|null $data Additional data for function instance.
     */
    function __construct($data = null)
    {
    }
    /**
     * Called before calculation. It's result will be passed to the calculate method.
     *
     * @param \Bitrix\Iblock\Template\Entity\Base $entity This object.
     * @param array[]\Bitrix\Iblock\Template\NodeBase $parameters Parsed and prepared list of parameters.
     *
     * @return array
     */
    public function onPrepareParameters(\Bitrix\Iblock\Template\Entity\Base $entity, array $parameters)
    {
    }
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
    /**
     * Helper function. Concatenates all the parameters into a string.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    protected function parametersToString(array $parameters)
    {
    }
    /**
     * Helper function. Gathers all the parameters into an flat array.
     *
     * @param array $parameters Function parameters.
     *
     * @return array
     */
    protected function parametersToArray(array $parameters)
    {
    }
}
/**
 * Class FunctionUpper
 * Represents upper function {=upper this.name}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionUpper extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionLower
 * Represents lower function {=lower this.name}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionLower extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionTranslit
 * Transliterates it's input {=translit this.name}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionTranslit extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionConcat
 * Represents concatenation function {=concat iblock.name sections.name this.property.cml2_link.property.articul " / "}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionConcat extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionLimit
 * Explodes list elements by delimiter and returns no more than limit elements {=limit this.previewText this.DetailText  " \t\n\r" 10}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionLimit extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionContrast
 * Explodes list elements by delimiter and returns no more than limit most contrast words {=contrast this.previewText this.DetailText  " \t\n\r" 10}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionContrast extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionMin
 * Returns minimum value of given {=min  this.catalog.sku.price.base}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionMin extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionMax
 * Returns maximum value of given {=min  this.catalog.sku.price.base}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionMax extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}
/**
 * Class FunctionDistinct
 * Returns maximum value of given {=min  this.catalog.sku.price.base}.
 *
 * @package Bitrix\Iblock\Template\Functions
 */
class FunctionDistinct extends \Bitrix\Iblock\Template\Functions\FunctionBase
{
    /**
     * Called by engine to process function call.
     *
     * @param array $parameters Function parameters.
     *
     * @return string
     */
    public function calculate(array $parameters)
    {
    }
}