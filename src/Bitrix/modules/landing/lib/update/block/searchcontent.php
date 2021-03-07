<?php

namespace Bitrix\Landing\Update\Block;

class SearchContent extends \Bitrix\Main\Update\Stepper
{
    /**
     * Option code for store
     */
    const OPTION_CODE = 'update_block_search_content';
    /**
     * Module id for parent class.
     * @var string
     */
    protected static $moduleId = 'landing';
    /**
     * One step of converter.
     * @param array &$result Result array.
     * @return bool
     */
    public function execute(array &$result)
    {
    }
}