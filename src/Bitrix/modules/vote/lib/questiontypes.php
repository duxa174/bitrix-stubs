<?php

namespace Bitrix\Vote;

class QuestionTypes
{
    const RADIO = 0;
    const CHECKBOX = 1;
    const DROPDOWN = 2;
    const MULTISELECT = 3;
    const COMPATIBILITY = 99999;
    /**
     * Gets types brief list
     * @return array
     */
    public static function getValues()
    {
    }
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
     * Returns type title
     * @param (int|string) $id Field type like (0 - radio).
     * @return string
     */
    public static function getTitleById($id)
    {
    }
}