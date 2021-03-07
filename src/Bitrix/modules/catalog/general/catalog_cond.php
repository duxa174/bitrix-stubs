<?php

// sale actions conditions
class CGlobalCondCtrl
{
    public static $arInitParams = \false;
    public static $boolInit = \false;
    public static function GetClassName()
    {
    }
    public static function GetControlDescr()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    public static function IsGroup($strControlID = \false)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function ApplyValues($arOneCondition, $arControl)
    {
    }
    public static function InitParams($arParams)
    {
    }
    /**
     * @return string|array
     */
    public static function GetControlID()
    {
    }
    public static function GetShowIn($arControls)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return bool|array
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetAtomsEx($strControlID = \false, $boolEx = \false)
    {
    }
    public static function GetJSControl($arControl, $arParams = array())
    {
    }
    public static function OnBuildConditionAtomList()
    {
    }
    /**
     * @param bool|array $arOperators
     * @return array
     */
    public static function GetLogic($arOperators = \false)
    {
    }
    /**
     * @param bool|array $arOperators
     * @param bool|array $arLabels
     * @return array
     */
    public static function GetLogicEx($arOperators = \false, $arLabels = \false)
    {
    }
    public static function GetLogicAtom($arLogic)
    {
    }
    public static function GetValueAtom($arValue)
    {
    }
    public static function CheckLogic($strValue, $arLogic, $boolShow = \false)
    {
    }
    public static function SearchLogic($strValue, $arLogic)
    {
    }
    public static function Check($arOneCondition, $arParams, $arControl, $boolShow)
    {
    }
    public static function Validate($arOneCondition, $arParams, $arControl, $boolShow)
    {
    }
    public static function CheckAtoms($arOneCondition, $arParams, $arControl, $boolShow)
    {
    }
    public static function ValidateAtoms($arValues, $arParams, $arControl, $boolShow)
    {
    }
    public static function UndefinedCondition($boolFatal = \false)
    {
    }
    static function LogicGreat($arField, $mxValue)
    {
    }
    static function LogicLess($arField, $mxValue)
    {
    }
    static function LogicEqualGreat($arField, $mxValue)
    {
    }
    static function LogicEqualLess($arField, $mxValue)
    {
    }
    static function LogicContain($arField, $mxValue)
    {
    }
    static function LogicNotContain($arField, $mxValue)
    {
    }
    public static function ClearValue(&$mxValues)
    {
    }
    static function ConvertInt2DateTime(&$mxValues, $strFormat, $intOffset)
    {
    }
    static function ConvertDateTime2Int(&$mxValues, $strFormat, $intOffset)
    {
    }
    /**
     * @param array $atoms
     * @param string|false $controlId
     * @param bool $extendedMode
     * @return array|false
     */
    protected static function searchControlAtoms(array $atoms, $controlId, $extendedMode)
    {
    }
    protected static function searchControl(array $controls, $controlId)
    {
    }
}
class CGlobalCondCtrlComplex extends \CGlobalCondCtrl
{
    public static function GetControlDescr()
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return bool|array
     */
    public static function GetControls($strControlID = \false)
    {
    }
}
class CGlobalCondCtrlAtoms extends \CGlobalCondCtrl
{
    /**
     * @return array|bool
     */
    public static function GetControlDescr()
    {
    }
    public static function GetConditionShow($params)
    {
    }
    public static function Parse($condition)
    {
    }
    public static function Generate($condition, $params, $control, $childrens = \false)
    {
    }
    public static function GetAtomsEx($controlId = \false, $extendedMode = \false)
    {
    }
    public static function GetAtoms()
    {
    }
    /**
     * @return string|array
     */
    public static function GetControlID()
    {
    }
    /**
     * @param bool|string $strControlID
     * @return array|bool
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetControlShow($params)
    {
    }
}
class CGlobalCondCtrlGroup extends \CGlobalCondCtrl
{
    public static function GetControlDescr()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function GetConditionShow($arParams)
    {
    }
    /**
     * @return string|array
     */
    public static function GetControlID()
    {
    }
    public static function GetAtoms()
    {
    }
    public static function GetVisual()
    {
    }
    public static function IsGroup($strControlID = \false)
    {
    }
    public static function Parse($arOneCondition)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function ApplyValues($arOneCondition, $arControl)
    {
    }
}
class CCatalogCondCtrl extends \CGlobalCondCtrl
{
}
class CCatalogCondCtrlComplex extends \CGlobalCondCtrlComplex
{
}
class CCatalogCondCtrlGroup extends \CGlobalCondCtrlGroup
{
    public static function GetControlDescr()
    {
    }
}
class CCatalogCondCtrlIBlockFields extends \CCatalogCondCtrlComplex
{
    public static function GetControlDescr()
    {
    }
    /**
     * @return string|array
     */
    public static function GetControlID()
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    /**
     * @param bool|string $strControlID
     * @return bool|array
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function ApplyValues($arOneCondition, $arControl)
    {
    }
    /**
     * @return string
     */
    private static function getAdminSection()
    {
    }
}
class CCatalogCondCtrlIBlockProps extends \CCatalogCondCtrlComplex
{
    public static function GetControlDescr()
    {
    }
    /**
     * @param bool|string $strControlID
     * @return bool|array
     */
    public static function GetControls($strControlID = \false)
    {
    }
    public static function GetControlShow($arParams)
    {
    }
    public static function Generate($arOneCondition, $arParams, $arControl, $arSubs = \false)
    {
    }
    public static function ApplyValues($arOneCondition, $arControl)
    {
    }
    public static function Check($arOneCondition, $arParams, $arControl, $boolShow)
    {
    }
    /**
     * @return string
     */
    private static function getAdminSection()
    {
    }
    /**
     * @param array $control
     * @return bool
     */
    private static function checkActiveProperty(array $control)
    {
    }
}
class CGlobalCondTree
{
    protected $intMode = \BT_COND_MODE_DEFAULT;
    // work mode
    protected $arEvents = array();
    // events ID
    protected $arInitParams = array();
    // start params
    protected $boolError = \false;
    // error flag
    protected $arMsg = array();
    // messages (errors)
    protected $strFormName = '';
    // form name
    protected $strFormID = '';
    // form id
    protected $strContID = '';
    // container id
    protected $strJSName = '';
    // js object var name
    protected $boolCreateForm = \false;
    // need create form
    protected $boolCreateCont = \false;
    // need create container
    protected $strPrefix = 'rule';
    // prefix for input
    protected $strSepID = '__';
    // separator for id
    protected $arSystemMess = array();
    // system messages
    protected $arAtomList = \null;
    // atom list cache
    protected $arAtomJSPath = \null;
    // atom js files
    protected $arControlList = \null;
    // control list cache
    protected $arShowControlList = \null;
    // control show method list
    protected $arShowInGroups = \null;
    // showin group list
    protected $forcedShowInGroup = \null;
    // forced showin list
    protected $arInitControlList = \null;
    // control init list
    protected $arDefaultControl = array('Parse', 'GetConditionShow', 'Generate', 'ApplyValues');
    // required control fields
    protected $usedModules = array();
    // modules for real conditions
    protected $usedExtFiles = array();
    // files from AddEventHandler
    protected $usedEntity = array();
    // entity list in conditions
    protected $arConditions = \null;
    // conditions array
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    public function OnConditionAtomBuildList()
    {
    }
    public function OnConditionControlBuildList()
    {
    }
    protected function CheckControl($arControl)
    {
    }
    protected function GetModeList()
    {
    }
    protected function GetEventList($intEventID)
    {
    }
    protected function CheckEvent($arEvent)
    {
    }
    public function Init($intMode, $mxEvent, $arParams = array())
    {
    }
    public function Show($arConditions)
    {
    }
    public function GetDefaultConditions()
    {
    }
    public function Parse($arData = '', $arParams = \false)
    {
    }
    public function ShowScripts()
    {
    }
    public function ShowAtoms()
    {
    }
    public function ShowParams()
    {
    }
    public function ShowControls()
    {
    }
    public function ShowLevel(&$arLevel, $boolFirst = \false)
    {
    }
    public function ShowConditions()
    {
    }
    public function Generate($arConditions, $arParams)
    {
    }
    public function GenerateLevel(&$arLevel, $arParams, $boolFirst = \false)
    {
    }
    public function GetConditionValues($arConditions)
    {
    }
    public function GetConditionValuesLevel(&$arLevel, &$arResult, $boolFirst = \false)
    {
    }
    public function GetConditionHandlers()
    {
    }
    public function GetUsedEntityList()
    {
    }
    protected function __ConvertKey($strKey)
    {
    }
    protected function __SetCondition(&$arResult, $arKeys, $intIndex, $arOneCondition)
    {
    }
    protected function fillUsedData(&$control)
    {
    }
    protected function fillForcedShow(&$showControl)
    {
    }
}
class CCatalogCondTree extends \CGlobalCondTree
{
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
}