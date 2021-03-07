<?php

namespace Bitrix\Seo\Engine;

class YandexDirectException extends \Bitrix\Main\SystemException
{
    public function __construct(array $queryResult, \Exception $previous = null)
    {
    }
}