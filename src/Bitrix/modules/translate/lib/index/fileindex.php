<?php

namespace Bitrix\Translate\Index;

/**
 * @see \Bitrix\Main\ORM\Objectify\EntityObject
 */
class FileIndex extends \Bitrix\Translate\Index\Internals\EO_FileIndex
{
    /**
     * Constructs instance by io\file.
     *
     * @param Main\IO\File $file Language file.
     *
     * @return Index\FileIndex
     * @throws Main\ArgumentException
     */
    public static function createByFile(\Bitrix\Main\IO\File $file)
    {
    }
}