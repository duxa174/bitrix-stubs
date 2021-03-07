<?php

namespace Bitrix\UI\Buttons\Split;

class SubButton extends \Bitrix\UI\Buttons\BaseButton
{
    protected $buttonType = \Bitrix\UI\Buttons\Split\Type::MAIN;
    /** @var Button */
    protected $splitButton;
    protected function init(array $params = [])
    {
    }
    public static function getJsClass()
    {
    }
    protected function renderJavascript()
    {
    }
    protected function renderInner()
    {
    }
    /**
     * @return bool
     */
    public function isMainButton()
    {
    }
    /**
     * @return bool
     */
    public function isMenuButton()
    {
    }
    /**
     * @return string
     */
    public function getButtonType()
    {
    }
    /**
     * @return Button
     */
    public function getSplitButton()
    {
    }
    /**
     * @param Button $splitButton
     *
     * @return SubButton
     */
    public function setSplitButton($splitButton)
    {
    }
    /**
     * @param bool $flag
     *
     * @return static
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
     * @return static
     */
    public function setDisabled($flag = true)
    {
    }
    /**
     * @param bool $flag
     *
     * @return static
     */
    public function setHovered($flag = true)
    {
    }
    /**
     * @return bool
     */
    public function isHovered()
    {
    }
    /**
     * @param $flag
     * @param $globalState
     * @param $mainState
     * @param $menuState
     *
     * @return static
     */
    public function toggleState($flag, $globalState, $mainState, $menuState)
    {
    }
}