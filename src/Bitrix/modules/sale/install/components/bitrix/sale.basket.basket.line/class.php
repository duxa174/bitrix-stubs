<?php

class SaleBasketLineComponent extends \CBitrixComponent
{
    protected $bUseCatalog = \null;
    protected $readyForOrderFilter = array("CAN_BUY" => "Y", "DELAY" => "N", "SUBSCRIBE" => "N");
    protected $disableUseBasket = \false;
    protected $currentFuser = \null;
    /** @var Sale\Basket\Storage $basketStorage */
    protected $basketStorage;
    // temporary unused
    public function onPrepareComponentParams($arParams)
    {
    }
    protected function getUserFilter()
    {
    }
    protected function removeItemFromCart()
    {
    }
    public function executeComponent()
    {
    }
    private static $nextNumber = 0;
    public static function getNextNumber()
    {
    }
    private function getProducts()
    {
    }
    protected function loadProductPictures(array &$basketItemList)
    {
    }
    private function setImgSrc(&$arBasketItems, $arElementId, $arSku2Parent)
    {
    }
    /**
     * @param \Bitrix\Main\Event $event
     *
     * @return \Bitrix\Main\EventResult
     */
    public function onSaleBasketItemEntitySaved(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\Event $event
     *
     * @return \Bitrix\Main\EventResult
     */
    public function onSaleBasketItemDeleted(\Bitrix\Main\Event $event)
    {
    }
    /**
     * @param \Bitrix\Sale\Basket $basket
     *
     * @return float
     */
    protected static function getActualBasketPrice(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * @param \Bitrix\Sale\Basket $basket
     *
     * @return float
     */
    protected static function getActualBasketQuantity(\Bitrix\Sale\Basket $basket)
    {
    }
    protected function getFuserId()
    {
    }
    protected function loadCurrentFuser()
    {
    }
    protected function getBasketStorage()
    {
    }
    private function makeCompatibleArray(&$array)
    {
    }
    private function getItemData(\Bitrix\Sale\BasketItem $item)
    {
    }
    /**
     * @param int $count
     * @param array $messages
     * @return string
     */
    protected static function getBasketCountDescription(int $count, array $messages)
    {
    }
}
function BasketNumberWordEndings($num, $lang = \false, $arEnds = \false)
{
}