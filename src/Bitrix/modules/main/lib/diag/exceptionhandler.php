<?php

namespace Bitrix\Main\Diag;

class ExceptionHandler
{
    private $debug = false;
    private $handledErrorsTypes;
    private $exceptionErrorsTypes;
    private $catchOverflowMemory = false;
    private $memoryReserveLimit = 65536;
    private $memoryReserve;
    private $ignoreSilence = false;
    private $assertionThrowsException = true;
    private $assertionErrorType = E_USER_ERROR;
    /**
     * @var ExceptionHandlerLog
     */
    private $handlerLog = null;
    private $handlerLogCreator = null;
    /**
     * @var IExceptionHandlerOutput
     */
    private $handlerOutput = null;
    private $handlerOutputCreator = null;
    private $isInitialized = false;
    /**
     * ExceptionHandler constructor.
     */
    public function __construct()
    {
    }
    /**
     * Sets debug mode.
     * Should be used for development install.
     *
     * @param boolean $debug If true errors will be displayed in html output. If false most errors will be suppressed.
     *
     * @return void
     */
    public function setDebugMode($debug)
    {
    }
    /**
     * Whenever to try catch and report memory overflows errors or not.
     *
     * @param boolean $catchOverflowMemory If true memory overflow errors will be handled.
     *
     * @return void
     */
    public function setOverflowMemoryCatching($catchOverflowMemory)
    {
    }
    /**
     * Sets error types to be handled.
     *
     * @param integer $handledErrorsTypes Bitmask of error types.
     *
     * @return void
     * @see http://php.net/manual/en/errorfunc.constants.php
     */
    public function setHandledErrorsTypes($handledErrorsTypes)
    {
    }
    /**
     * Sets assertion types to be handled.
     *
     * @param integer $assertionErrorType Bitmask of assertion types.
     *
     * @return void
     * @see http://php.net/manual/en/errorfunc.constants.php
     */
    public function setAssertionErrorType($assertionErrorType)
    {
    }
    /**
     * Whenever to throw an exception on assertion or not.
     *
     * @param boolean $assertionThrowsException If true an assertion will throw exception.
     *
     * @return void
     */
    public function setAssertionThrowsException($assertionThrowsException)
    {
    }
    /**
     * Sets which errors will raise an exception.
     *
     * @param integer $errorTypesException Bitmask of error types.
     *
     * @return void
     * @see http://php.net/manual/en/errorfunc.constants.php
     */
    public function setExceptionErrorsTypes($errorTypesException)
    {
    }
    /**
     * Whenever to ignore error_reporting() == 0 or not.
     *
     * @param boolean $ignoreSilence If true then error_reporting()==0 will be ignored.
     *
     * @return void
     */
    public function setIgnoreSilence($ignoreSilence)
    {
    }
    /**
     * Sets logger object to use for log writing.
     *
     * @param \Bitrix\Main\Diag\ExceptionHandlerLog $handlerLog Logger object.
     *
     * @return void
     */
    public function setHandlerLog(\Bitrix\Main\Diag\ExceptionHandlerLog $handlerLog = null)
    {
    }
    /**
     * Sets an object used for error message display to user.
     *
     * @param \Bitrix\Main\Diag\IExceptionHandlerOutput $handlerOutput Object will display errors to user.
     *
     * @return void
     */
    public function setHandlerOutput(\Bitrix\Main\Diag\IExceptionHandlerOutput $handlerOutput)
    {
    }
    /**
     * Adjusts PHP for error handling.
     *
     * @return void
     */
    protected function initializeEnvironment()
    {
    }
    /**
     * Returns an object used for error message display to user.
     *
     * @return IExceptionHandlerOutput|null
     */
    protected function getHandlerOutput()
    {
    }
    /**
     * Returns an object for error message writing to log.
     *
     * @return ExceptionHandlerLog|null
     */
    protected function getHandlerLog()
    {
    }
    /**
     * Initializes error handling.
     * Must be called after the object creation.
     *
     * @param callable $exceptionHandlerOutputCreator Function to return an object for error message formatting.
     * @param callable|null $exceptionHandlerLogCreator Function to return an object for log writing.
     *
     * @return void
     */
    public function initialize($exceptionHandlerOutputCreator, $exceptionHandlerLogCreator = null)
    {
    }
    /**
     * Writes exception information into log, displays it to user and terminates with die().
     *
     * @param \Exception|\Error $exception Exception object.
     *
     * @return void
     * @see \Bitrix\Main\Diag\ExceptionHandler::writeToLog
     * @see \Bitrix\Main\Diag\ExceptionHandler::initialize
     */
    public function handleException($exception)
    {
    }
    /**
     * Creates and exception object from its arguments.
     * Throws it if $code matches exception mask or writes it into log.
     *
     * @param integer $code Error code.
     * @param string $message Error message.
     * @param string $file File where error has occurred.
     * @param integer $line File line number where error has occurred.
     *
     * @return true
     * @throws \ErrorException
     * @see \Bitrix\Main\Diag\ExceptionHandler::setExceptionErrorsTypes
     */
    public function handleError($code, $message, $file, $line)
    {
    }
    /**
     * Creates and exception object from its arguments.
     * Throws it if assertion set to raise exception (which is by default) or writes it to log.
     *
     * @param string $file File where error has occurred.
     * @param integer $line File line number where error has occurred.
     * @param string $message Error message.
     *
     * @return void
     * @throws \ErrorException
     * @see \Bitrix\Main\Diag\ExceptionHandler::setAssertionThrowsException
     */
    public function handleAssertion($file, $line, $message)
    {
    }
    /**
     * Gets error information from error_get_last() function.
     * Checks if type for certain error types and writes it to log.
     *
     * @return void
     * @see error_get_last
     * @see \Bitrix\Main\Diag\ExceptionHandler::setHandledErrorsTypes
     */
    public function handleFatalError()
    {
    }
    /**
     * Writes an exception information to log.
     *
     * @param \Exception $exception Exception object.
     * @param integer|null $logType See ExceptionHandlerLog class constants.
     *
     * @return void
     * @see \Bitrix\Main\Diag\ExceptionHandler::initialize
     */
    public function writeToLog($exception, $logType = null)
    {
    }
}