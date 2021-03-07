<?php

namespace Bitrix\Sale\Helpers\Admin\Blocks;

class OrderPayment
{
    /** @var $order \Bitrix\Sale\Order */
    private static $order = null;
    private static $defaultFields = null;
    private static function prepareData($item, $error = false)
    {
    }
    private static function getDisallowFields()
    {
    }
    /**
     * @param $paySystemId
     * @return mixed
     * @throws Main\ArgumentException
     */
    public static function getPaySystemParams($paySystemId)
    {
    }
    /**
     * @param $payment
     * @param $data
     * @return mixed
     */
    public static function modifyData($payment, $data)
    {
    }
    /**
     * @param \Bitrix\Sale\Payment $payment
     * @param int $index
     * @param $dataForRecovery
     * @return string
     */
    public static function getEdit($payment, $index = 1, $dataForRecovery = array())
    {
    }
    /**
     * @param $payment
     * @param int $index
     * @param string $form
     * @return string
     */
    public static function getView($payment, $index = 1, $form = '')
    {
    }
    /**
     * @return string
     */
    public static function getScripts()
    {
    }
    private static function getEditTemplate($data, $index, $post = array())
    {
    }
    private static function getViewTemplate($data, $index, $form)
    {
    }
    private static function getShortViewTemplate($data, $index, $form)
    {
    }
    private static function initJsPayment($params)
    {
    }
    /**
     * @param $checkList
     *
     * @return string
     */
    public static function buildCheckHtml($checkList)
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    public static function getPaySystemList(\Bitrix\Sale\Payment $payment)
    {
    }
    private static function getImgPathList()
    {
    }
    /**
     * @param $formType
     * @return string
     */
    public static function createButtonAddPayment($params = [])
    {
    }
    /**
     * @param Sale\Order $order
     * @param $payments
     * @param bool $canSetPaid
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws UserMessageException
     */
    public static function updateData(\Bitrix\Sale\Order &$order, $payments, $canSetPaid = false)
    {
    }
}