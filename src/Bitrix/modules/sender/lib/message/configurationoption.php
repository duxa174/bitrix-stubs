<?php

namespace Bitrix\Sender\Message;

class ConfigurationOption
{
    const TYPE_DATE_TIME = 'datetime';
    const TYPE_NUMBER = 'number';
    const TYPE_CUSTOM = 'custom';
    const TYPE_PRESET_STRING = 'preset-string';
    const TYPE_STRING = 'string';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_EMAIL = 'email';
    const TYPE_LIST = 'list';
    const TYPE_HTML = 'html';
    const TYPE_TEXT = 'text';
    const TYPE_FILE = 'file';
    const TYPE_TEMPLATE_TYPE = 'template-type';
    const TYPE_TEMPLATE_ID = 'template-id';
    const TYPE_MAIL_EDITOR = 'mail-editor';
    const TYPE_AUDIO = 'audio';
    const TYPE_SMS_EDITOR = 'sms-editor';
    const TYPE_USER_LIST = 'user-list';
    const GROUP_DEFAULT = 0;
    const GROUP_ADDITIONAL = 1;
    /** @var string $type Type. */
    protected $type;
    /** @var string $code Code. */
    protected $code;
    /** @var string $view View. */
    protected $view;
    /** @var string $name Name. */
    protected $name;
    /** @var string|array $value Value. */
    protected $value;
    /** @var array $items Items. */
    protected $items = array();
    /** @var integer $group Group. */
    protected $group = self::GROUP_DEFAULT;
    /** @var null|string|array $hint Hint. */
    protected $hint;
    /** @var boolean $required Required. */
    protected $required = false;
    /** @var boolean $templated Templated. */
    protected $templated = false;
    /** @var callable|null $readonlyView Render readonly value. */
    protected $readonlyView;
    /** @var boolean $showInList Show option value in items list. */
    protected $showInList = false;
    /** @var boolean $showInFilter Show option value in filter. */
    protected $showInFilter = false;
    /** @var int $maxLength max length of string field */
    protected $maxLength;
    /**
     * Configuration constructor.
     * @param array $data Data.
     */
    public function __construct(array $data = array())
    {
    }
    /**
     * Get as array.
     *
     * @return array
     */
    public function getArray()
    {
    }
    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Set type.
     *
     * @param string $type Type.
     * @return void
     */
    public function setType($type)
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Set code.
     *
     * @param string $code Code.
     * @return void
     */
    public function setCode($code)
    {
    }
    /**
     * Get view.
     *
     * @return string|callable
     */
    public function getView()
    {
    }
    /**
     * Set view.
     *
     * @param string|callable $view View.
     * @return void
     */
    public function setView($view)
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Set name.
     *
     * @param string $name Name.
     * @return void
     */
    public function setName($name)
    {
    }
    /**
     * Get value.
     *
     * @return string|array
     */
    public function getValue()
    {
    }
    /**
     * Has value.
     *
     * @return bool
     */
    public function hasValue()
    {
    }
    /**
     * Set value.
     *
     * @param string|array $value Value.
     * @return void
     */
    public function setValue($value)
    {
    }
    /**
     * Get group.
     *
     * @return integer
     */
    public function getGroup()
    {
    }
    /**
     * Set value.
     *
     * @param integer $group Group.
     * @return void
     */
    public function setGroup($group)
    {
    }
    /**
     * Get items.
     *
     * @return array
     */
    public function getItems()
    {
    }
    /**
     * Set items.
     *
     * @param array $items Items.
     * @return void
     */
    public function setItems(array $items)
    {
    }
    /**
     * Is required.
     *
     * @return boolean
     */
    public function isRequired()
    {
    }
    /**
     * Set required.
     *
     * @param boolean $required Required.
     * @return void
     */
    public function setRequired($required)
    {
    }
    /**
     * Is templated.
     *
     * @return boolean
     */
    public function isTemplated()
    {
    }
    /**
     * Set required.
     *
     * @param boolean $templated Templated.
     * @return void
     */
    public function setTemplated($templated)
    {
    }
    /**
     * Get hint.
     *
     * @return null|string|array
     */
    public function getHint()
    {
    }
    /**
     * Set required.
     *
     * @param null|string|array $hint Hint.
     * @return void
     */
    public function setHint($hint)
    {
    }
    /**
     * Get readonly view.
     *
     * @param mixed $value Option value
     * @return mixed
     */
    public function getReadonlyView($value)
    {
    }
    /**
     * @return int
     */
    public function getMaxLength()
    {
    }
    /**
     * Get show in list or not.
     *
     * @return bool
     */
    public function getShowInList()
    {
    }
    /**
     * Get show in filter or not.
     *
     * @return bool
     */
    public function getShowInFilter()
    {
    }
    /**
     * Set readonly view callback.
     *
     * @param callable|null $readonlyView Readonly view callback.
     * @return void
     */
    public function setReadonlyView($readonlyView)
    {
    }
    /**
     * Set show in list or not.
     *
     * @param boolean $showInList Show in items list.
     * @return void
     */
    public function setShowInList($showInList)
    {
    }
    /**
     * Set show in list or not.
     *
     * @param boolean $showInFilter Show in filter.
     * @return void
     */
    public function setShowInFilter($showInFilter)
    {
    }
    /**
     * @param int $maxLength
     */
    public function setMaxLength(int $maxLength)
    {
    }
}