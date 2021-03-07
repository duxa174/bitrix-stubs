<?php

namespace Bitrix\Main\Diag;

class ExceptionHandlerOutput implements \Bitrix\Main\Diag\IExceptionHandlerOutput
{
    /**
     * @param \Error|\Exception $exception
     * @param bool $debug
     */
    public function renderExceptionMessage($exception, $debug = false)
    {
    }
}