<?php

namespace Bitrix\Sender\Message;

/**
 * Interface iHideable
 * @package Bitrix\Sender\Message
 */
interface iHideable
{
    /**
     * Return true if is hidden.
     *
     * @return bool
     */
    public function isHidden();
}