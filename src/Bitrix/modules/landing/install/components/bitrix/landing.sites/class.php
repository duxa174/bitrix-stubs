<?php

class LandingSitesComponent extends \LandingBaseComponent
{
    /**
     * Count items per page.
     */
    const COUNT_PER_PAGE = 11;
    /**
     * Rights array of sites.
     * @var array
     */
    protected $rights = [];
    /**
     * Gets additional access filter for sites.
     * @param string $accessCode Access code for filter.
     * @return array
     */
    protected function getAdditionalAccessFilter(string $accessCode)
    {
    }
    /**
     * Returns sites of main module.
     * @return array
     */
    protected function getSmnSites()
    {
    }
    /**
     * Base executable method.
     * @return mixed
     */
    public function executeComponent()
    {
    }
}