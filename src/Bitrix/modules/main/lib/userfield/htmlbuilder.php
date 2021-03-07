<?php

namespace Bitrix\Main\UserField;

/**
 * Class HtmlBuilder
 * @package Bitrix\Main\UserField
 */
class HtmlBuilder
{
    protected $userTypeId;
    public function __construct($userTypeId)
    {
    }
    public function getCssClassName(array $additionalCss = array())
    {
    }
    public function wrapSingleField($html, array $additionalCss = array())
    {
    }
    public function wrapDisplayResult($html, $additionalCss = array())
    {
    }
    public function getMultipleValuesSeparator()
    {
    }
    public function getCloneButton($fieldName)
    {
    }
    public function getMobileCloneButton($fieldName)
    {
    }
    /**
     * @param array|null $attributes
     * @param bool $encode
     * @return string|null
     */
    public function buildTagAttributes(?array $attributes, bool $encode = true) : ?string
    {
    }
    /**
     * @param string|null $url
     * @return string
     */
    public function encodeUrl(?string $url) : string
    {
    }
}