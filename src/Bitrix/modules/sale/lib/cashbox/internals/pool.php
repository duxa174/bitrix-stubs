<?php

namespace Bitrix\Sale\Cashbox\Internals;

class Pool
{
    protected static $docs = array();
    /**
     * @param $code
     * @return mixed|null
     */
    public static function getDocs($code)
    {
    }
    /**
     * @param $code
     * @param $doc
     */
    public static function addDoc($code, $doc)
    {
    }
    /**
     * @param null $code
     */
    public static function resetDocs($code = null)
    {
    }
    /**
     * @param $code
     * @return Result
     */
    public static function generateChecks($code)
    {
    }
}