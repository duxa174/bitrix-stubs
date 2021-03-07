<?php

namespace Bitrix\UI\Buttons;

class Button extends \Bitrix\UI\Buttons\BaseButton
{
    /** @var array  */
    protected $properties = [];
    protected function init(array $params = [])
    {
    }
    /**
     * @param $value
     * @param $enum
     *
     * @return bool
     */
    protected function isEnumValue($value, $enum)
    {
    }
    /**
     * @param $propertyName
     * @param $value
     * @param $enum
     *
     * @return $this
     */
    protected function setProperty($propertyName, $value, $enum)
    {
    }
    /**
     * @param $name
     * @param null $defaultValue
     *
     * @return mixed|null
     */
    protected function getProperty($name, $defaultValue = null)
    {
    }
    protected function buildFromArray($params)
    {
    }
    public function setIcon($icon)
    {
    }
    public function getIcon()
    {
    }
    /**
     * @param string $color
     * @see Color
     *
     * @return Button
     */
    public function setColor($color)
    {
    }
    /**
     * @return string|null
     */
    public function getColor()
    {
    }
    /**
     * @param $size
     *
     * @return Button
     * @see Size
     *
     */
    public function setSize($size)
    {
    }
    /**
     * @return string|null
     */
    public function getSize()
    {
    }
    /**
     * @param string $state
     * @see State
     *
     * @return Button
     */
    public function setState($state)
    {
    }
    /**
     * @return bool
     */
    public function getState()
    {
    }
    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setActive($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setHovered($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isHover()
    {
    }
    /**
     * @param bool $flag
     *
     * @return BaseButton
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
     * @param bool $flag
     *
     * @return $this
     */
    public function setWaiting($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isWaiting()
    {
    }
    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setClocking($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isClocking()
    {
    }
    /**
     * @param bool $flag
     * @return static
     */
    public function setNoCaps($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isNoCaps()
    {
    }
    /**
     * @param bool $flag
     * @return static
     */
    public function setRound($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isRound()
    {
    }
    /**
     * @param bool $flag
     * @return static
     */
    public function setDropdown($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isDropdown()
    {
    }
    /**
     * @param bool $flag
     * @return static
     */
    public function setCollapsed($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isCollapsed()
    {
    }
    /**
     * @param array $options
     *
     * @return $this
     */
    public function setMenu($options)
    {
    }
}