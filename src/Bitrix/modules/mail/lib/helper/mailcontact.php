<?php

namespace Bitrix\Mail\Helper;

/**
 * Class MailContact
 * @package Bitrix\Mail\Helper
 */
class MailContact
{
    const COLOR_GREEN = '#9dcf01';
    const COLOR_BLUE = '#2fc6f6';
    const COLOR_LIGHT_BLUE = '#56d1e0';
    const COLOR_ORANGE = '#ffa900';
    const COLOR_CYAN = '#47e4c2';
    const COLOR_PINK = '#ff5b55';
    const COLOR_PURPLE = '#9985dd';
    const COLOR_GREY = '#a8adb4';
    const COLOR_BROWN = '#af7e00';
    const COLOR_RED = '#F44336';
    const COLOR_DEEP_PURPLE = '#673AB7';
    const COLOR_INDIGO = '#3F51B5';
    const COLOR_TEAL = '#009688';
    const COLOR_LIGHT_GREEN = '#8BC34A';
    const COLOR_LIME = '#CDDC39';
    const COLOR_YELLOW = '#FFEB3B';
    const COLOR_AMBER = '#FFC107';
    const COLOR_DEEP_ORANGE = '#FF5722';
    const COLOR_BLUE_GREY = '#607D8B';
    /**
     * @param $email
     * @param $name
     * @param null $lastName
     * @return array
     * @throws \ReflectionException
     */
    public static function getIconData($email, $name, $lastName = null)
    {
    }
    /**
     * @return mixed
     * @throws \ReflectionException
     */
    public static function getRandomColor()
    {
    }
    /** return two symbols from name and last name, or 1 - from name or email
     * @param $email
     * @param $name
     * @param null $lastName
     * @return string
     */
    public static function getInitials($email, $name = null, $lastName = null)
    {
    }
    /** returns array of fields and their values for adding to database
     * @param $mailsField
     * @param $userId
     * @param $addedFrom
     * @return array
     * @throws \ReflectionException
     */
    public static function getContactsData($mailsField, $userId, $addedFrom)
    {
    }
}