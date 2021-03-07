<?php

class LandingBaseComponent extends \CBitrixComponent
{
    /**
     * @deprecated
     */
    const B24_SERVICE_DETECT_IP = 'https://ip.bitrix24.site/getipforzone/?bx24_zone=';
    const B24_DEFAULT_DNS_IP = '52.59.124.117';
    /**
     * Manifest path template.
     */
    const FILE_PATH_SITE_MANIFEST = '/bitrix/components/bitrix/landing.demo/data/site/#code#/.theme.php';
    /**
     * Http status OK.
     */
    const ERROR_STATUS_OK = '200 OK';
    /**
     * Http status Forbidden.
     */
    const ERROR_STATUS_FORBIDDEN = '403 Forbidden';
    /**
     * Http status Not Found.
     */
    const ERROR_STATUS_NOT_FOUND = '404 Not Found';
    /**
     * Http status Service Unavailable.
     */
    const ERROR_STATUS_UNAVAILABLE = '503 Service Unavailable';
    /**
     * Navigation id.
     */
    const NAVIGATION_ID = 'nav';
    /**
     * Current user options.
     * @var array|null
     */
    protected $userOptions = \null;
    /**
     * Current errors.
     * @var array
     */
    protected $errors = array();
    /**
     * Current template.
     * @var string
     */
    protected $template = '';
    /**
     * Last navigation result.
     * @var \Bitrix\Main\UI\PageNavigation
     */
    protected $lastNavigation = \null;
    /**
     * Current request
     * @var \Bitrix\Main\HttpRequest
     */
    protected $currentRequest = \null;
    /**
     * Init class' vars, check conditions.
     * @return bool
     */
    protected function init()
    {
    }
    /**
     * Returns current user GEO data.
     * @return array
     */
    public function getUserGeoData() : array
    {
    }
    /**
     * Returns true if current request is ajax.
     * @return bool
     */
    public function isAjax() : bool
    {
    }
    /**
     * Returns feedback parameters.
     * @param string $id Feedback code.
     * @return array|null
     */
    public function getFeedbackParameters(string $id) : ?array
    {
    }
    /**
     * Returns IP for DNS record for custom domains.
     * @return string
     */
    protected function getIpForDNS()
    {
    }
    /**
     * Get preview picture from cloud or not
     * @return bool
     */
    protected function previewFromCloud()
    {
    }
    /**
     * Http request initialization.
     *
     * @return void
     * @throws \Bitrix\Main\SystemException
     */
    protected function initRequest()
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
     * Returns true if it is repo sever.
     * @return bool
     */
    protected function isRepo() : bool
    {
    }
    /**
     * Check var in arParams. If no exists, create with default val.
     * @param string|int $var Variable.
     * @param mixed $default Default value.
     * @return void
     */
    protected function checkParam($var, $default)
    {
    }
    /**
     * Add one more error.
     * @param string $code Code of error (lang code).
     * @param string $message Optional message.
     * @param bool $fatal Is fatal error.
     * @return void
     */
    protected function addError($code, $message = '', $fatal = \false)
    {
    }
    /**
     * Collect errors from result.
     * @param Entity\AddResult|Entity\UpdateResult|Entity\DeleteResult $result Result.
     * @return void
     */
    protected function addErrorFromResult($result)
    {
    }
    /**
     * Copy Error from one to this.
     * @param array|\Bitrix\Main\Error $errors Error or array of errors.
     * @return void
     */
    protected function setErrors($errors)
    {
    }
    /**
     * Get current errors.
     * @param bool $string Convert Errors to string.
     * @return array
     */
    public function getErrors($string = \true)
    {
    }
    /**
     * Get error from current by string code.
     * @param string $code Error code.
     * @return false|\Bitrix\Main\Error
     */
    protected function getErrorByCode($code)
    {
    }
    /**
     * Get __FILE__.
     * @return string
     */
    protected function getFile()
    {
    }
    /**
     * Refresh current page.
     * @param array $add New params.
     * @param array $delete Params to remove.
     * @return void
     */
    public function refresh(array $add = [], array $delete = [])
    {
    }
    /**
     * Get some var from request.
     * @param string $var Code of var.
     * @return mixed
     */
    public function request($var)
    {
    }
    /**
     * Return valid class from module.
     * @param string $class Class name.
     * @return string|false Full class name or false on failure.
     */
    protected function getValidClass($class)
    {
    }
    /**
     * Gets last navigation object.
     * @return \Bitrix\Main\UI\PageNavigation
     */
    public function getLastNavigation()
    {
    }
    /**
     * Get items from some table.
     * @param string $class Class code.
     * @param array $params Params.
     * @return array
     */
    protected function getItems($class, $params = array())
    {
    }
    /**
     * Get current sites.
     * @param array $params Params.
     * @return array
     */
    protected function getSites($params = array())
    {
    }
    /**
     * Get current domains.
     * @param array $params Params.
     * @return array
     */
    protected function getDomains($params = array())
    {
    }
    /**
     * Get current templates.
     * @param array $params Params.
     * @return array
     */
    protected function getTemplates($params = array())
    {
    }
    /**
     * Get some landings.
     * @param array $params Params.
     * @return array
     */
    protected function getLandings($params = array())
    {
    }
    /**
     * Init script for initialization API keys.
     * @return void
     */
    public function initAPIKeys()
    {
    }
    /**
     * Get loc::getMessage by type of site.
     * @param string $code Mess code.
     * @param array $replace Array for replace, e.g. array('#NUM#' => 5).
     * @return string
     */
    public function getMessageType($code, $replace = \null)
    {
    }
    /**
     * Get actual rest path.
     * @deprecated since 20.2.100
     * @return string
     */
    public function getRestPath() : string
    {
    }
    /**
     * Set timestamp for url.
     * @param string $url Url.
     * @return string
     */
    protected function getTimestampUrl($url)
    {
    }
    /**
     * Gets instance of URI without some external params.
     * @return \Bitrix\Main\Web\Uri
     */
    protected function getUriInstance()
    {
    }
    /**
     * Get URI without some external params.
     * @param array $add Additional params for adding.
     * @param array $remove Additional params for deleting.
     * @return string
     */
    public function getUri(array $add = [], array $remove = [])
    {
    }
    /**
     * Get URI path.
     * @return string
     */
    protected function getUriPath()
    {
    }
    /**
     * Gets current file real name.
     * @return string
     */
    protected function getRealFile()
    {
    }
    /**
     * Gets tasks for access part.
     * @return array
     */
    protected function getAccessTasks()
    {
    }
    /**
     * Gets settings link by error code.
     * @param string $errorCode Error code.
     * @return string
     */
    public function getSettingLinkByError($errorCode)
    {
    }
    /**
     * Detect, if error occurred on small tarrifs.
     * @param string $errorCode Error code.
     * @return bool
     */
    public function isTariffError($errorCode)
    {
    }
    /**
     * Proxy rest methods, that we can redefine an answer.
     * @throws ReflectionException
     * @throws \Bitrix\Main\ArgumentException
     * @return void
     */
    protected function restProxy()
    {
    }
    /**
     * Initiates user options from storage.
     * @return void
     */
    protected function initUserOption() : void
    {
    }
    /**
     * Save some data for current user.
     * @param string $key Key of value.
     * @param mixed $value Mixed value.
     * @return void
     */
    protected function setUserOption(string $key, $value) : void
    {
    }
    /**
     * Returns some user data by key.
     * @param string $key Option key.
     * @return mixed|null
     */
    protected function getUserOption(string $key)
    {
    }
    /**
     * Returns site theme manifest.
     * @param string $tplCode Site template code.
     * @return array|null
     */
    protected function getThemeManifest(string $tplCode) : ?array
    {
    }
    /**
     * Get users from admin group.
     * @return array
     */
    protected function getAdmins() : array
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