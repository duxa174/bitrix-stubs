<?php

namespace Bitrix\Report\VisualConstructor\Internal\Manager;

/**
 * Manager for default boards, collect all default boards, an provide instruments to work with them
 * @package Bitrix\Report\VisualConstructor\Internal\Manager
 */
class DefaultBoardManager extends \Bitrix\Report\VisualConstructor\Internal\Manager\Base
{
    private static $defaultBoardsList;
    private static $indices = array('boardKey' => array());
    /**
     * @return Dashboard[]
     */
    public function getDefaultBoardsList()
    {
    }
    /**
     * @return array
     */
    public function getIndices()
    {
    }
    /**
     * @return string
     */
    protected function getEventTypeKey()
    {
    }
    /**
     * @return mixed
     */
    public function call()
    {
    }
}