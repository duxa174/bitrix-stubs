<?php

namespace Bitrix\Sender\Recipient;

/**
 * Class Type
 * @package Bitrix\Sender\Recipient
 */
class Type extends \Bitrix\Sender\Internals\ClassConstant
{
    const EMAIL = 1;
    const PHONE = 2;
    const IM = 3;
    const CRM_COMPANY_ID = 4;
    const CRM_CONTACT_ID = 5;
    const CRM_DEAL_PRODUCT_CONTACT_ID = 6;
    const CRM_ORDER_PRODUCT_CONTACT_ID = 7;
    const CRM_DEAL_PRODUCT_COMPANY_ID = 8;
    const CRM_ORDER_PRODUCT_COMPANY_ID = 9;
    /**
     * Detect type by recipient code.
     *
     * @param string $recipientCode Recipient code.
     * @param bool $isNormalized Is code normalized.
     * @return integer|null
     */
    public static function detect($recipientCode, $isNormalized = false)
    {
    }
    /**
     * Get caption.
     *
     * @param integer $id ID.
     * @return integer|null
     */
    public static function getName($id)
    {
    }
}