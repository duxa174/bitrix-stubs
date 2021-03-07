<?php

namespace Bitrix\Sale\Cashbox;

interface ICheckable
{
    /**
     * @param Check $check
     * @return Result
     */
    public function check(\Bitrix\Sale\Cashbox\Check $check);
}