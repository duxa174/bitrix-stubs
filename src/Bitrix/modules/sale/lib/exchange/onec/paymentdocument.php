<?php

namespace Bitrix\Sale\Exchange\OneC;

class PaymentDocument extends \Bitrix\Sale\Exchange\OneC\DocumentBase
{
    protected static $FIELD_INFOS = null;
    /**
     * @return array
     */
    public static function getFieldsInfo()
    {
    }
    /**
     * @param int $level
     * @return string
     */
    public function output($level = 0)
    {
    }
    protected function outputXmlCashBoxChecks($level, $name, $checks)
    {
    }
}
class PaymentCashDocument extends \Bitrix\Sale\Exchange\OneC\PaymentDocument
{
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
}
class PaymentCashLessDocument extends \Bitrix\Sale\Exchange\OneC\PaymentDocument
{
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
}
class PaymentCardDocument extends \Bitrix\Sale\Exchange\OneC\PaymentDocument
{
    /**
     * @return int
     */
    public function getTypeId()
    {
    }
}