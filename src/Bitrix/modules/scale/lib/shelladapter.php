<?php

namespace Bitrix\Scale;

/**
 * Class ShellAdapter
 * Executes shell commands
 * @package Bitrix\Scale
 */
class ShellAdapter
{
    const SUCCESS_RESULT = 0;
    protected $resOutput = "";
    protected $resError = "";
    /**
     * Checks and escapes command
     * @param string $command
     * @return string escapedSring
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function prepareExecution($command)
    {
    }
    /**
     * Starts execution fo shell command
     * Results can be obtained by another special commands
     * @param $command
     * @return true;
     */
    public function asyncExec($command)
    {
    }
    /**
     * @return string Last command output
     */
    public function getLastOutput()
    {
    }
    /**
     * @return string last error output
     */
    public function getLastError()
    {
    }
    /**
     * Executes shell command & return shell command execution result
     * @param string $command
     * @return bool
     */
    public function syncExec($command)
    {
    }
}