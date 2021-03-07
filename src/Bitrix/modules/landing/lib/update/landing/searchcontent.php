<?php

namespace Bitrix\Landing\Update\Landing;

/**
 * Class SearchContent
 * Index hook data.
 * @package Bitrix\Landing\Update\Landing
 */
class SearchContent extends \Bitrix\Main\Update\Stepper
{
    /**
     * Option code for store
     */
    const OPTION_CODE = 'update_landing_search_content';
    const OPTION_CODE_SCOPES = 'update_landing_search_content_scopes';
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