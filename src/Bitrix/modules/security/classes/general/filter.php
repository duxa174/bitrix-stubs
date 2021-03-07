<?php

class CSecurityFilter
{
    const DEFAULT_REQUEST_ORDER = "GP";
    private $doBlock = \false;
    /** @var \Bitrix\Security\Filter\Request $requestFilter */
    private $requestFilter = \null;
    /** @var \Bitrix\Security\Filter\Server $serverFilter */
    private $serverFilter = \null;
    /** @var \Bitrix\Main\Context $context */
    private $context = \null;
    private $splittingChar = '';
    protected $defaultAuditors = array(array('type' => 'XSS', 'class' => 'Bitrix\\Security\\Filter\\Auditor\\Xss'), array('type' => 'SQL', 'class' => 'Bitrix\\Security\\Filter\\Auditor\\Sql'), array('type' => 'PHP', 'class' => 'Bitrix\\Security\\Filter\\Auditor\\Path'));
    public function __construct($customOptions = array(), $char = "")
    {
    }
    public static function OnBeforeProlog()
    {
    }
    /**
     * @return bool
     */
    public static function IsActive()
    {
    }
    /**
     * @param bool $bActive
     */
    public static function SetActive($bActive = \false)
    {
    }
    /**
     * @return array
     */
    public static function GetAuditTypes()
    {
    }
    /**
     * Return WAF events count for Admin's informer popup and Admin's gadget
     * @param string $timestampX  - from date
     * @return integer
     */
    public static function GetEventsCount($timestampX = '')
    {
    }
    /**
     * Shows information about WAF stats in Admin's informer popup
     * @return bool|void
     */
    public static function OnAdminInformerInsertItems()
    {
    }
    /**
     * @deprecated deprecated agent since version 12.0.8
     * @return string
     */
    public static function ClearTmpFiles()
    {
    }
    /**
     * ATTENTION! Do "NOTHING" since 14.0.0
     * @deprecated deprecated since version 12.0.8
     * @param string $pValue
     * @param string $pAction
     * @return string
     */
    public function testXSS($pValue, $pAction = "clear")
    {
    }
    protected function process()
    {
    }
    protected function getAuditors()
    {
    }
    protected function getAuditorInstances()
    {
    }
    protected function overrideSuperGlobals()
    {
    }
    /**
     * @since 14.0.3
     * @return bool
     */
    protected function isAuditorsTriggered()
    {
    }
    /**
     * @return bool
     */
    protected function isSomethingChanged()
    {
    }
    /**
     * @return array
     */
    protected function getChangedVars()
    {
    }
    /**
     * @return \Bitrix\Main\HttpRequest
     */
    protected function getHttpRequest()
    {
    }
    /**
     * @return bool
     */
    protected function isBlockNeeded()
    {
    }
    /**
     * @return bool
     */
    protected static function currentUserHaveRightsForSkip()
    {
    }
    /**
     * @param string $ip
     * @return bool
     */
    protected function blockCurrentUser($ip = "")
    {
    }
    /**
     * @return array
     */
    protected static function getSafetyGlobals()
    {
    }
    protected static function cleanGlobals()
    {
    }
    /**
     * @param string $type
     * @return array
     */
    protected static function getSuperGlobalArray($type)
    {
    }
    protected static function getRequestOrder()
    {
    }
    protected static function reconstructRequest()
    {
    }
    protected static function restoreGlobals()
    {
    }
    protected function doPostProcessActions()
    {
    }
    protected function showForm()
    {
    }
    /**
     *
     */
    protected function showTextForm()
    {
    }
    /**
     *
     */
    protected function showAjaxForm()
    {
    }
    /**
     * @param array $originalPostVars
     */
    protected function showHtmlForm($originalPostVars = array())
    {
    }
    /**
     * @param array $array
     * @param string $prefix
     * @return string
     */
    protected static function formatHiddenFields(array $array, $prefix = \null)
    {
    }
}