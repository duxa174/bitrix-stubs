<?php

class LandingSiteDomainSwitchComponent extends \LandingBaseComponent
{
    /**
     * Switches domains between current site and selected.
     * @param string $siteId Site id.
     * @return bool
     */
    protected function actionSwitch(string $siteId) : bool
    {
    }
    /**
     * Check access to settings edit.
     * @param int $siteId Site id.
     * @return bool
     */
    protected function checkAccess(int $siteId) : bool
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent() : void
    {
    }
}