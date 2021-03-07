<?php

namespace Bitrix\Im\Model;

class CallTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * Updates call state in the database. Returns true if state was changed by the update and false otherwise.
     * @param int $id Id of the call.
     * @param string $newState New call state
     * @return bool
     */
    public static function updateState(int $id, string $newState) : bool
    {
    }
}