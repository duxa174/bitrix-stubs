<?php

namespace Bitrix\Sale;

class DiscountCouponsManagerBase
{
    const MODE_CLIENT = 0x1;
    const MODE_MANAGER = 0x2;
    const MODE_ORDER = 0x4;
    const MODE_SYSTEM = 0x8;
    const MODE_EXTERNAL = 0x10;
    const STATUS_NOT_FOUND = 0x1;
    const STATUS_ENTERED = 0x2;
    const STATUS_APPLYED = 0x4;
    const STATUS_NOT_APPLYED = 0x8;
    const STATUS_FREEZE = 0x10;
    const COUPON_CHECK_OK = 0x0;
    const COUPON_CHECK_NOT_FOUND = 0x1;
    const COUPON_CHECK_NO_ACTIVE = 0x2;
    const COUPON_CHECK_RANGE_ACTIVE_FROM = 0x4;
    const COUPON_CHECK_RANGE_ACTIVE_TO = 0x8;
    const COUPON_CHECK_NO_ACTIVE_DISCOUNT = 0x10;
    const COUPON_CHECK_RANGE_ACTIVE_FROM_DISCOUNT = 0x20;
    const COUPON_CHECK_RANGE_ACTIVE_TO_DISCOUNT = 0x40;
    const COUPON_CHECK_BAD_USER_ID = 0x80;
    const COUPON_CHECK_ALREADY_MAX_USED = 0x100;
    const COUPON_CHECK_UNKNOWN_TYPE = 0x200;
    const COUPON_CHECK_CORRUPT_DATA = 0x400;
    const COUPON_CHECK_NOT_APPLIED = 0x800;
    const COUPON_MODE_SIMPLE = 0x1;
    const COUPON_MODE_FULL = 0x2;
    const EVENT_ON_BUILD_COUPON_PROVIDES = 'onBuildCouponProviders';
    const EVENT_ON_SAVE_APPLIED_COUPONS = 'onManagerSaveApplied';
    const EVENT_ON_COUPON_ADD = 'onManagerCouponAdd';
    const EVENT_ON_COUPON_DELETE = 'onManagerCouponDelete';
    const EVENT_ON_COUPON_APPLY_PRODUCT = 'onManagerCouponApplyByProduct';
    const EVENT_ON_COUPON_APPLY = 'onManagerCouponApply';
    const STORAGE_MANAGER_COUPONS = 'CATALOG_MANAGE_COUPONS';
    const STORAGE_CLIENT_COUPONS = 'CATALOG_USER_COUPONS';
    protected static $coupons = array();
    protected static $init = false;
    protected static $useMode = self::MODE_CLIENT;
    protected static $errors = array();
    protected static $onlySaleDiscount = null;
    protected static $userId = null;
    protected static $couponProviders = array();
    protected static $couponTypes = array();
    protected static $couponIndex = 0;
    protected static $orderId = null;
    protected static $allowedSave = false;
    protected static $checkActivity = true;
    protected static $useOrderCoupons = true;
    protected static $clearFields = array('STATUS', 'CHECK_CODE', 'DISCOUNT_NAME', 'DISCOUNT_ACTIVE', 'SAVED', 'BASKET', 'DELIVERY');
    protected static $timeFields = array('DISCOUNT_ACTIVE_FROM', 'DISCOUNT_ACTIVE_TO', 'ACTIVE_FROM', 'ACTIVE_TO');
    protected static $allowCouponStorage = 0;
    /**
     * @throws Main\NotImplementedException
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * Init use mode and user id.
     *
     * @param int $mode			Discount manager mode.
     * @param array $params		Initial params (userId, orderId, oldUserId)
     * 		keys are case sensitive:
     * 			<ul>
     * 			<li>int userId		Order owner (for MODE_MANAGER or MODE_ORDER only)
     * 			<li>int orderId		Edit order id (for MODE_ORDER only(!))
     * 			<li>int oldUserId	Old order owner for MODE_MANAGER or MODE_ORDER only)
     * 			</ul>.
     * @return void
     */
    public static function initUseMode($mode = self::MODE_CLIENT, $params = array())
    {
    }
    /**
     * Returns use mode.
     *
     * @return int
     */
    public static function getUseMode()
    {
    }
    /**
     * Verifies that the client mode being used.
     *
     * @return bool
     */
    public static function usedByClient()
    {
    }
    /**
     * Verifies that the manager mode being used.
     *
     * @return bool
     */
    public static function usedByManager()
    {
    }
    /**
     * Verifies that the external order mode being used.
     *
     * @return bool
     */
    public static function usedByExternal()
    {
    }
    /**
     * Returns user id.
     *
     * @return null|int
     */
    public static function getUserId()
    {
    }
    /**
     * Returns order id, if current use mode self::MODE_ORDER.
     *
     * @return null|int
     */
    public static function getOrderId()
    {
    }
    /**
     * Returns a sign of success.
     *
     * @return bool
     */
    public static function isSuccess()
    {
    }
    /**
     * Returns error list.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Clear errors list.
     *
     * @return void
     */
    public static function clearErrors()
    {
    }
    /**
     * Returns coupon status list.
     *
     * @param bool $extendedMode	Get status Ids or Ids with description.
     * @return array
     */
    public static function getStatusList($extendedMode = false)
    {
    }
    /**
     * Returns check code list.
     *
     * @param bool $extendedMode	Get codes or codes with description.
     * @return array
     */
    public static function getCheckCodeList($extendedMode = false)
    {
    }
    /**
     * Returns description of check code.
     * @param int $code Code value.
     *
     * @return string|null
     */
    public static function getCheckCodeMessage($code)
    {
    }
    /**
     * Set use ordered coupons for apply.
     *
     * @param bool $state		Use state.
     * @return void
     */
    public static function useSavedCouponsForApply($state)
    {
    }
    /**
     * Returns use ordered coupons for apply.
     *
     * @return bool
     */
    public static function isUsedOrderCouponsForApply()
    {
    }
    /**
     * Enable get coupons for calculate discounts.
     *
     * @return void
     */
    public static function unFreezeCouponStorage()
    {
    }
    /**
     * Disable get coupons for calculate discounts.
     *
     * @return void
     */
    public static function freezeCouponStorage()
    {
    }
    /**
     * Returns true, if disallow get coupons for calculate discounts.
     *
     * @return bool
     */
    public static function isFrozenCouponStorage()
    {
    }
    /**
     * Initialization coupon manager.
     *
     * @param int $mode				Discount manager mode.
     * @param array $params			Initial params (userId, orderId, oldUserId)
     * 		keys are case sensitive:
     * 			<ul>
     * 			<li>int userId		Order owner (for MODE_MANAGER or MODE_ORDER only)
     * 			<li>int orderId		Edit order id (for MODE_ORDER only(!))
     * 			<li>int oldUserId	Old order owner for MODE_MANAGER or MODE_ORDER only)
     * 			</ul>.
     * @param bool $clearStorage	Clear coupon session storage.
     * @return void
     */
    public static function init($mode = self::MODE_CLIENT, $params = array(), $clearStorage = false)
    {
    }
    /**
     * Unconditional reinitialization coupon manager.
     *
     * @param int $mode				Discount manager mode.
     * @param array $params			Initial params (userId, orderId, oldUserId)
     * 		keys are case sensitive:
     * 			<ul>
     * 			<li>int userId		Order owner (for MODE_MANAGER or MODE_ORDER only)
     * 			<li>int orderId		Edit order id (for MODE_ORDER only(!))
     * 			<li>int oldUserId	Old order owner for MODE_MANAGER or MODE_ORDER only)
     * 			</ul>.
     * @param bool $clearStorage	Clear coupon session storage.
     * @return void
     */
    public static function reInit($mode = self::MODE_CLIENT, $params = array(), $clearStorage = false)
    {
    }
    /**
     * Returns true, if coupons were are entered.
     *
     * @return bool
     */
    public static function isEntered()
    {
    }
    /**
     * Add coupon in manager.
     *
     * @param string $coupon	Added coupon.
     * @return bool
     */
    public static function add($coupon)
    {
    }
    /**
     * Delete coupon from manager.
     *
     * @param string $coupon	Deleted coupon.
     * @return bool
     */
    public static function delete($coupon)
    {
    }
    /**
     * Clear coupon storage.
     *
     * @param bool $clearStorage		Clear coupon session storage.
     * @return bool
     */
    public static function clear($clearStorage = false)
    {
    }
    /**
     * Clear coupon storage for order.
     *
     * @param int $order			Order id.
     * @return bool
     */
    public static function clearByOrder($order)
    {
    }
    /**
     * Change coupons owner in manager or order mode.
     *
     * @param int $oldUser				Old user id.
     * @return void
     */
    public static function migrateStorage($oldUser)
    {
    }
    /**
     * Load coupons for existing order.
     *
     * @return void
     */
    public static function load()
    {
    }
    /**
     * Get coupons list.
     *
     * @param bool $extMode			Get full information or coupons only.
     * @param array $filter			Coupons filter.
     * @param bool $show			Get for show or apply.
     * @param bool $final			Change status ENTERED to NOT_APPLIED.
     * @return array|bool
     */
    public static function get($extMode = true, $filter = array(), $show = false, $final = false)
    {
    }
    /**
     * Get coupons list for apply.
     *
     * @param array $filter					Coupons filter.
     * @param array $product				Product description.
     * @param bool $uniqueDiscount			Get one coupon for discount.
     * @return array|bool
     */
    public static function getForApply($filter, $product = array(), $uniqueDiscount = false)
    {
    }
    /**
     * Returns coupons for current order.
     *
     * @param bool $extMode					Get full information or coupons only.
     * @param array $filter					Coupons filter.
     * @return array
     */
    public static function getOrderedCoupons($extMode = true, $filter = array())
    {
    }
    /**
     * Verifies the current status of new applied coupons. Used before order save.
     *
     * @return Result
     */
    public static function verifyApplied()
    {
    }
    /**
     * Save applied coupons.
     *
     * @return void
     */
    public static function saveApplied()
    {
    }
    /**
     * Set applied information for product.
     *
     * @param array $product		Product description.
     * @param array $couponsList	Coupons for product.
     * @param bool $oldMode			Compatibility mode with old custom providers.
     * @return bool
     */
    public static function setApplyByProduct($product, $couponsList, $oldMode = false)
    {
    }
    /**
     * Set applied information for basket.
     *
     * @param string $coupon		Coupon.
     * @param array $data				Apply data (basket, delivery).
     * @return bool
     */
    public static function setApply($coupon, $data)
    {
    }
    /**
     * Clear applied information for product.
     *
     * @param array $product		Product description.
     * @return bool
     */
    public static function deleteApplyByProduct($product)
    {
    }
    /**
     * Change status coupons for save.
     *
     * @return void
     */
    public static function finalApply()
    {
    }
    /**
     * Clear applied data for coupon.
     *
     * @param string $coupon			Coupon.
     * @return bool
     */
    public static function clearApplyCoupon($coupon)
    {
    }
    /**
     * Clear applied data for coupons.
     *
     * @param bool $all					Clear for coupons or not saved.
     * @return bool
     */
    public static function clearApply($all = true)
    {
    }
    /**
     * Returns information about coupon.
     *
     * @param string $coupon			Coupon for search.
     * @param bool $checkCoupon			Check coupon data.
     * @return array|false
     */
    public static function getData($coupon, $checkCoupon = true)
    {
    }
    /**
     * Checks if a coupon exists.
     *
     * @param string $coupon		Coupon for check.
     * @return array|bool
     */
    public static function isExist($coupon)
    {
    }
    /**
     * Returns entered coupon data.
     *
     * @param string $coupon			Coupon code.
     * @param bool $clearData			Clear data for save order coupon.
     * @return bool|array
     */
    public static function getEnteredCoupon($coupon, $clearData = false)
    {
    }
    /**
     * Clear coupons storage with logout from public.
     *
     * @return void
     */
    public static function logout()
    {
    }
    /**
     * Returns true if the coupon was used in the order and saved.
     *
     * @param array $coupon			Coupon data.
     * @return bool
     */
    public static function filterOrderCoupons($coupon)
    {
    }
    /**
     * Reload discount coupons providers.
     * @internal
     *
     * @param bool $mode		true, if use only sale discounts.
     * @return void
     */
    public static function setUseOnlySaleDiscounts($mode)
    {
    }
    /**
     * Checks the basic coupon fields.
     *
     * @param array &$data			Coupon data.
     * @param int $checkCode		Start status.
     * @return int
     */
    protected static function checkBaseData(&$data, $checkCode = self::COUPON_CHECK_OK)
    {
    }
    /**
     * Checks the extended coupon fields.
     *
     * @param array &$data			Coupon data.
     * @param int $mode				Coupon mode (full or simple).
     * @param int $checkCode		Start check status.
     * @param int $currentTimestamp		Current time.
     * @return int
     */
    protected static function checkFullData(&$data, $mode = self::COUPON_MODE_FULL, $checkCode = self::COUPON_CHECK_OK, $currentTimestamp)
    {
    }
    /**
     * Fill client information.
     *
     * @param array &$result			Coupon data.
     * @param array $existCoupon	User data.
     * @param int $checkCode		Checked result.
     * @return void
     */
    protected static function fillUserInfo(&$result, $existCoupon, $checkCode)
    {
    }
    /**
     * Get user by fuser id.
     *
     * @return void
     */
    protected static function initUserId()
    {
    }
    /**
     * Save current coupons to session storage.
     *
     * @return void
     */
    protected static function saveToStorage()
    {
    }
    /**
     * Clear applied coupons.
     *
     * @param array $result		Applied coupons.
     * @return void
     */
    protected static function eraseAppliedCoupons($result)
    {
    }
    /**
     * Create applied fields.
     *
     * @param array &$couponData	Coupon data.
     * @return void
     */
    protected static function createApplyFields(&$couponData)
    {
    }
    /**
     * Load coupon providers from modules.
     *
     * @return void
     */
    protected static function loadCouponProviders()
    {
    }
    /**
     * Initialization coupons providers.
     *
     * @return void
     */
    protected static function initUseDiscount()
    {
    }
    /**
     * Filter for remove unknown coupons.
     *
     * @param array $coupon		Coupon data.
     * @return bool
     */
    protected static function filterUnknownCoupons($coupon)
    {
    }
    /**
     * Filter for remove freeze coupons.
     *
     * @param array $coupon		Coupon data.
     * @return bool
     */
    protected static function filterFreezeCoupons($coupon)
    {
    }
    /**
     * Filter for remove freeze ordered coupons.
     *
     * @param array $coupon		Coupon data.
     * @return bool
     */
    protected static function filterFreezeOrderedCoupons($coupon)
    {
    }
    /**
     * Clear one row coupons.
     *
     * @param array $coupon		Coupon data.
     * @param string $hash		Product hash.
     * @return bool
     */
    protected static function filterOneRowCoupons($coupon, $hash)
    {
    }
    /**
     * Returns one coupon for one discount.
     *
     * @param array &$coupons		Coupons list.
     * @return void
     */
    protected static function filterUniqueDiscount(&$coupons)
    {
    }
    /**
     * Filter manager coupons list.
     *
     * @param array $filter			Filter for coupons.
     * @param bool $getId			Resturn Id or full data.
     * @return array
     */
    protected static function filterCoupons($filter, $getId = false)
    {
    }
    /**
     * Filter coupons list.
     *
     * @param array &$coupons		Coupons list.
     * @param array $filter			Coupon filter.
     * @return void
     */
    protected static function filterArrayCoupons(&$coupons, $filter)
    {
    }
    /**
     * Create product hash.
     *
     * @param array $product		Product description.
     * @return string
     */
    protected static function getProductHash($product)
    {
    }
    /**
     * Create catalog product hash for old custom providers.
     *
     * @param array $product		Product description.
     * @return string
     */
    protected static function getCatalogProductHash($product)
    {
    }
    /**
     * Fill coupon hints.
     *
     * @param array &$coupons			Coupons list.
     * @return void
     */
    protected static function fillCouponHints(&$coupons)
    {
    }
    /**
     * Set coupons list.
     *
     * @param array $couponsList			Coupons list.
     * @param bool $checkCoupons			Find coupons.
     * @return void
     */
    protected static function setCoupons($couponsList, $checkCoupons = true)
    {
    }
    /**
     * Clear order saved coupons.
     *
     * @internal
     * @param array $coupon		Coupon data.
     * @return bool
     */
    protected static function clearSavedCoupons($coupon)
    {
    }
    /**
     * Clear system data.
     *
     * @internal
     * @param array &$coupons			Coupons.
     * @return void
     */
    protected static function clearSystemData(&$coupons)
    {
    }
    /**
     * Convert old filter fields.
     *
     * @internal
     * @param array &$filter		Coupons filter.
     * @return void
     */
    protected static function convertOldFilterFields(array &$filter)
    {
    }
    /**
     * Returns empty coupon (default field values).
     *
     * @internal
     * @param string $coupon		Coupon code.
     * @return array
     */
    protected static function getEmptyCouponFields($coupon)
    {
    }
}