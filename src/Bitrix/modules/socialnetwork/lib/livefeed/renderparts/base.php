<?php

namespace Bitrix\Socialnetwork\Livefeed\RenderParts;

abstract class Base
{
    protected $options = array();
    public function __construct(array $options = array())
    {
    }
    public function getOptions()
    {
    }
    protected function getMetaResult()
    {
    }
    public function getBBCodeText()
    {
    }
}