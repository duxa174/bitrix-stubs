<?php

/**
 * Class CSecuritySessionHandler
 * @deprecated
 * @see \Bitrix\Main\Session\Handlers\AbstractSessionHandler
 */
class CSecuritySessionHandler extends \SessionHandler
{
    private $class;
    public function __construct($class)
    {
    }
    public function open($save_path, $session_name)
    {
    }
    public function close()
    {
    }
    public function read($session_id)
    {
    }
    public function write($session_id, $session_data)
    {
    }
    public function destroy($session_id)
    {
    }
    public function gc($maxlifetime)
    {
    }
    public function create_sid()
    {
    }
}