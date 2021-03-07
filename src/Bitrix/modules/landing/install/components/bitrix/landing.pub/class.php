<?php

class LandingPubComponent extends \LandingBaseComponent
{
    /**
     * Special page - robots.txt
     * @var boolean
     */
    protected $isRobotsTxt = \false;
    /**
     * Special page - sitemap.xml
     * @var boolean
     */
    protected $isSitemapXml = \false;
    /**
     * Is preview mode.
     * @var boolean
     */
    protected $isPreviewMode = \false;
    /**
     * SEF variables.
     * @var array
     */
    protected $sefVariables = array();
    /**
     * Dynamic filter id.
     * @var int
     */
    protected $dynamicFilterId = 0;
    /**
     * Dynamic element id.
     * @var int
     */
    protected $dynamicElementId = 0;
    /**
     * Current zone.
     * @var string
     */
    protected $zone = '';
    /**
     * Http status was send.
     * @var bool
     */
    protected $httpStatusSend = \false;
    /**
     * Current http status.
     * @var string
     */
    protected $currentHttpStatus = self::ERROR_STATUS_OK;
    /**
     * Main instance of current page.
     * @var array
     */
    protected static $landingMain = \null;
    /**
     * Gets main instance of current page.
     * @return array
     */
    public static function getMainInstance()
    {
    }
    /**
     * Get base domain of service by lang.
     * @return string
     */
    protected function getParentDomain()
    {
    }
    /**
     * Gets path for copyright link.
     * @param string $section Code of section.
     * @return string
     */
    protected function getCopyLinkPath($section = 'websites')
    {
    }
    /**
     * Get adv campaign code.
     * @param string $type Type of the link.
     * @return string
     */
    protected function getAdvCode($type = 'bitrix24_logo')
    {
    }
    /**
     * Build and gets link for different links in the copyright.
     * @param string $type Type of the link.
     * @param bool $addAdvCode Add or not adv code.
     * @return string
     */
    public function getRefLink($type, $addAdvCode = \true)
    {
    }
    /**
     * Send only first http status.
     * @param string $code Http status code.
     * @return void
     */
    protected function setHttpStatusOnce($code)
    {
    }
    /**
     * Clear status that http status was send.
     * @return void
     */
    protected function clearHttpStatus()
    {
    }
    /**
     * Returns current http status.
     * @return string
     */
    public function getCurrentHttpStatus() : string
    {
    }
    /**
     * Detect landing by path.
     * @return int|false Detected landing id or false.
     */
    protected function detectPage()
    {
    }
    /**
     * Get sitemap.xml content.
     * @param int $siteId Site Id.
     * @return string
     */
    protected function getSitemap($siteId)
    {
    }
    /**
     * Handler for localRedirect.
     * @return void
     */
    protected function onBeforeLocalRedirect()
    {
    }
    /**
     * On search title.
     * @return void
     */
    protected function onSearchGetURL()
    {
    }
    /**
     * Redefined basket item before save.
     * @see Also called from landing/install/blocks/bitrix/store.cart/ajax.php:59
     * @return void
     */
    public function onSaleBasketItemBeforeSaved()
    {
    }
    /**
     * Register callback for replace url in all letter.
     * @param int $siteId Site id for get url.
     * @return void
     */
    public static function replaceUrlInLetter($siteId)
    {
    }
    /**
     * For replace some fields in sending letters.
     * @return void
     */
    protected function onBeforeEventSend()
    {
    }
    /**
     * Handler on epilog finish.
     * @return void
     */
    protected function onEpilog() : void
    {
    }
    /**
     * Handler on view block.
     * @return void
     */
    protected function onBlockPublicView() : void
    {
    }
    /**
     * Fill params urls with landing data.
     * @param Landing $landing Landing instance.
     * @return void
     */
    protected function replaceParamsUrls(\Bitrix\Landing\Landing $landing)
    {
    }
    /**
     * Sets canonical url.
     * @param Landing $landing Landing instance.
     * @return void
     */
    public function setCanonical(\Bitrix\Landing\Landing $landing)
    {
    }
    /**
     * Returns force content for robots.txt
     * @return string
     */
    protected function getForceRobots()
    {
    }
    /**
     * Sends request for getting access to current site.
     * @return array
     */
    protected function actionAskAccess() : array
    {
    }
    /**
     * Checks if this site is binding to socialnet opened group.
     * @param int $siteId Site id.
     * @return bool
     */
    protected function isOpenedGroupSite(int $siteId) : bool
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
}