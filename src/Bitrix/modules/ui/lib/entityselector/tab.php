<?php

namespace Bitrix\UI\EntitySelector;

class Tab implements \JsonSerializable
{
    protected $id;
    protected $title = '';
    protected $visible = true;
    protected $itemOrder = [];
    protected $itemMaxDepth;
    protected $icon = [];
    protected $textColor = [];
    protected $bgColor = [];
    protected $stub;
    protected $stubOptions;
    /** @var string */
    protected $footer;
    /** @var array */
    protected $footerOptions;
    public function __construct(array $options)
    {
    }
    public function getId() : ?string
    {
    }
    public function getTitle() : string
    {
    }
    public function setTitle(string $title) : self
    {
    }
    public function getIcon()
    {
    }
    public function setIcon(array $icon) : self
    {
    }
    public function getTextColor()
    {
    }
    public function setTextColor(array $textColor) : self
    {
    }
    public function getBgColor()
    {
    }
    public function setBgColor(array $bgColor) : self
    {
    }
    public function setVisible(bool $flag)
    {
    }
    public function isVisible()
    {
    }
    public function setItemOrder(array $order)
    {
    }
    public function getItemOrder() : array
    {
    }
    public function setItemMaxDepth(int $depth)
    {
    }
    public function getItemMaxDepth() : ?int
    {
    }
    public function setStub($stub)
    {
    }
    public function getStub()
    {
    }
    public function setStubOptions(array $options)
    {
    }
    public function getStubOptions() : ?array
    {
    }
    public function setFooter(string $footer, array $options = [])
    {
    }
    public function getFooter() : ?string
    {
    }
    public function getFooterOptions() : ?array
    {
    }
    public function jsonSerialize()
    {
    }
}