<?php

/** @var null|\Bitrix\Sale\Order $saleOrder */
$saleOrder = \null;
/** @var Order $orderClass */
$orderClass = $registry->getOrderClassName();
/**
 * @var $result \Bitrix\Main\Entity\Result;
 */
$result = $factory::create(\Bitrix\Sale\Helpers\Admin\Blocks\BlockType::PAYMENT)->updateData($saleOrder, $request->get('PAYMENT'));