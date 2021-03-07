<?php

namespace Bitrix\Landing\Controller;

class Cookies extends \Bitrix\Main\Engine\Controller
{
    public function getDefaultPreFilters()
    {
    }
    /**
     * Returns site cookie agreements.
     * @param int $siteId Site id.
     * @return array
     */
    public function getAgreementsAction(int $siteId) : array
    {
    }
    /**
     * Accepts agreements from user.
     * @param int $siteId Site id.
     * @param array $accepted Agreements codes which user has accepted.
     * @return void
     */
    public function acceptAgreementsAction(int $siteId, array $accepted = []) : void
    {
    }
}