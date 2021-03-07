<?php

namespace Bitrix\Iblock\Template\Entity;

class SectionProperty extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $iblockId = 0;
    /**
     * @param integer $id Iblock section identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Set the iblock of the section.
     *
     * @param integer $iblockId Iblock identifier.
     *
     * @return void
     */
    public function setIblockId($iblockId)
    {
    }
    /**
     * Used to initialize entity fields from some external source.
     *
     * @param array $fields Entity fields.
     *
     * @return void
     */
    public function setFields(array $fields)
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