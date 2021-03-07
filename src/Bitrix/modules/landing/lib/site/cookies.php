<?php

namespace Bitrix\Landing\Site;

class Cookies
{
    /**
     * System cookie codes.
     */
    const SYSTEM_COOKIES = [
        'ga' => ['type' => 'analytic'],
        // google analytics
        'gtm' => ['type' => 'analytic'],
        // google tag manager
        'ym' => ['type' => 'analytic'],
        // yandex metrika
        'fbp' => ['type' => 'analytic'],
        // facebook pixel
        'vkp' => ['type' => 'analytic'],
        // vkontakte pixel
        'yt' => ['type' => 'technical'],
        // youtube
        'gmap' => ['type' => 'technical'],
    ];
    /**
     * Unique code for user consent table.
     */
    const USER_CONSENT_CODE = 'landing_cookies';
    /**
     * Creates new agreement for current language, if not exists.
     * @param int|null Agreement id.
     * @return array
     */
    public static function getMainAgreement(?int $agreementId = null) : ?array
    {
    }
    /**
     * Returns cookie type by cookie code.
     * @param string $code Cookie code.
     * @return string
     */
    protected static function getCookieType(string $code) : string
    {
    }
    /**
     * Returns system agreements for site.
     * @param int $siteId Site id.
     * @param bool $viewMode Skip raw data with tilda-key and prepare content.
     * @return array
     */
    public static function getAgreements(int $siteId, bool $viewMode = false) : array
    {
    }
    /**
     * Add new agreements for the site.
     * @param int $siteId Site id.
     * @param array $fields Data array ([CODE, TITLE, CONTENT]).
     * @return AddResult
     */
    public static function addAgreementForSite(int $siteId, array $fields) : \Bitrix\Main\ORM\Data\AddResult
    {
    }
    /**
     * Update agreements for the site.
     * @param int $agreementId Agreement id.
     * @param array $fields Data array ([TITLE, CONTENT]).
     * @return UpdateResult
     */
    public static function updateAgreementForSite(int $agreementId, array $fields) : \Bitrix\Main\ORM\Data\UpdateResult
    {
    }
    /**
     * Removes all agreements for the site.
     * @param int $siteId Site id.
     * @param string $code Cookie code.
     * @return void
     */
    public static function removeAgreementsForSite(int $siteId, ?string $code = null) : void
    {
    }
    /**
     * Accepts agreement with specific cookies codes.
     * @param int $siteId Site id.
     * @param array $accepted Accepted cookies codes.
     * @return void
     */
    public static function acceptAgreement(int $siteId, array $accepted = []) : void
    {
    }
    /**
     * Checks if site (site itself, any site page and any blocks on the pages in this site)
     * includes any javascript code.
     * @param int $siteId Site id.
     * @return bool
     */
    public static function isSiteIncludesScript(int $siteId) : bool
    {
    }
    /**
     * Prepares cookies codes for user consents grid.
     * @return EventResult
     */
    public static function onUserConsentProviderList() : \Bitrix\Main\EventResult
    {
    }
}