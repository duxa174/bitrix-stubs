<?php

class LandingViewComponent extends \LandingBaseComponent
{
    /**
     * Total this type sites count.
     * @deprecated since 19.0.0
     * @var int
     */
    protected $sitesCount;
    /**
     * Total pages count in current site.
     * @deprecated since 19.0.0
     * @var int
     */
    protected $pagesCount;
    /**
     * Just redirect to the landing preview page.
     * @param int $id Landing id.
     * @return boolean
     */
    protected function actionPreview($id)
    {
    }
    /**
     * User try change top panel and need new data.
     * @param int $lid Landing id.
     * @return array
     */
    protected function actionChangeTop($lid)
    {
    }
    /**
     * Gets config for top panel.
     * @param Landing $landing Landing instance.
     * @param array $site Site landing's array.
     * @param array $rights Rights landing's array.
     * @return array
     */
    protected function getTopPanelConfig(\Bitrix\Landing\Landing $landing, array $site, array $rights)
    {
    }
    /**
     * In some times we need show popup about site is now creating.
     * @param int $siteId Site id.
     * @return boolean
     */
    protected function isNeedFirstPreparePopup($siteId)
    {
    }
    /**
     * Publication landing.
     * @param int $id Landing id.
     * @param bool $disabledRedirect Disable redirect after publication.
     * @return boolean
     */
    protected function actionPublication($id, $disabledRedirect = \false)
    {
    }
    /**
     * Publication all landing in site of current landing.
     * @param int $id Landing id.
     * @return boolean
     */
    protected function actionPublicationAll($id)
    {
    }
    /**
     * Cancel publication the landing.
     * @param int $id Landing id.
     * @return boolean
     */
    protected function actionUnpublic($id)
    {
    }
    /**
     * Gets sites count.
     * @return int
     */
    public function getSitesCount()
    {
    }
    /**
     * Gets pages count of current site.
     * @param int $siteId Site id.
     * @return int
     */
    public function getPagesCount($siteId = \null)
    {
    }
    /**
     * Returns block section, opened by default.
     * @param string $type Site type.
     * @return string
     */
    protected function getCurrentBlockSection(string $type) : string
    {
    }
    /**
     * Handler on view landing.
     * @return void
     */
    protected function onLandingView()
    {
    }
    /**
     * Handler on template epilog.
     * @return void
     */
    protected function onEpilog()
    {
    }
    /**
     * Gets get some system urls for template.
     * @param Landing $landing Landing instance.
     * @param array $site Site row.
     * @return \Bitrix\Main\Web\Uri[]
     */
    protected function getUrls(\Bitrix\Landing\Landing $landing, $site = \null)
    {
    }
    /**
     * Gets conditions for slider init.
     * @return array
     */
    protected function getSliderConditions()
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