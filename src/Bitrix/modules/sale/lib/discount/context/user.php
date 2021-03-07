<?php

namespace Bitrix\Sale\Discount\Context;

class User extends \Bitrix\Sale\Discount\Context\BaseContext
{
    /**
     * User constructor.
     *
     * @param \CUser|int $user
     */
    public function __construct($user)
    {
    }
    /**
     * Resolves userId from parameter $user.
     *
     * @param \CUser|int $user Different types: User model, CUser, id of user.
     * @return int|null
     */
    private static function resolveUserId($user)
    {
    }
}