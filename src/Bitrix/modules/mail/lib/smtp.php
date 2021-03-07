<?php

namespace Bitrix\Mail;

class Smtp
{
    const ERR_CONNECT = 101;
    const ERR_REJECTED = 102;
    const ERR_COMMUNICATE = 103;
    const ERR_EMPTY_RESPONSE = 104;
    const ERR_STARTTLS = 201;
    const ERR_COMMAND_REJECTED = 202;
    const ERR_CAPABILITY = 203;
    const ERR_AUTH = 204;
    const ERR_AUTH_MECH = 205;
    protected $stream, $errors;
    protected $sessCapability;
    protected $options = array();
    /**
     * Smtp client constructor.
     *
     * @param string $host Host.
     * @param string $port Port.
     * @param string $tls Tls.
     * @param string $strict Strict.
     * @param string $login Login.
     * @param string $password Password.
     * @param string|null $encoding.  If null - current site encoding.
     */
    public function __construct($host, $port, $tls, $strict, $login, $password, $encoding = null)
    {
    }
    /**
     * Disconnects from the submission server.
     *
     * @return void
     */
    public function __destruct()
    {
    }
    /**
     * Disconnects from the submission server.
     *
     * @return void
     */
    protected function disconnect()
    {
    }
    protected function reset()
    {
    }
    /**
     * Connect to the submission server.
     *
     * @param array $error Will be filled with connection errors.
     * @return bool True if the connection was successful, false - otherwise.
     */
    public function connect(&$error)
    {
    }
    protected function starttls(&$error)
    {
    }
    protected function capability(&$error)
    {
    }
    /**
     * Authenticate to the submission server.
     *
     * @param array $error Will be filled with authentication errors.
     * @return bool True if the authentication was successful, false - otherwise.
     */
    public function authenticate(&$error)
    {
    }
    protected function executeCommand($command, &$error)
    {
    }
    protected function exchange($data, &$error)
    {
    }
    protected function sendData($data)
    {
    }
    protected function readLine()
    {
    }
    /**
     * Reads and returns server response.
     *
     * @return array|false
     */
    protected function readResponse()
    {
    }
    protected function errorMessage($errors, $details = null)
    {
    }
    /**
     * Returns all Smtp client errors.
     *
     * @return Main\ErrorCollection object.
     */
    public function getErrors()
    {
    }
    /**
     * Returns error message by code.
     *
     * @param int $code Error code.
     * @return string
     */
    public static function decodeError($code)
    {
    }
}