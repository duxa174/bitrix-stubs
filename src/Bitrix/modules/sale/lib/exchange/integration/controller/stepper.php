<?php

namespace Bitrix\Sale\Exchange\Integration\Controller;

class Stepper extends \Bitrix\Main\Engine\Controller
{
    const BATCH_LENGTH = 50;
    public function activityBatchAction(array $list, $total = 0, $start = 0)
    {
    }
    public function progressBarAction($value)
    {
    }
    public function messageOKAction()
    {
    }
    public function messageByTypeAction($message, $type)
    {
    }
    protected static function getInActiveOrders($orderIds)
    {
    }
    protected function getUnprocessedItems($items)
    {
    }
    protected function checkInActiveOrder($id, $list)
    {
    }
}