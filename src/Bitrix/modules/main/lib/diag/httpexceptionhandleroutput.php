<?php

namespace Bitrix\Main\Diag;

class HttpExceptionHandlerOutput implements \Bitrix\Main\Diag\IExceptionHandlerOutput
{
    /**
     * @param \Error|\Exception $exception
     * @param bool $debug
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public function renderExceptionMessage($exception, $debug = false)
    {
    }
}