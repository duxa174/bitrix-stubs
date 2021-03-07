<?php

namespace Bitrix\Sale\Cashbox;

interface IPrintImmediately
{
    /**
     * @param Check $check
     * @return Result
     */
    public function printImmediately(\Bitrix\Sale\Cashbox\Check $check);
}