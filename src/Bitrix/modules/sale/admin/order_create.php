<?php

/** @var Sale\Order $orderClass */
$orderClass = $registry->getOrderClassName();
/** @var \Bitrix\Sale\Order $order */
$order = \null;
/** @var Sale\DiscountCouponsManager $discountCouponsClass */
$discountCouponsClass = $registry->getDiscountCouponClassName();