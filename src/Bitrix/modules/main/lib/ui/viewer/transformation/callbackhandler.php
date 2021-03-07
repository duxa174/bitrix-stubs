<?php

namespace Bitrix\Main\UI\Viewer\Transformation;

final class CallbackHandler implements \Bitrix\Transformer\InterfaceCallback
{
    /**
     * Function to process results after transformation.
     *
     * @param int $status Status of the command.
     * @param string $command Name of the command.
     * @param array $params Input parameters of the command.
     * @param array $result Result of the command from controller
     *      Here keys are identifiers to result information. If result is file it will be in 'files' array.
     *      'files' - array of the files, where key is extension, and value is absolute path to the result file.
     *
     * This method should return true on success or string on error.
     *
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function call($status, $command, $params, $result = array())
    {
    }
    protected static function sendNotifyAboutTransformation($fileId)
    {
    }
    protected static function saveFile($file, $type)
    {
    }
    public static function existSavedFile($fileId)
    {
    }
}