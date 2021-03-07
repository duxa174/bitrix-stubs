<?php

namespace Bitrix\Sale\Domain\Verification;

/**
 * Class Service
 * @package Bitrix\Main\Domain
 */
final class Service
{
    /**
     * @param Main\Event $event
     * @return Main\Entity\EventResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @noinspection PhpUnused
     */
    public static function landingDomainVerificationHandler(\Bitrix\Main\Event $event) : \Bitrix\Main\Entity\EventResult
    {
    }
    /**
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @noinspection PhpUnused
     */
    public static function b24DomainVerificationHandler() : void
    {
    }
    /**
     * @param $content
     */
    public static function setEndBufferContentHandler($content) : void
    {
    }
}