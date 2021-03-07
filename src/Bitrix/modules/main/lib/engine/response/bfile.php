<?php

namespace Bitrix\Main\Engine\Response;

class BFile extends \Bitrix\Main\Engine\Response\File
{
    protected $file;
    public function __construct(array $file, $name = null)
    {
    }
    public static function createByFileData(array $file, $name = null)
    {
    }
    public static function createByFileId($fileId, $name = null)
    {
    }
    /**
     * @return array
     */
    public function getFile()
    {
    }
    /**
     * @return array|bool|null
     */
    protected function prepareFile()
    {
    }
    protected function prepareOptions()
    {
    }
}