<?php

/** @var Sale\Order $orderClassName */
$orderClassName = $registry->getOrderClassName();
/** @var Sale\Payment|null $paymentItem */
$paymentItem = \null;
/** @var Sale\Order $order */
$order = $orderClassName::load($arOrder['ID']);