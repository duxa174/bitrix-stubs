<?php

namespace Bitrix\Conversion;

final class ReportContext extends \Bitrix\Conversion\Internals\BaseContext
{
    public function unsetAttribute($name, $value = null)
    {
    }
    /** @deprecated */
    private function getCountersDeprecated(array $filter = null, array $steps = null)
    {
    }
    /** @deprecated */
    public function getRatesDeprecated(array $rateTypes, array $filter = null, array $steps = null)
    {
    }
    private static function getRatesCommonDeprecated(array $rateTypes, array $counters, array $steps = null)
    {
    }
    // splits
    private function getSplitCountersDeprecated(array $splits, array $filter = null, array $steps = null)
    {
    }
    private static function subtructCounters(array &$one, array $two, array $steps = null)
    {
    }
    private static function subtructCountersOnce(array &$one, array $two)
    {
    }
    /** @deprecated */
    public function getSplitRatesDeprecated(array $splits, array $rateTypes, array $filter = null, array $steps = null)
    {
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    private static function setAttributeFilter(\Bitrix\Main\Entity\Query $query, $field, $name, $value = null)
    {
    }
    public function getCounters(array $parameters = array())
    {
    }
    public function getRates(array $rateTypes, array $parameters = array())
    {
    }
    private static function getRatesRecursive(array $rateTypes, array $counters, $level)
    {
    }
}