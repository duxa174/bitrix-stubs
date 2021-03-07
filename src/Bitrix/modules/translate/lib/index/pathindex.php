<?php

namespace Bitrix\Translate\Index;

/**
 * @see \Bitrix\Main\ORM\Objectify\EntityObject
 */
class PathIndex extends \Bitrix\Translate\Index\Internals\EO_PathIndex
{
    /**
     *  Loads pathIndex by its path.
     *
     * @param string $path Path to search index.
     *
     * @return self|null
     */
    public static function loadByPath($path)
    {
    }
    /**
     * Detects and returns module id from a path.
     *
     * @return string|null
     */
    public function detectModuleId()
    {
    }
    /**
     * Detects assignment id from a path.
     *
     * @return string|null
     */
    public function detectAssignment()
    {
    }
}