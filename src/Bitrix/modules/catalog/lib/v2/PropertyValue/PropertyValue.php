<?php

namespace Bitrix\Catalog\v2\PropertyValue;

/**
 * Class PropertyValue
 *
 * @package Bitrix\Catalog\v2\PropertyValue
 *
 * !!! This API is in alpha stage and is not stable. This is subject to change at any time without notice.
 * @internal
 */
class PropertyValue extends \Bitrix\Catalog\v2\BaseEntity
{
    // ToDo property cast map (int)1 => '1'
    public function setValue($value) : self
    {
    }
    // ToDo do we need to create HtmlProperty entity (descendant of PropertyValue)?
    protected function prepareValueForHtmlProperty($value)
    {
    }
    public function getValue()
    {
    }
    public function setDescription($description) : self
    {
    }
    public function getDescription()
    {
    }
    public function deleteInternal() : \Bitrix\Main\Result
    {
    }
    public function saveInternal() : \Bitrix\Main\Result
    {
    }
}