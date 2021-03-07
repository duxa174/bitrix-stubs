<?php

namespace Bitrix\Main\Search;

final class ResultItem implements \JsonSerializable, \ArrayAccess
{
    /** @var mixed */
    private $id;
    /** @var string */
    private $type;
    /** @var string */
    private $title;
    /** @var Uri */
    private $showLink;
    /** @var string */
    private $module;
    /** @var string */
    private $subTitle;
    /** @var array */
    private $actions = [];
    /** @var Uri[] */
    private $links = [];
    /** @var array */
    private $attributes = [];
    /**
     * ResultItem constructor.
     *
     * @param $title
     * @param Uri|string $showLink
     * @param null $id
     */
    public function __construct($title, $showLink, $id = null)
    {
    }
    /**
     * Returns id.
     *
     * @return mixed
     */
    public function getId()
    {
    }
    /**
     * Sets id.
     * @param mixed $id
     *
     * @return ResultItem
     */
    public function setId($id)
    {
    }
    /**
     * Returns type of element. For example: lead, deal, file, folder, etc.
     * Type is unnecessary.
     *
     * @return string|null
     */
    public function getType()
    {
    }
    /**
     * Sets type of element. For example: lead, deal, file, folder, etc.
     * Type is unnecessary.
     * @param string $type
     *
     * @return ResultItem
     */
    public function setType($type)
    {
    }
    /**
     * Returns title of searched item.
     *
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * Sets title of searched item.
     * @param string $title Title.
     *
     * @return ResultItem
     */
    public function setTitle($title)
    {
    }
    /**
     * Returns link to show searched item.
     *
     * @return Uri
     */
    public function getShowLink()
    {
    }
    /**
     * Sets link to show searched item.
     * @param Uri $showLink Show link.
     *
     * @return ResultItem
     */
    public function setShowLink($showLink)
    {
    }
    /**
     * Adjusts link.
     * @param Uri|string $link Link.
     *
     * @return Uri
     */
    protected function adjustLink($link)
    {
    }
    /**
     * Returns module which provides searched item.
     *
     * @return string
     */
    public function getModule()
    {
    }
    /**
     * Sets module which provides searched item.
     * Module is unnecessary and will generate automatically.
     * @param string $module Module id.
     *
     * @return ResultItem
     */
    public function setModule($module)
    {
    }
    /**
     * Returns subtitle of searched item.
     * Subtitle is is unnecessary.
     *
     * @return string
     */
    public function getSubTitle()
    {
    }
    /**
     * Sets subtitle of searched item.
     * Subtitle is is unnecessary.
     * @param string $subTitle Subtitle.
     *
     * @return ResultItem
     */
    public function setSubTitle($subTitle)
    {
    }
    /**
     * Returns actions.
     * It's reserved field and unused.
     * @return array
     */
    public function getActions()
    {
    }
    /**
     * Returns links on searched item.
     *
     * @return Uri[]
     */
    public function getLinks()
    {
    }
    /**
     * Sets links on searched item.
     * Should be associative array.
     * @param Uri[]|string[] $links Links.
     *
     * @return ResultItem
     */
    public function setLinks(array $links)
    {
    }
    /**
     * Adds link on searched item.
     * @param string $name Name of link.
     * @param Uri|string $link Link.
     *
     * @return $this
     */
    public function addLink($name, $link)
    {
    }
    /**
     * Returns attributes.
     * @return array
     */
    public function getAttributes()
    {
    }
    /**
     * Sets attributes.
     * @param array $attributes
     *
     * @return ResultItem
     */
    public function setAttributes($attributes)
    {
    }
    /**
     * Sets value for attribute with name.
     * @param string $name
     * @param mixed $value
     *
     * @return $this
     */
    public function setAttribute($name, $value)
    {
    }
    /**
     * Deletes attribute by name.
     * @param string $name
     *
     * @return $this
     */
    public function unsetAttribute($name)
    {
    }
    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
    }
    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Offset to retrieve
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Offset to unset
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
    }
}