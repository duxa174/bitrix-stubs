<?php

namespace Bitrix\Rest\Url;

class DevOps extends \Bitrix\Rest\Url\Base
{
    protected $directory = 'devops/';
    protected $pages = ['index' => '', 'statistic' => 'statistic/', 'list' => 'list/', 'section' => 'section/#SECTION_CODE#/', 'edit' => 'edit/#ELEMENT_CODE#/#ID#/', 'iframe' => 'iframe/'];
    public function getIndexUrl()
    {
    }
    public function getStatisticUrl()
    {
    }
    public function getListUrl()
    {
    }
    public function getIframeUrl($query = null)
    {
    }
    public function getIntegrationSectionUrl($code = null)
    {
    }
    public function getIntegrationEditUrl($id = null, $elementCode = null)
    {
    }
}