<?php

/** @var Sale\Order $orderClass */
$orderClass = $registry->getOrderClassName();
/** @var \Bitrix\Main\Entity\Event $event */
$event = new \Bitrix\Main\Event('sale', \Bitrix\Sale\EventActions::EVENT_ON_ADMIN_ORDER_LIST, $getListParams);
function addSourceNameToRuntimeAndSelect(&$runtimeFields, &$arSelectFields)
{
}