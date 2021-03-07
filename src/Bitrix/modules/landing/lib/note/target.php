<?php

namespace Bitrix\Landing\Note;

class Target
{
    /**
     * User option code for storage notes last sites.
     */
    const UO_CODE_NOTES_LAST = 'notes_last';
    /**
     * By landing id remembers user opt.
     * @param int $landingId Landing id.
     * @return void
     */
    public static function rememberLastSite(int $landingId) : void
    {
    }
    /**
     * Returns available entities short pop list for note creating.
     * @return array
     */
    public static function getShortList() : array
    {
    }
}