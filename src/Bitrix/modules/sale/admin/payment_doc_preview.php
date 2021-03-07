<?php

/** @var Sale\Order $orderClassName */
$orderClassName = $registry->getOrderClassName();
/** @var Sale\Order $order */
$order = $orderClassName::load($orderId);