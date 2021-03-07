<?php

namespace Bitrix\Main\Web\WebPacker;

/**
 * Class FileController
 *
 * @package Bitrix\Main\Web\WebPacker
 */
class FileController extends \Bitrix\Main\Web\WebPacker\Builder
{
    /** @var Output\File $file File. */
    private $file;
    /** @var Loader $loader Loader. */
    private $loader;
    /**
     * Delete.
     *
     * @return void
     */
    public function delete()
    {
    }
    /**
     * Configure file.
     *
     * @param string $id File ID.
     * @param string $moduleId Bitrix module ID.
     * @param string $dir File directory.
     * @param string $name Filename.
     * @return $this
     */
    public function configureFile($id, $moduleId, $dir, $name)
    {
    }
    /**
     * @return Loader
     */
    public function getLoader()
    {
    }
    /**
     * Get output file.
     *
     * @return Output\File
     */
    protected function getOutputFile()
    {
    }
    /**
     * Set output.
     *
     * @param Output\Base $output Output.
     * @return $this
     */
    public function setOutput(\Bitrix\Main\Web\WebPacker\Output\Base $output)
    {
    }
    /**
     * Get output.
     *
     * @return Output\Base
     */
    public function getOutput()
    {
    }
}