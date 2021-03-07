<?php

namespace Bitrix\Conversion\Internals;

/** @internal */
class BaseContext
{
    const EMPTY_CONTEXT_ID = 0;
    // Context with no attributes.
    protected $id = null;
    protected $attributes = array();
    /** Add value to counter. If counter not exists set counter to value. Save to database.
     * @param Date      $day   - counter date
     * @param string    $name  - counter name
     * @param int|float $value - number to add
     * @throws ArgumentTypeException
     * @throws SystemException
     */
    public function addCounter($day, $name, $value = null)
    {
    }
    /** Set attribute with value.
     * @param string                $name  - attribute name
     * @param string|int|float|null $value - attribute value
     * @throws ArgumentTypeException
     * @throws SystemException
     */
    public function setAttribute($name, $value = null)
    {
    }
    /** Save context & attributes to database */
    protected function save()
    {
    }
    private static function getSnapshot(array $attributes)
    {
    }
}