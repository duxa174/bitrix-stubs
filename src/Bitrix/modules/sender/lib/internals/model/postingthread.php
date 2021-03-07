<?php

namespace Bitrix\Sender\Internals\Model;

class PostingThreadTable extends \Bitrix\Main\Entity\DataManager
{
    const STATUS_NEW = 'N';
    const STATUS_IN_PROGRESS = 'P';
    const STATUS_DONE = 'D';
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * @return array
     */
    public static function getMap()
    {
    }
}