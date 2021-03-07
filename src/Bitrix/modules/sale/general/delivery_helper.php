<?php

/**
 * CSaleDeliveryHelper
 * Make some routines for delivery handlers
 */
class CSaleDeliveryHelper
{
    /**
     * getRegionsList
     * @return array regions (locations) list
     */
    public static function getRegionsList($countryId = 0, $bFlip = \false)
    {
    }
    public static function getDeliverySIDAndProfile($deliveryId)
    {
    }
    public static function getConfValue($arField)
    {
    }
    public static function getMaxDimensions($arDim1, $arDim2)
    {
    }
    /**
     * Divides order items to packages.
     * @link http://en.wikipedia.org/wiki/Bin_packing_problem Bin packing problem	 *
     * @param array $arItems Array of order's good's demensions
     * 										array(
     * 											array("WIDTH"=>100, "HEIGHT"=>95, "LENGTH"=>80),
     * 											array("WIDTH"=>150, "HEIGHT"=>15, "LENGTH"=>800),
     * 											...
     * 										)	 *
     * @param array $arPacks array(
     * 							array("425", "265", "380")
     *							);
     * @param int max weight
     * @param float $reservedSpace
     * @return array pack params
     */
    public static function getRequiredPacks(&$arItems, $arPacks, $maxWeight, $reservedSpace = 0.15)
    {
    }
    public static function makeBoxConfig($boxId, $arBox, $group, &$arConfig)
    {
    }
    public static function getBoxesFromConfig($profile, &$arConfig)
    {
    }
    public static function calcItemVolume($item)
    {
    }
    public static function getFormatError($value, $formatName, $name)
    {
    }
    public static function execHandlerAction($orderId, $actionId)
    {
    }
}