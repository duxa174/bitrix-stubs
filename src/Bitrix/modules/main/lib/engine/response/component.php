<?php

namespace Bitrix\Main\Engine\Response;

final class Component extends \Bitrix\Main\Engine\Response\HtmlContent
{
    /**
     * Component constructor.
     *
     * @param string $componentName
     * @param string $componentTemplate
     * @param array $componentParams
     * @param array $additionalResponseParams
     * @param mixed $dataKeys
     */
    public function __construct($componentName, $componentTemplate = '', array $componentParams = [], array $additionalResponseParams = [], $dataKeys = [])
    {
    }
}