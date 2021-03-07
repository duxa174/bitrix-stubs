<?php

namespace Bitrix\Iblock\Template\Entity;

class Iblock extends \Bitrix\Iblock\Template\Entity\Base
{
    protected $catalog = null;
    /**
     * @param integer $id Iblock identifier.
     */
    public function __construct($id)
    {
    }
    /**
     * Used to find entity for template processing.
     *
     * @param string $entity What to find.
     *
     * @return \Bitrix\Iblock\Template\Entity\Base
     */
    public function resolve($entity)
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