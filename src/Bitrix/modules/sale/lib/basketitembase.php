<?php

namespace Bitrix\Sale;

/**
 * Class BasketItemBase
 * @package Bitrix\Sale
 */
abstract class BasketItemBase extends \Bitrix\Sale\Internals\CollectableEntity
{
    /** @var BasketPropertiesCollectionBase $propertyCollection */
    protected $propertyCollection;
    /** @var Internals\Fields */
    protected $calculatedFields;
    /** @var  ProviderBase */
    protected $provider;
    /** @var string */
    protected $internalId = null;
    protected static $idBasket = 0;
    /**
     * @param $basketCode
     * @return BasketItemBase|null
     * @throws Main\ArgumentNullException
     */
    public function findItemByBasketCode($basketCode)
    {
    }
    /**
     * @return string|void
     */
    public static function getRegistryEntity()
    {
    }
    /**
     * @param $id
     * @return BasketItemBase|null
     * @throws Main\ArgumentNullException
     */
    public function findItemById($id)
    {
    }
    /**
     * @return int|null|string
     * @throws Main\ArgumentNullException
     */
    public function getBasketCode()
    {
    }
    /**
     * @param BasketItemCollection $basketItemCollection
     * @param $moduleId
     * @param $productId
     * @param null $basketCode
     * @return BasketItemBase
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    public static function create(\Bitrix\Sale\BasketItemCollection $basketItemCollection, $moduleId, $productId, $basketCode = null)
    {
    }
    /**
     * @return string
     */
    protected static function generateXmlId()
    {
    }
    /**
     * @param array $fields
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private static function createBasketItemObject(array $fields = [])
    {
    }
    /**
     * @return array
     */
    public static function getSettableFields()
    {
    }
    /**
     * @return array|null
     */
    public static function getSettableFieldsMap()
    {
    }
    /**
     * @return array
     */
    public static function getCalculatedFields()
    {
    }
    /**
     * @return array
     */
    public static function getAvailableFields()
    {
    }
    /**
     * @return array
     */
    public static function getCustomizableFields() : array
    {
    }
    /**
     * @return array
     */
    protected static function getMeaningfulFields()
    {
    }
    /**
     * BasketItemBase constructor.
     * @param array $fields
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function __construct(array $fields = [])
    {
    }
    /**
     * @return Result
     */
    protected function checkBeforeDelete()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public function delete()
    {
    }
    /**
     * @param string $name						Field name.
     * @param string|int|float $value			Field value.
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function setField($name, $value)
    {
    }
    /**
     * @internal
     *
     * @param $name
     * @param $value
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function setFieldNoDemand($name, $value)
    {
    }
    /**
     * @param $name
     * @return float|string|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getField($name)
    {
    }
    /**
     * @param array $values
     * @return array
     */
    protected function onBeforeSetFields(array $values)
    {
    }
    /**
     * @param array $fields
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws \Exception
     */
    public function setFields(array $fields)
    {
    }
    /**
     * @return ProviderBase|null
     * @throws Main\ArgumentNullException
     */
    public function getProviderName()
    {
    }
    /**
     * @return null|string
     * @throws Main\ArgumentNullException
     */
    public function getCallbackFunction()
    {
    }
    /**
     * @return bool|mixed|null
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     */
    public function getProviderEntity()
    {
    }
    /**
     * @return ProviderBase|null|string
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     */
    public function getProvider()
    {
    }
    /**
     * @param string $name
     * @param mixed $oldValue
     * @param mixed $value
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     * @throws \Exception
     */
    protected function onFieldModify($name, $oldValue, $value)
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     */
    public function isVatInPrice()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getVat()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getInitialPrice()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getBasePriceWithVat()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getPriceWithVat()
    {
    }
    /**
     * @return float|int
     * @throws Main\ArgumentNullException
     */
    public function getFinalPrice()
    {
    }
    /**
     * @param string $field			Field name.
     * @return bool
     */
    protected function isCalculatedField($field)
    {
    }
    /**
     * @return float|null|string
     * @throws Main\ArgumentNullException
     */
    public function getProductId()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getPrice()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getBasePrice()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getDiscountPrice()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isCustomPrice()
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getCurrency()
    {
    }
    /**
     * @return float
     * @throws Main\ArgumentNullException
     */
    public function getQuantity()
    {
    }
    /**
     * @return float|null|string
     * @throws Main\ArgumentNullException
     */
    public function getWeight()
    {
    }
    /**
     * @return float|null|string
     * @throws Main\ArgumentNullException
     */
    public function getVatRate()
    {
    }
    /**
     * @return float|null|string
     * @throws Main\ArgumentNullException
     */
    public function getFUserId()
    {
    }
    /**
     * @param $id
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function setOrderId($id)
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     */
    public function isBarcodeMulti()
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function canBuy() : bool
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isDelay() : bool
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isSupportedMarkingCode() : bool
    {
    }
    /**
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getMarkingCodeGroup() : string
    {
    }
    /**
     * @return BasketPropertiesCollectionBase|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function getPropertyCollection()
    {
    }
    /**
     * @return bool
     */
    public function isExistPropertyCollection()
    {
    }
    /**
     * @internal
     * @param BasketPropertiesCollectionBase $propertyCollection
     */
    public function setPropertyCollection(\Bitrix\Sale\BasketPropertiesCollectionBase $propertyCollection)
    {
    }
    /**
     * @param $value
     * @param bool $custom
     * @return Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    public function setPrice($value, $custom = false)
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getRoundFields()
    {
    }
    /**
     * @param array $values
     * @throws Main\ArgumentOutOfRangeException
     */
    public function initFields(array $values)
    {
    }
    /**
     * @internal
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws \Exception
     */
    public function save()
    {
    }
    /**
     * @return BasketBase
     */
    public function getBasket()
    {
    }
    /**
     * @return void
     */
    private function checkCallingContext()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    private function saveProperties()
    {
    }
    /**
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectNotFoundException
     * @return void
     */
    protected function onBeforeSave()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function add()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     */
    protected function update()
    {
    }
    /**
     * @return void
     */
    protected function callEventOnBasketItemEntitySaved()
    {
    }
    /**
     * @param $isNewEntity
     * @return Result
     */
    protected function callEventSaleBasketItemBeforeSaved($isNewEntity)
    {
    }
    /**
     * @param $isNewEntity
     * @return Result
     */
    protected function callEventSaleBasketItemSaved($isNewEntity)
    {
    }
    /**
     * @param array $fields
     * @return Main\Entity\AddResult
     */
    protected abstract function addInternal(array $fields);
    /**
     * @param $primary
     * @param array $fields
     * @return Main\Entity\UpdateResult
     */
    protected abstract function updateInternal($primary, array $fields);
    /**
     * @return bool
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public function isChanged()
    {
    }
    /**
     * @param BasketItemCollection $basketItemCollection
     * @param $data
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function load(\Bitrix\Sale\BasketItemCollection $basketItemCollection, $data)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectNotFoundException
     */
    public function verify()
    {
    }
    /**
     * @return float
     */
    public abstract function getReservedQuantity();
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function isCustom()
    {
    }
    /**
     * @deprecated
     *
     * @return float
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getDefaultPrice()
    {
    }
    /**
     * @return null|string
     * @internal
     *
     */
    public static function getEntityEventName()
    {
    }
}