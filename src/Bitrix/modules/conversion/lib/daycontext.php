<?php

namespace Bitrix\Conversion;

final class DayContext extends \Bitrix\Conversion\Internals\BaseContext
{
    /**
     * Add value to counter. If counter not exists set counter to value.
     *
     * @param Date $day Counter date.
     * @param string $name Counter name.
     * @param int|float $value Number to add.
     * @return void
     */
    public function addCounter($day, $name, $value = null)
    {
    }
    /**
     * Add value to counter (once a day per person). If counter not exists set counter to value.
     *
     * @param string $name Counter name.
     * @param int|float $value Number to add.
     * @return void
     */
    public function addDayCounter($name, $value)
    {
    }
    /**
     * Add currency value to counter. If counter not exists set counter to value.
     *
     * @param string $name Counter name.
     * @param int|float|string $value Numeric value.
     * @param string $currency Currency code (eg: RUB).
     * @return void
     */
    public function addCurrencyCounter($name, $value, $currency)
    {
    }
    /**
     * Attach entity item to context.
     *
     * @param string $entity Entity type.
     * @param string|int $item Entity item ID.
     * @throws ArgumentTypeException
     * @return void
     */
    public function attachEntityItem($entity, $item)
    {
    }
    /**
     * Get context of attached entity item.
     *
     * @param string $entity Entity type.
     * @param string|int $item Entity item ID.
     * @return self
     */
    public static function getEntityItemInstance($entity, $item)
    {
    }
    /**
     * Returns context for given Site
     *
     * @param string $siteId Site ID.
     * @return self
     */
    public static function getSiteInstance($siteId)
    {
    }
    /** @var self $instance */
    private static $instance;
    private static $session;
    /**
     * Get day context singleton instance.
     *
     * @return self
     */
    public static function getInstance()
    {
    }
    /** @internal */
    private function setCookie()
    {
    }
    /** @internal */
    public static function saveInstance()
    {
    }
    /** @internal */
    public static function getVarName()
    {
    }
    /** @internal */
    public static function getSiteId()
    {
    }
}