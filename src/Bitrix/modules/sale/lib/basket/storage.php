<?php

namespace Bitrix\Sale\Basket;

class Storage
{
    /** @var array $instance */
    private static $instance = array();
    /** @var Sale\Basket $basket */
    protected $basket;
    /** @var Sale\Basket $orderableBasket */
    protected $orderableBasket;
    private $fUserId;
    private $siteId;
    private function __construct($fUserId, $siteId)
    {
    }
    private function __clone()
    {
    }
    protected static function getHash($fUserId, $siteId)
    {
    }
    protected function getFUserId()
    {
    }
    protected function getSiteId()
    {
    }
    public static function getInstance($fUserId, $siteId)
    {
    }
    public function getBasket()
    {
    }
    public function getOrderableBasket()
    {
    }
}