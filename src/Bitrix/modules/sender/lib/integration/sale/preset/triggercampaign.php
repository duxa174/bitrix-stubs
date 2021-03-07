<?php

namespace Bitrix\Sender\Integration\Sale\Preset;

/**
 * Class TriggerCampaign
 *
 * @package Bitrix\Sender\Integration\Sale\Preset
 */
class TriggerCampaign
{
    protected static function getMailTemplate(array $params = null)
    {
    }
    protected static function getCoupon($perc = 5)
    {
    }
    protected static function getBasketCart()
    {
    }
    protected static function getMessagePlaceHolders()
    {
    }
    /**
     * Get template types.
     *
     * @return array
     */
    public static function getTemplateCategories()
    {
    }
    /**
     * Get all.
     *
     * @return array
     */
    public static function getAll()
    {
    }
    /**
     * Get forgotten cart.
     *
     * @param int $days Days.
     * @return array
     */
    public static function getForgottenCart($days)
    {
    }
    /**
     * Get canceled order.
     *
     * @return array
     */
    public static function getCanceledOrder()
    {
    }
    /**
     * Get paid order.
     *
     * @return array
     */
    public static function getPaidOrder()
    {
    }
    /**
     * Get don't buy.
     *
     * @param int $days Days.
     * @return array
     */
    public static function getDontBuy($days)
    {
    }
    /**
     * Get don't auth.
     *
     * @param int $days Days.
     * @return array
     */
    public static function getDontAuth($days)
    {
    }
}