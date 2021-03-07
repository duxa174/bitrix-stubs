<?php

namespace Bitrix\Vote;

class AnswerTypes
{
    const RADIO = 0;
    const CHECKBOX = 1;
    const DROPDOWN = 2;
    const MULTISELECT = 3;
    const TEXT = 4;
    const TEXTAREA = 5;
    /**
     * Gets types list
     * @return array
     */
    public static function getFullList()
    {
    }
    /**
     * Returns array of types
     * @return array
     */
    public static function getTitledList()
    {
    }
    /**
     * Returns type title.
     * @param (int|string) $id Field type like (0 - radio).
     * @return string
     */
    public static function getTitleById($id)
    {
    }
}