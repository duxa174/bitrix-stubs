<?php

namespace Bitrix\Landing\Assets;

class WebpackFile
{
    protected const MODULE_ID = 'landing';
    protected const CORE_EXTENSION = 'ui.webpacker';
    protected const LANG_RESOURCE = '/bitrix/js/landing/webpackassets/message_loader.js';
    /**
     * @var WebPacker\FileController
     */
    protected $fileController;
    /**
     * @var int relation with file and landing in table
     */
    protected $landingId;
    /**
     * @var int - ID of file from b_file
     */
    protected $fileId;
    /**
     * @var WebPacker\Resource\Package
     */
    protected $package;
    /**
     * @var WebPacker\Resource\Profile
     */
    protected $profile;
    /**
     * Name of file. If not set - will be using default
     * @var
     */
    protected $filename;
    /**
     * WebpackFile constructor.
     */
    public function __construct()
    {
    }
    /**
     * Assets created for every landing.
     * @param int $lid - id of landing
     */
    public function setLandingId(int $lid) : void
    {
    }
    /**
     * Set unique name of file. If not set - will be using default
     * @param string $name
     */
    public function setFileName(string $name) : void
    {
    }
    protected function getFileName() : string
    {
    }
    /**
     * @param string $resource Relative path to asset.
     */
    public function addResource(string $resource) : void
    {
    }
    /**
     * Create new or get existing webpack file.
     */
    public function build() : void
    {
    }
    /**
     * Prepare fileController for build
     */
    protected function configureFile() : void
    {
    }
    /**
     * Search existing asset file for current landing
     * @return bool|int - ID of file or false if not exist
     */
    protected function findExistFile()
    {
    }
    public function setUseLang() : void
    {
    }
    protected function configureResources() : void
    {
    }
    /**
     * Return JS-string for load assets pack
     * File must be builded before
     * @return string
     */
    public function getOutput() : string
    {
    }
    /**
     * Mark webpack files for landing as "need rebuild", but not delete them. File will be exist until not created new file.
     * @param int|[int] $lid - array of landing IDs.
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function markToRebuild($lid) : void
    {
    }
    /**
     * * Mark webpack files for landing as "need rebuild", but not delete them. File will be exist until not created new file.
     */
    public static function markAllToRebuild() : void
    {
    }
}