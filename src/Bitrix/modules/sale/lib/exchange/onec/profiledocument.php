<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class ProfileDocument
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 * For backward compatibility
 */
class ProfileDocument extends \Bitrix\Sale\Exchange\OneC\UserProfileDocument
{
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
    /**
     * @return array
     */
    protected static function getMessageExport()
    {
    }
    public function outputXml(array $fields, $level = 0)
    {
    }
    public function getNameNodeDocument()
    {
    }
}