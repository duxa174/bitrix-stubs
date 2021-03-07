<?php

class LandingSiteDomainComponent extends \LandingBaseComponent
{
    /**
     * Sets new private domain to the site.
     * @param string $param Domain name.
     * @return bool
     */
    protected function actionSavePrivate(string $param) : bool
    {
    }
    /**
     * Sets new Bitrix24 sub domain to the site.
     * @param string $param Sub domain name.
     * @return bool
     */
    protected function actionSaveBitrix24(string $param) : bool
    {
    }
    /**
     * Sets new domain to the site by internal provider.
     * @param string $param Domain name.
     * @return bool
     */
    protected function actionSaveProvider(string $param) : bool
    {
    }
    /**
     * Switches domains between current site and another one.
     * @param string $siteId Site id.
     * @return bool
     */
    protected function actionSwitch(string $siteId) : bool
    {
    }
    /**
     * Returns domains with any provider.
     * @return array
     */
    protected function getDomainsWithProvider() : array
    {
    }
    /**
     * Returns postfix for domain.
     * @return string
     */
    protected function getPostFix() : string
    {
    }
    /**
     * Check access to settings edit.
     * @return bool
     */
    protected function checkAccess() : bool
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