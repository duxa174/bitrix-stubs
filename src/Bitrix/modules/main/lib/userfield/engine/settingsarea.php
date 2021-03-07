<?php

namespace Bitrix\Main\UserField\Engine;

class SettingsArea implements \Bitrix\Main\Engine\Response\ContentArea\ContentAreaInterface
{
    protected $userField;
    public function __construct(array $userField)
    {
    }
    public function getHtml()
    {
    }
}