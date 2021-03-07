<?php

namespace Bitrix\Sender\Internals\Model\Posting;

/**
 * Class RecipientTable
 *
 * @package Bitrix\Sender\Internals\Model\Posting
 */
class RecipientTable extends \Bitrix\Main\Entity\DataManager
{
    const SEND_RESULT_NONE = 'Y';
    const SEND_RESULT_SUCCESS = 'N';
    const SEND_RESULT_ERROR = 'E';
    const SEND_RESULT_WAIT = 'W';
    const SEND_RESULT_DENY = 'D';
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Get map.
     *
     * @return array
     */
    public static function getMap()
    {
    }
}