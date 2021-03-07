<?php

/** @var null|\Bitrix\Sale\Order $saleOrder */
$saleOrder = \null;
/** @var Order $orderClass */
$orderClass = $registry->getOrderClassName();
/** @var \Bitrix\Sale\Shipment $shipment */
$shipment = $shipmentCollection->getItemById($shipmentId);