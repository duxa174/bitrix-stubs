<?php

namespace Bitrix\Rest\Marketplace;

class Transport
{
    const SERVICE_URL = REST_MARKETPLACE_URL;
    const SOCKET_TIMEOUT = 10;
    const STREAM_TIMEOUT = 10;
    const METHOD_GET_LAST = 'get_last';
    const METHOD_GET_DEV = 'get_dev';
    const METHOD_GET_BEST = 'get_best';
    const METHOD_GET_SALE_OUT = 'get_sale_out';
    const METHOD_GET_BUY = 'get_buy';
    const METHOD_GET_UPDATES = 'get_updates';
    const METHOD_GET_CATEGORIES = 'get_categories';
    const METHOD_GET_CATEGORY = 'get_category';
    const METHOD_GET_TAG = 'get_tag';
    const METHOD_GET_APP = 'get_app';
    const METHOD_GET_APP_PUBLIC = 'get_app_public';
    const METHOD_GET_INSTALL = 'get_app_install';
    const METHOD_SET_INSTALL = 'is_installed';
    const METHOD_SEARCH_APP = 'search_app';
    const METHOD_FILTER_APP = 'search_app_adv';
    protected static $instance = null;
    /**
     * Resturns class instance.
     *
     * @return \Bitrix\Rest\Marketplace\Transport
     */
    public static function instance()
    {
    }
    public function __construct()
    {
    }
    public function call($method, $fields = array())
    {
    }
    public function batch($actions)
    {
    }
    protected function prepareQuery($method, $fields)
    {
    }
    protected function prepareAnswer($response)
    {
    }
}