<?php

namespace Bitrix\Im\Bot;

class Keyboard
{
    private $botId = 0;
    private $colors = array();
    private $buttons = array();
    private $voteMode = false;
    function __construct($botId = 0, array $colors = array(), $voteMode = false)
    {
    }
    private function setDefaultColor(array $colors)
    {
    }
    public function addButton($params)
    {
    }
    public function addNewLine()
    {
    }
    public static function getKeyboardByJson($params, $textReplace = array(), $options = array())
    {
    }
    public function isEmpty()
    {
    }
    public function isAllowSize()
    {
    }
    public function getArray()
    {
    }
    public function getJson()
    {
    }
}