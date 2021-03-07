<?php

namespace Bitrix\Main\UI\Uploader;

interface Storable
{
    /**
     * @param array $file
     * @return \Bitrix\Main\Result
     */
    public function copy($path, array $file);
}
class Storage implements \Bitrix\Main\UI\Uploader\Storable
{
    protected $path = "";
    protected static $lastId = null;
    protected static $descriptor = null;
    function __construct()
    {
    }
    private static function flush()
    {
    }
    function __destruct()
    {
    }
    /**
     * @param array $path
     * @param array $file
     * @return Result
     */
    public function copy($path, array $file)
    {
    }
    /**
     * @param string $path
     * @param array $chunk
     * @return Result
     */
    public function copyChunk($path, array $chunk)
    {
    }
    public function flushDescriptor()
    {
    }
}
class CloudStorage extends \Bitrix\Main\UI\Uploader\Storage implements \Bitrix\Main\UI\Uploader\Storable
{
    protected $moduleId = "main";
    function __construct($params)
    {
    }
    /**
     * @param $file
     * @return \CCloudStorageBucket|null
     */
    private function findBucket($file)
    {
    }
    protected function moveIntoCloud(\CCloudStorageBucket $bucket, $path, $file)
    {
    }
    public function copy($path, array $file)
    {
    }
    /**
     * @param string $path
     * @param array $file
     * @return Result
     */
    public function copyChunk($path, array $file)
    {
    }
    /**
     * Checks storage.
     * @param int $id
     * @return bool
     */
    public static function checkBucket($id)
    {
    }
}