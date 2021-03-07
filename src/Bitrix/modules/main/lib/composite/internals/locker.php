<?php

namespace Bitrix\Main\Composite\Internals;

class Locker
{
    const CONNECTION_NAME = "composite";
    /**
     * Tries to obtain a lock with a name given by the string $id
     * Supports only Mysql.
     *
     * @param string $id Lock Name.
     * @return bool Returns true if lock was obtained.
     */
    public static function lock($id)
    {
    }
    /**
     * Releases the lock named by the string $id
     * Supports only Mysql
     *
     * @param string $id Lock Name.
     * @return bool Returns true if lock was released.
     */
    public static function unlock($id)
    {
    }
    /**
     * Gets a new connection for the lock mechanism
     * @return \Bitrix\Main\DB\Connection
     */
    private static function getConnection()
    {
    }
}