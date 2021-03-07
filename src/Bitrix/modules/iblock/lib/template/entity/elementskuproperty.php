<?php

namespace Bitrix\Iblock\Template\Entity;

class ElementSkuProperty extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $ids = null;
    protected $iblockId = 0;
    protected $properties = array();
    /**
     * @param array|mixed $ids Array of iblock element identifiers.
     */
    public function __construct($ids)
    {
    }
    /**
     * Set the iblock of the elements.
     *
     * @param integer $iblockId Iblock identifier.
     *
     * @return void
     */
    public function setIblockId($iblockId)
    {
    }
    /**
     * Loads values from database.
     * Returns true on success.
     *
     * @return boolean
     */
    protected function loadFromDatabase()
    {
    }
}