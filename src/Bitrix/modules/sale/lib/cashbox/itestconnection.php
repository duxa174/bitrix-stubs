<?php

namespace Bitrix\Sale\Cashbox;

interface ITestConnection
{
    /**
     * @return Result
     */
    public function testConnection();
}