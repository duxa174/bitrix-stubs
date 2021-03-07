<?php

namespace Bitrix\Main\Session\Handlers\Table;

class UserSessionTable extends \Bitrix\Main\Entity\DataManager
{
    /** @var string Connection name used for SQL queries */
    public const CONNECTION_NAME = 'user_session';
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns connection name for entity
     * Have side affect, keep it in mind!
     * Clone default database connection if connection {@link SessionTable::CONNECTION_NAME} doesn't exists
     *
     * @return string
     */
    public static function getConnectionName()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Locks specified session id
     *
     * @param string $id Session id.
     * @param int $timeout Lock timeout.
     * @return bool Returns true if lock occurred.
     */
    public static function lock($id, $timeout = 60)
    {
    }
    /**
     * Unlock specified session id
     *
     * @param string $id Session id.
     * @return bool Returns true if lock released.
     */
    public static function unlock($id)
    {
    }
    /**
     * Deletes old sessions
     *
     * @param int $sec Seconds.
     * @return void
     */
    public static function deleteOlderThan($sec)
    {
    }
}