<?php

class CBitrixSocialnetworkBlogPostShareMailComponent extends \CBitrixComponent
{
    const E_BLOG_MODULE_NOT_INSTALLED = 10001;
    const E_POST_NOT_FOUND = 10002;
    const E_SOCIALNETWORK_MODULE_NOT_INSTALLED = 10003;
    /**
     * Variable contains posts data
     *
     * @var array[] array
     */
    protected $postId = \false;
    protected $authorIdList = array();
    /**
     * Function implements all the life cycle of the component
     * @return void
     */
    public function executeComponent()
    {
    }
    public function __construct($component = \null)
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Main\SystemException
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    public function onPrepareComponentParams($arParams)
    {
    }
    private function obtainDataPost()
    {
    }
    private function obtainDataComments()
    {
    }
    private function obtainDataAuthors()
    {
    }
    private function obtainDataDestinations()
    {
    }
    private function obtainPostUrl()
    {
    }
}