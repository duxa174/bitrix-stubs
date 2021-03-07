<?php

namespace Bitrix\Report\VisualConstructor\RuntimeProvider;

/**
 * @method View|null getFirstResult()
 * @method View[] getResults()
 * Class ViewProvider
 * @package Bitrix\Report\VisualConstructor\RuntimeProvider
 */
class ViewProvider extends \Bitrix\Report\VisualConstructor\RuntimeProvider\Base
{
    /**
     * @return array
     */
    protected function availableFilterKeys()
    {
    }
    /**
     * @return ViewManager
     */
    protected function getManagerInstance()
    {
    }
    /**
     * @return View[]
     */
    protected function getEntitiesList()
    {
    }
    /**
     * @return array
     */
    protected function getIndices()
    {
    }
    /**
     * @param string $viewKey View controller key.
     * @return View|null
     */
    public static function getViewByViewKey($viewKey)
    {
    }
}