<?php

namespace Bitrix\UI\Buttons;

class BaseButton implements \Bitrix\UI\Contract\Renderable
{
    const UNIQ_ID_DATA_ATTR = 'btn-uniqid';
    const JSON_OPTIONS_DATA_ATTR = 'json-options';
    /** @var string */
    protected $id;
    /** @var string */
    protected $text;
    /** @var string */
    protected $tag = \Bitrix\UI\Buttons\Tag::BUTTON;
    /** @var string */
    protected $baseClass = "ui-btn";
    /** @var string */
    protected $link;
    /** @var integer|string */
    protected $counter;
    /** @var array */
    protected $events = [];
    /** @var ButtonAttributes */
    private $attributes;
    public final function __construct(array $params = [])
    {
    }
    /**
     * @return array
     */
    protected function getDefaultParameters()
    {
    }
    protected function init(array $params = [])
    {
    }
    public static final function create(array $params = [])
    {
    }
    protected function buildFromArray($params)
    {
    }
    protected function listExtensions()
    {
    }
    public static function getJsClass()
    {
    }
    protected function appendDefaultJsonOption(\Bitrix\UI\Buttons\ButtonAttributes $attributes)
    {
    }
    public function render($jsInit = true)
    {
    }
    protected function generateUniqid()
    {
    }
    public function isInputTag()
    {
    }
    public function isInputType()
    {
    }
    protected function renderInner()
    {
    }
    protected function renderJavascript()
    {
    }
    protected function getQuerySelector()
    {
    }
    public function getUniqId()
    {
    }
    public function getId()
    {
    }
    public function setId($id)
    {
    }
    public function getMaxWidth()
    {
    }
    public function setMaxWidth($width)
    {
    }
    public function getLink()
    {
    }
    public function setLink($link)
    {
    }
    public function getCounter()
    {
    }
    public function setCounter($counter)
    {
    }
    public function addClass($className)
    {
    }
    public function unsetClass($className)
    {
    }
    public function removeClass($className)
    {
    }
    public function hasClass($className)
    {
    }
    public function getClassList()
    {
    }
    public function addAttribute($name, $value = null)
    {
    }
    public function unsetAttribute($name)
    {
    }
    public function removeAttribute($name)
    {
    }
    public function getAttribute($name, $defaultValue = null)
    {
    }
    public function addDataAttribute($name, $value = null)
    {
    }
    public function getDataAttribute($name, $defaultValue = null)
    {
    }
    public function setDataRole($dataRole)
    {
    }
    public function getDataRole()
    {
    }
    public function setStyles(array $styles)
    {
    }
    public function getStyles()
    {
    }
    /**
     * @return ButtonAttributes
     */
    public function getAttributeCollection()
    {
    }
    /**
     * @return string
     */
    public function getText()
    {
    }
    /**
     * @param string $text
     *
     * @return static
     */
    public function setText($text)
    {
    }
    /**
     * @return string
     */
    public function getTag()
    {
    }
    /**
     * @param string $tag
     *
     * @return static
     */
    public function setTag($tag)
    {
    }
    /**
     * @return string
     */
    public function getBaseClass()
    {
    }
    /**
     * @param bool $flag
     * @return static
     */
    public function setDisabled($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isDisabled()
    {
    }
    /**
     * @return array
     */
    public function getEvents()
    {
    }
    /**
     * @param string $eventName
     * @param string|JsHandler $fn Link to js function which will be invoked.
     * @see in js BX.UI.BaseButton.handleEvent to know order of arguments in event handler.
     *
     * @return $this
     */
    public function bindEvent($eventName, $fn)
    {
    }
    /**
     * @param array $events
     *
     * @return $this
     */
    public function bindEvents(array $events)
    {
    }
    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function unbindEvent($eventName)
    {
    }
    /**
     * @return $this
     */
    public function unbindEvents()
    {
    }
}