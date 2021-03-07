<?php

namespace Bitrix\Main\UI\Uploader;

/**
 * Class ErrorCatcher is used in main/tools/upload.php:16 to catch unknown server response.
 * @package Bitrix\Main\UI\Uploader
 *
 */
class ErrorCatcher
{
    /**
     * @param string $path URL where error was registered.
     * @param string $errorText Error text.
     * @return void
     */
    public function log($path, $errorText)
    {
    }
}