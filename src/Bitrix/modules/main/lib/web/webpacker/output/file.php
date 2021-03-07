<?php

namespace Bitrix\Main\Web\WebPacker\Output;

/**
 * Class File
 *
 * @package Bitrix\Main\Web\WebPacker\Output
 */
class File extends \Bitrix\Main\Web\WebPacker\Output\Base
{
    protected $id;
    protected $moduleId;
    protected $uploadDir;
    protected $dir;
    protected $name;
    protected $type;
    protected $content;
    /**
     * Remove by ID.
     *
     * @param int $id ID.
     * @return void
     */
    public static function removeById($id)
    {
    }
    /**
     * Output.
     *
     * @param WebPacker\Builder $builder Module.
     * @return Result
     */
    public function output(\Bitrix\Main\Web\WebPacker\Builder $builder)
    {
    }
    /**
     * Set content.
     *
     * @param string $content Content.
     * @return $this
     */
    public function setContent($content)
    {
    }
    /**
     * Set file ID.
     *
     * @param int $id File ID.
     * @return $this
     */
    public function setId($id)
    {
    }
    /**
     * Get file ID.
     *
     * @return int|null
     */
    public function getId()
    {
    }
    /**
     * Set module ID.
     *
     * @param string $moduleId Bitrix module ID.
     * @return $this
     */
    public function setModuleId($moduleId)
    {
    }
    /**
     * Set upload directory.
     *
     * @param string $uploadDir Upload directory.
     * @return $this
     */
    public function setUploadDir($uploadDir)
    {
    }
    /**
     * Set directory.
     *
     * @param string $dir Directory.
     * @return $this
     */
    public function setDir($dir)
    {
    }
    /**
     * Set name.
     *
     * @param string $name Name.
     * @return $this
     */
    public function setName($name)
    {
    }
    /**
     * Set type.
     *
     * @param string $type Content type.
     * @return $this
     */
    public function setType($type)
    {
    }
    /**
     * Remove.
     *
     * @return void
     */
    public function remove()
    {
    }
    /**
     * Get uri.
     *
     * @return string
     */
    public function getUri()
    {
    }
    protected function saveFile($content)
    {
    }
    protected static function getMimeTypeByFileName($fileName)
    {
    }
}