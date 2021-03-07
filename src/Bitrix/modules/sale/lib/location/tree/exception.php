<?php

namespace Bitrix\Sale\Location\Tree;

class Exception extends \Bitrix\Sale\Location\Exception
{
    public function getDefaultMessage()
    {
    }
    protected function fillMessageAdditions()
    {
    }
}
class NodeNotFoundException extends \Bitrix\Sale\Location\Tree\Exception
{
    public function getDefaultMessage()
    {
    }
}
class NodeIncorrectException extends \Bitrix\Sale\Location\Tree\Exception
{
    public function getDefaultMessage()
    {
    }
}