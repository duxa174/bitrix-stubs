<?php

namespace Bitrix\Main\Search;

final class ResultLimit implements \JsonSerializable
{
    /** @var string */
    private $type;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var array */
    private $buttons = [];
    public function __construct($type, $title, $description = null)
    {
    }
    /**
     * Returns the element type. For example: lead, deal, file, folder, etc.
     *
     * @return string|null
     */
    public function getType()
    {
    }
    /**
     * Sets the element type. For example: lead, deal, file, folder, etc.
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
    }
    /**
     * Returns the limit title
     *
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * Sets the limit title
     *
     * @param $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
    }
    /**
     * Return the limit description
     *
     * @return string|null
     */
    public function getDescription()
    {
    }
    /**
     * Sets the limit description
     *
     * @param $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
    }
    /**
     * Gets the limit buttons
     *
     * @return array
     */
    public function getButtons()
    {
    }
    /**
     * Sets the limit buttons
     *
     * @param $buttons
     *
     * @return $this
     */
    public function setButtons($buttons)
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
}