<?php

/**
* Bitrix Framework
* @package bitrix
* @subpackage security
* @copyright 2001-2013 Bitrix
*/
/**
 * Class CSecuritySessionVirtual
 * @deprecated
 * @see \Bitrix\Main\Session\Handlers\NullSessionHandler
 */
class CSecuritySessionVirtual
{
    /**
     * @return bool
     */
    public static function isStorageEnabled()
    {
    }
    /**
     * @return bool
     */
    public static function Init()
    {
    }
    /**
     * @param string $savePath - unused on this handler
     * @param string $sessionName - unused on this handler
     * @return bool
     */
    public static function open($savePath, $sessionName)
    {
    }
    public static function close()
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @return string
     */
    public static function read($id)
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @param array $sessionData
     * @return bool
     */
    public static function write($id, $sessionData)
    {
    }
    /**
     * @param string $id - session id, must be valid hash
     * @return bool
     */
    public static function destroy($id)
    {
    }
    /**
     * @param int $maxLifeTime - unused on this handler
     */
    public static function gc($maxLifeTime)
    {
    }
}