<?php

namespace Bitrix\UI\Buttons\Split;

class Button extends \Bitrix\UI\Buttons\Button
{
    /** @var SubButton */
    protected $mainButton;
    /** @var SubButton */
    protected $menuButton;
    protected $menuTarget = \Bitrix\UI\Buttons\Split\Type::MAIN;
    protected $baseClass = 'ui-btn-split';
    /**
     * @return string
     */
    public static function getJsClass()
    {
    }
    /**
     * @param $params
     */
    protected function buildFromArray($params)
    {
    }
    /**
     * @param bool $jsInit
     *
     * @return string
     * @throws \Bitrix\Main\LoaderException
     */
    public function render($jsInit = true)
    {
    }
    protected function renderInner()
    {
    }
    protected function getQuerySelector()
    {
    }
    protected function appendDefaultJsonOption(\Bitrix\UI\Buttons\ButtonAttributes $attributes)
    {
    }
    /**
     * @return SubButton
     */
    public function getMainButton()
    {
    }
    /**
     * @return SubButton
     */
    public function getMenuButton()
    {
    }
    /**
     * @return string
     */
    public function getMenuTarget()
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
     * @return $this
     */
    public function setText($text)
    {
    }
    /**
     * @return int|string
     */
    public function getCounter()
    {
    }
    /**
     * @param string|integer $counter
     *
     * @return $this
     */
    public function setCounter($counter)
    {
    }
    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
    }
    /**
     * @param bool $flag
     *
     * @return Buttons\Button|void
     * @throws InvalidOperationException
     */
    public function setRound($flag = true)
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
     * @param bool $flag
     *
     * @return $this
     */
    public function setDisabled($flag = true)
    {
    }
}