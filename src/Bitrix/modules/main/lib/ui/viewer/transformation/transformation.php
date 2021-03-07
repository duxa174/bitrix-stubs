<?php

namespace Bitrix\Main\UI\Viewer\Transformation;

abstract class Transformation
{
    public static function getInputContentTypes()
    {
    }
    public abstract function getOutputContentType();
    public abstract function getOutputExtension();
    /**
     * @return FileTransformer
     */
    public abstract function buildTransformer();
    /**
     * Returns maximum file size for transformation.
     *
     * @return int
     */
    public function getInputMaxSize()
    {
    }
}