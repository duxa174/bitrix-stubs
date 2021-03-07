<?php

namespace Bitrix\Vote\Vote;

class Anonymity
{
    const UNDEFINED = 0;
    const PUBLICLY = 1;
    const ANONYMOUSLY = 2;
    /**
     * Gets types list
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Gets types list
     * @return array
     */
    public static function getTitledList()
    {
    }
    /**
     * @return array
     */
    public static function getValues()
    {
    }
    /**
     * Returns visibility user voting result for others.
     * @param bool $userValue
     * @param $voteValue
     * @return bool
     */
    public static function isUserVoteVisible(bool $userValue, int $voteValue)
    {
    }
    public static function getTitle()
    {
    }
    public static function validate($value)
    {
    }
}