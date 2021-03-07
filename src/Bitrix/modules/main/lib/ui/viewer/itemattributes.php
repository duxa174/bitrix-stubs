<?php

namespace Bitrix\Main\UI\Viewer;

class ItemAttributes
{
    /**
     * @var
     */
    protected $fileData;
    /**
     * @var array
     */
    protected $attributes = [];
    /**
     * @var array
     */
    protected $actions = [];
    /**
     * @var
     */
    protected $sourceUri;
    /**
     * @var array
     */
    protected $options = [];
    /**
     * @var array
     */
    protected static $renderClassByContentType = [];
    /**
     * ItemAttributes constructor.
     *
     * @param $fileData
     * @param $sourceUri
     * @param array $options
     */
    private function __construct($fileData, $sourceUri, array $options = [])
    {
    }
    protected function setDefaultAttributes()
    {
    }
    /**
     * @param $fileId
     * @param $sourceUri
     *
     * @return static
     * @throws ArgumentException
     */
    public static function buildByFileId($fileId, $sourceUri)
    {
    }
    /**
     * @param array $fileData
     * @param $sourceUri
     *
     * @return static
     * @throws ArgumentException
     */
    public static function buildByFileData(array $fileData, $sourceUri)
    {
    }
    public static function tryBuildByFileData(array $fileData, $sourceUri)
    {
    }
    /**
     * @param $sourceUri
     *
     * @return static
     */
    public static function buildAsUnknownType($sourceUri)
    {
    }
    public static function tryBuildByFileId($fileId, $sourceUri)
    {
    }
    /**
     * @param $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
    }
    /**
     * @param $id
     *
     * @return $this
     */
    public function setGroupBy($id)
    {
    }
    /**
     * @return $this
     */
    public function unsetGroupBy()
    {
    }
    /**
     * @return string|null
     */
    public function getGroupBy()
    {
    }
    /**
     * @param array $action
     *
     * @return $this
     */
    public function addAction(array $action)
    {
    }
    /**
     * @return array
     */
    public function getActions()
    {
    }
    /**
     * @param string $extension
     * @return ItemAttributes
     */
    public function setExtension($extension)
    {
    }
    /**
     * @return string|null
     */
    public function getExtension()
    {
    }
    /**
     * @return mixed|null
     */
    public function getViewerType()
    {
    }
    /**
     * @param $name
     * @param $value
     *
     * @return $this
     */
    public function setAttribute($name, $value = null)
    {
    }
    /**
     * @param $name
     *
     * @return $this
     */
    public function unsetAttribute($name)
    {
    }
    /**
     * @param $name
     *
     * @return bool
     */
    public function issetAttribute($name)
    {
    }
    /**
     * @param $name
     *
     * @return mixed|null
     */
    public function getAttribute($name)
    {
    }
    /**
     * @return array
     */
    public function getAttributes()
    {
    }
    /**
     * @param array $fileArray
     *
     * @return mixed|string
     * @throws \ReflectionException
     */
    protected static function getViewerTypeByFile(array $fileArray)
    {
    }
    /**
     * @return string
     */
    public function toString()
    {
    }
    /**
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Convert structure to array which we can use in js (node.dataset).
     * @return array
     */
    public function toDataSet()
    {
    }
    protected function convertKeyToDataSet($key)
    {
    }
}