<?php

namespace Bitrix\Sender\Dispatch;

interface iMethod
{
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter);
    /**
     * Apply method.
     *
     * @return void
     */
    public function apply();
    /**
     * Revoke method.
     *
     * @return void
     */
    public function revoke();
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode();
}