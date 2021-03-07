<?php

namespace Bitrix\Sender\Entity;

/**
 * Class Trigger
 * @package Bitrix\Sender\Entity
 */
class TriggerCampaign extends \Bitrix\Sender\Entity\Campaign
{
    /** @var  Chain $chain */
    protected $chain;
    /**
     * Get default data.
     *
     * @return array
     */
    protected function getDefaultData()
    {
    }
    /**
     * Get list.
     *
     * @param array $parameters Parameters.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList(array $parameters = [])
    {
    }
    /**
     * Get chain.
     *
     * @return Chain
     */
    public function getChain()
    {
    }
}