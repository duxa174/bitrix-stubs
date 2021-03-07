<?php

namespace Bitrix\Sender\Integration\Crm\ReturnCustomer;

/**
 * Class MessageLead
 * @package Bitrix\Sender\Integration\Crm\ReturnCustomer;
 */
class MessageLead extends \Bitrix\Sender\Integration\Crm\ReturnCustomer\MessageBase implements \Bitrix\Sender\Message\iHideable
{
    const CODE = self::CODE_RC_LEAD;
    /**
     * Get name.
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Return true if is hidden.
     *
     * @return bool
     */
    public function isHidden()
    {
    }
    protected function setConfigurationOptions()
    {
    }
}