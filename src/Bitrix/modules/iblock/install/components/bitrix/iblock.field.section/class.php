<?php

/**
 * Class SectionUfComponent
 *
 * @todo Now autoloader not load ElementUfComponent
 */
class SectionUfComponent extends \Bitrix\Main\Component\BaseUfComponent
{
    protected static $iblockIncluded = \null;
    public function __construct($component = \null)
    {
    }
    /**
     * @return bool
     */
    public function isIblockIncluded() : bool
    {
    }
    protected static function getUserTypeId() : string
    {
    }
}