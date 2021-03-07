<?php

namespace Bitrix\Sale\Discount\Context;

class Fuser extends \Bitrix\Sale\Discount\Context\BaseContext
{
    protected $fuserId;
    /**
     * FUser constructor.
     *
     * @param int $fuserId
     */
    public function __construct($fuserId)
    {
    }
}