<?php

namespace Bitrix\Report\VisualConstructor\Internal\Manager;

class AnalyticBoardManager extends \Bitrix\Report\VisualConstructor\Internal\Manager\Base
{
    private static $analyticBoardList = [];
    private static $indices = array('boardKey' => array(), 'boardBatchKey' => array());
    /**
     * @return AnalyticBoard[]
     */
    public function getAnalyticBoardsList()
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