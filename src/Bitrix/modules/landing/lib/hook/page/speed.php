<?php

namespace Bitrix\Landing\Hook\Page;

class Speed extends \Bitrix\Landing\Hook\Page
{
    const LAZYLOAD_EXTENSION_NAME = 'landing_lazyload';
    /**
     * Map of the field.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Hook title.
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * Add data to serialize array
     * @param $field - name of hook field
     * @param $data - array of data
     * @return string
     */
    public function addData($field, $data)
    {
    }
    /**
     * Enable or not the hook.
     * @return boolean
     */
    public function enabled()
    {
    }
    /**
     * Exec hook.
     * @return void
     */
    public function exec() : void
    {
    }
    protected function disableWebpack() : void
    {
    }
    protected function execWebpack() : void
    {
    }
    protected function execLazyLoad() : void
    {
    }
}