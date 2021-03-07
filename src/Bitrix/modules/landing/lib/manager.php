<?php

namespace Bitrix\Landing;

class Manager
{
    /**
     * User agreement actual version.
     * @see Manager::getOption('user_agreement_version')
     */
    const USER_AGREEMENT_VERSION = 4;
    /**
     * Publication default path.
     * @see Manager::getPublicationPathConst()
     */
    const PUBLICATION_PATH = '/pub/site/';
    const PUBLICATION_PATH_SITEMAN = '/lp/';
    /**
     * Path, where user can buy upgrade.
     */
    const BUY_LICENSE_PATH = '/settings/license_all.php';
    /**
     * Features codes for backward compatibility.
     */
    const FEATURE_CREATE_SITE = 'create_site';
    const FEATURE_CREATE_PAGE = 'create_page';
    const FEATURE_CUSTOM_DOMAIN = 'custom_domain';
    const FEATURE_ENABLE_ALL_HOOKS = 'enable_all_hooks';
    const FEATURE_PUBLICATION_SITE = 'publication_site';
    const FEATURE_PUBLICATION_PAGE = 'publication_page';
    const FEATURE_PERMISSIONS_AVAILABLE = 'permissions_available';
    const FEATURE_DYNAMIC_BLOCK = 'dynamic_block';
    const FEATURE_FREE_DOMAIN = 'free_domain';
    const FEATURE_ALLOW_EXPORT = 'allow_export';
    const FEATURE_ALLOW_VIEW_PAGE = 'allow_view_page';
    /**
     * If true, that self::isB24() returns false always.
     * @var bool
     */
    protected static $forceB24disable = false;
    /**
     * Current temporary functions.
     * @var array
     */
    protected static $tmpFeatures = [];
    /**
     * Selected template theme id.
     * @var string
     */
    private static $themeId = '';
    /**
     * And ID for typography settings.
     * @var string
     * @deprecated since 20.3.0, use THEMEFONTS hook settings
     */
    private static $themeTypoId = '';
    /**
     * Get main instance of \CMain.
     * @return \CMain
     */
    public static function getApplication()
    {
    }
    /**
     * Get main instance of \CUser.
     * @return \CUser
     */
    public static function getUserInstance()
    {
    }
    /**
     * Get instance of CACHE_MANAGER;
     * @return \CCacheManager
     */
    public static function getCacheManager()
    {
    }
    /**
     * Get instance of USER_FIELD_MANAGER.
     * @return \CUserTypeManager
     */
    public static function getUfManager()
    {
    }
    /**
     * Get current user id.
     * @return int
     */
    public static function getUserId() : int
    {
    }
    /**
     * Get current user full name.
     * @return int
     */
    public static function getUserFullName()
    {
    }
    /**
     * Admin or not.
     * @return boolean
     */
    public static function isAdmin()
    {
    }
    /**
     * Get option from module settings.
     * @param string $code Option code.
     * @param mixed $default Default value.
     * @return mixed
     */
    public static function getOption($code, $default = null)
    {
    }
    /**
     * Set option for module settings.
     * @param string $code Option code.
     * @param string $value Option value.
     * @return void
     */
    public static function setOption($code, $value)
    {
    }
    /**
     * Famous document root.
     * @return string
     */
    public static function getDocRoot()
    {
    }
    /**
     * Returns current dir.
     * @return false|string|null
     */
    public static function getCurDir()
    {
    }
    /**
     * Set page title.
     * @param string $title Page title.
     * @param bool $single If true, then set title only once.
     * @return void
     */
    public static function setPageTitle($title, $single = false)
    {
    }
    /**
     * Create system dir for publication sites.
     * @param string $basePath Publication physical dir.
     * @return void
     */
    protected static function createPublicationPath($basePath, $siteId = null)
    {
    }
    /**
     * Get main site local dir.
     * @param string $siteId Site LID.
     * @return string
     */
    protected static function getSmnSiteDir($siteId)
    {
    }
    /**
     * Get constantly publication path.
     * @return string
     */
    public static function getPublicationPathConst()
    {
    }
    /**
     * Get path for publication sites.
     * @param string|int $siteCode Site id or site code.
     * @param string $siteId Main site id.
     * @param bool $createPubPath Create path for publication.
     * @return string
     */
    public static function getPublicationPath($siteCode = null, $siteId = null, $createPubPath = false)
    {
    }
    /**
     * Add some class to some marker.
     * @param string $marker Marker.
     * @param string $class Class.
     * @deprecated since version 18.1.5
     * @return void
     */
    public static function setPageClass($marker, $class)
    {
    }
    /**
     * Add some content to some marker.
     * @param string $marker Marker.
     * @param string $content Content.
     * @return void
     */
    public static function setPageView($marker, $content)
    {
    }
    /**
     * Clears view by marker code.
     * @param string $marker Marker code.
     * @return void
     */
    public static function clearPageView($marker) : void
    {
    }
    /**
     * Get some content from some marker.
     * @param string $marker Marker.
     * @return string
     */
    public static function getPageView($marker)
    {
    }
    /**
     * Get themes entity from template dir.
     * @param string $tplId Site template id.
     * @param string $entityType - entity folder name.
     * @return array
     */
    protected static function getThemesEntity($tplId, $entityType)
    {
    }
    /**
     * Get themes from template dir.
     * @param string $tplId Site template id.
     * @return array
     */
    public static function getThemes($tplId)
    {
    }
    /**
     * Get themes typo from template dir.
     * @param string $tplId Site template id.
     * @return array
     *
     * @deprecated since 20.3.0, use THEMEFONTS hook settings
     */
    public static function getThemesTypo($tplId)
    {
    }
    /**
     * Gets site template id.
     * @param string $siteId Site id (siteman).
     * @return string
     */
    public static function getTemplateId($siteId = null)
    {
    }
    /**
     * Gets true, if this template id is system.
     * @param string $templateId Site template id.
     * @return bool
     */
    public static function isTemplateIdSystem($templateId)
    {
    }
    /**
     * Gets site id from main module.
     * @return string
     */
    public static function getMainSiteId()
    {
    }
    /**
     * Set new colored theme id.
     * @param string $themeId Theme id.
     * @return void
     */
    public static function setThemeId($themeId)
    {
    }
    /**
     * Set new colored theme id.
     * @param string $themeTypoId Theme id.
     * @return void
     * @deprecated since 20.3.0, use THEMEFONTS hook settings
     */
    public static function setThemeTypoId($themeTypoId)
    {
    }
    /**
     * Get current theme id.
     * @return string
     */
    public static function getThemeId()
    {
    }
    /**
     * Add assets to page from hooks and themes
     * @param int $lid Landing id.
     * @return void
     */
    public static function initAssets($lid = 0)
    {
    }
    /**
     * Set assets for theme.
     * @return void
     */
    protected static function setThemeAssets()
    {
    }
    /**
     * Set current selected or default color theme.
     * @return void
     */
    public static function setTheme()
    {
    }
    /**
     * Find all theme files.
     * @param string $themeId Theme id.
     * @param string $themeEntityId Entity code.
     * @param $tplId Site template id.
     * @return array
     */
    protected static function findThemeFiles($themeId, $themeEntityId, $tplId)
    {
    }
    /**
     * Save picture to db.
     * @param mixed $file File array or path to file.
     * @param string $ext File extension (if can't detected by file name).
     * @param array $params Some file params.
     * @return array|false Local file array or false on error.
     */
    public static function savePicture($file, $ext = false, $params = array())
    {
    }
    /**
     * Enable some feature for moment.
     * @param string $feature Feature code.
     * @return void
     */
    public static function enableFeatureTmp($feature)
    {
    }
    /**
     * Disable some tmp feature.
     * @param string $feature Feature code.
     * @return void
     */
    public static function disableFeatureTmp($feature)
    {
    }
    /**
     * Disable all tmp feature.
     * @return void
     */
    public static function disableAllFeaturesTmp()
    {
    }
    /**
     * Returns true, if all of features array is enabled.
     * @param array $features Feature name.
     * @param array $params Params array.
     * @return bool
     */
    public static function checkMultiFeature(array $features, array $params = [])
    {
    }
    /**
     * Checks that the feature is enabled.
     * @param string $feature Feature code.
     * @param array $params Additional params array.
     * @return boolean
     */
    public static function checkFeature(string $feature, array $params = array()) : bool
    {
    }
    /**
     * Get site zone (ru, ua, en, etc).
     * @return string
     */
    public static function getZone()
    {
    }
    /**
     * Check if something is available in current country.
     * @param string $zone Zone code.
     * @return bool
     */
    public static function availableOnlyForZone($zone)
    {
    }
    /**
     * Is https?
     * @return bool
     */
    public static function isHttps()
    {
    }
    /**
     * Get current host.
     * @return string
     */
    public static function getHttpHost()
    {
    }
    /**
     * Get full url of local file.
     * @param string $file Local file name.
     * @return string
     */
    public static function getUrlFromFile($file)
    {
    }
    /**
     * Is B24 portal?
     * @return bool
     */
    public static function isB24() : bool
    {
    }
    /**
     * Is Site Manager and B24 connector
     * @return bool|null
     */
    public static function isB24Connector() : bool
    {
    }
    /**
     * Sets local flag to new state.
     * @param boolean $flag Disable or not.
     * @return void
     */
    public static function forceB24disable($flag)
    {
    }
    /**
     * Returns true, if SMN is extended for CRM.
     * @return bool
     */
    public static function isExtendedSMN()
    {
    }
    /**
     * Enable or not shops in this edition.
     * @return bool
     */
    public static function isStoreEnabled()
    {
    }
    /**
     * Get current REST url for work with cloud.
     * @deprecated since 20.2.100
     * @return string
     */
    public static function getRestPath() : string
    {
    }
    /**
     * Check if cloud is disabled by settings.
     * @return bool
     */
    public static function isCloudDisable()
    {
    }
    /**
     * Get module version.
     * @return string
     */
    public static function getVersion()
    {
    }
    /**
     * Check if license is expired.
     * @return bool
     */
    public static function licenseIsValid()
    {
    }
    /**
     * Sanitize bad value.
     * @param string $value Bad value.
     * @param bool &$bad Return true, if value is bad.
     * @param string $splitter Splitter for bad content.
     * @return string Good value.
     */
    public static function sanitize($value, &$bad = false, $splitter = ' ')
    {
    }
    /**
     * Get deleted life time days.
     * @return int
     */
    public static function getDeletedLT()
    {
    }
    /**
     * Return site controller class, or pseudo.
     * @return string
     */
    public static function getExternalSiteController()
    {
    }
    /**
     * In cloud version reset highest plans to free.
     * @return void
     */
    public static function resetToFree()
    {
    }
    /**
     * Clear cache, if repository version and current is different.
     * @deprecated since 20.2.100
     * @return void
     */
    public static function checkRepositoryVersion()
    {
    }
}