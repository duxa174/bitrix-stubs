<?php

namespace Bitrix\Iblock\Template\Entity;

class SectionPath extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $dbPath = null;
    /**
     * @param integer $id Iblock section identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Loads values from database.
     * Returns true on success.
     *
     * @return boolean
     */
    public function loadFromDatabase()
    {
    }
    /**
     * Helper method for loading user defined properties from DB.
     *
     * @return void
     */
    protected function loadProperty()
    {
    }
}