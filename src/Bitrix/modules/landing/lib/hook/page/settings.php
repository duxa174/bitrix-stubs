<?php

namespace Bitrix\Landing\Hook\Page;

class Settings extends \Bitrix\Landing\Hook\Page
{
    /**
     * Block's code for get params.
     */
    const SOURCE_BLOCK = 'store.catalog.list';
    /**
     * Component's code for get params.
     */
    const SOURCE_COMPONENT = 'bitrix:catalog.section';
    /**
     * Default values for settings' code.
     * @var array
     */
    protected static $defValues = array('SECTION_ID' => '', 'HIDE_NOT_AVAILABLE' => 'L', 'HIDE_NOT_AVAILABLE_OFFERS' => 'N', 'PRODUCT_SUBSCRIPTION' => 'Y', 'USE_PRODUCT_QUANTITY' => 'Y', 'DISPLAY_COMPARE' => 'Y', 'PRICE_CODE' => ['BASE'], 'CURRENCY_ID' => '', 'PRICE_VAT_INCLUDE' => 'Y', 'SHOW_OLD_PRICE' => 'Y', 'SHOW_DISCOUNT_PERCENT' => 'Y', 'USE_PRICE_COUNT' => 'N', 'SHOW_PRICE_COUNT' => 1, 'USE_ENHANCED_ECOMMERCE' => 'Y', 'DATA_LAYER_NAME' => 'dataLayer', 'BRAND_PROPERTY' => 'BRAND_REF', 'CART_POSITION' => 'BL');
    /**
     * Returns transform $defValues.
     * @return array
     */
    protected static function getDefaultValues() : array
    {
    }
    /**
     * Build local allowed codes array.
     * @return array
     */
    protected static function getCodesValues()
    {
    }
    /**
     * Return Field by component's param's type.
     * @param string $type Type.
     * @param string $code Field code.
     * @param array $params Additional params.
     * @return Field
     */
    protected static function getFieldByType($type, $code, $params = array())
    {
    }
    /**
     * Get catalog's components params.
     * @return array
     */
    protected static function getComponentsParams()
    {
    }
    /**
     * Get allowed param's code.
     * @param bool $linear Linear
     * @return array
     */
    public static function getCodes($linear = false)
    {
    }
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Enable or not the hook - this is only for system settings.
     * @return boolean
     */
    public function enabled()
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec()
    {
    }
    /**
     * Get actual settings data for site.
     * @param int $id Site id.
     * @return array
     */
    public static function getDataForSite($id = null)
    {
    }
}