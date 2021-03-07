<?php

namespace Bitrix\Sender\Internals;

/**
 * Class PostFiles
 * @package Bitrix\Sender\Internals
 */
class PostFiles
{
    /** @var  HttpRequest $request Request. */
    protected $request;
    /** @var  string $inputName Input name. */
    protected $inputName;
    /**
     * Get posted files from context.
     *
     * @param string $inputName Input name.
     * @param array $savedFiles Saved files.
     * @return array
     */
    public static function getFromContext($inputName, array $savedFiles = array())
    {
    }
    /**
     * PostFiles constructor.
     *
     * @param string $inputName Input name.
     * @param HttpRequest|null $request Request.
     */
    public function __construct($inputName, \Bitrix\Main\HttpRequest $request = null)
    {
    }
    /**
     * Get files.
     *
     * @param array $savedFiles Saved files.
     * @param array $files Temporary files or files from media lib.
     * @return array
     */
    public function getFiles(array $savedFiles = [], array $files = [])
    {
    }
    protected function getDeleted()
    {
    }
    protected function getPosted()
    {
    }
    /**
     * Get media lib files.
     *
     * @param array|null $files Files.
     * @return array
     */
    public function getMediaLib(array $files = null)
    {
    }
    /**
     * Get existed files.
     *
     * @param array|null $files Files.
     * @return array
     */
    public function getExisted(array $files = null)
    {
    }
    /**
     * Save file.
     *
     * @param array $file File data.
     * @return int|null
     */
    public static function saveFile(array $file)
    {
    }
}