<?php

namespace Bitrix\Sale\PaySystem\Domain\Verification;

/**
 * Class Manager
 * @package Bitrix\Sale\PaySystem\Domain\Verification
 */
final class Manager extends \Bitrix\Sale\Domain\Verification\BaseManager
{
    /** @var array */
    private static $entityList = [];
    /**
     * @inheritDoc
     */
    public static function getPathPrefix() : string
    {
    }
    /**
     * @inheritDoc
     */
    protected static function getUrlRewritePath() : string
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\IO\FileNotFoundException
     */
    protected static function getEntityList() : array
    {
    }
}