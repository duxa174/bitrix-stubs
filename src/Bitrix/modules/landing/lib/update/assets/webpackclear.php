<?php

namespace Bitrix\Landing\Update\Assets;

final class WebpackClear extends \Bitrix\Main\Update\Stepper
{
    protected const CONTINUE_EXECUTING = true;
    protected const STOP_EXECUTING = false;
    protected const STEP_PORTION = 100;
    protected const WEBPACK_NAME_MASK = 'landing_assets_webpack';
    protected const MODULE_ID = 'landing';
    /**
     * IDs of files
     * @var array
     */
    protected $filesToDelete;
    protected static $moduleId = 'landing';
    /**
     * Execute
     * @param array $result
     * @return bool
     */
    public function execute(array &$result) : bool
    {
    }
    protected function getFilesToDelete() : array
    {
    }
    /**
     * Find files, than exist in b_file, but not attached to any landing
     */
    protected function findFilesToDelete() : void
    {
    }
    /**
     * In first version of webpack we not bind files to landing.
     * Now we can remove them to free space.
     *
     * Util method, not for regular use
     */
    public static function clearNotBindedFiles() : void
    {
    }
}