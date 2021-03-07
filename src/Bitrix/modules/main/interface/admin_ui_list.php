<?php

class CAdminUiList extends \CAdminList
{
    public $enableNextPage = \false;
    public $totalRowCount = 0;
    protected $filterPresets = array();
    protected $currentPreset = array();
    private $isShownContext = \false;
    private $contextSettings = array();
    /** @var CAdminUiContextMenu */
    public $context = \false;
    public function AddHeaders($aParams)
    {
    }
    public function SetVisibleHeaderColumn()
    {
    }
    /**
     * @param $navigationId
     *
     * @return PageNavigation
     */
    public function getPageNavigation($navigationId)
    {
    }
    public function isTotalCountRequest()
    {
    }
    public function sendTotalCountResponse($totalCount)
    {
    }
    public function SetNavigationParams(\CAdminUiResult $queryObject, $params = array())
    {
    }
    public function setNavigation(\Bitrix\Main\UI\PageNavigation $nav, $title, $showAllways = \true, $post = \false)
    {
    }
    public function getCurPageParam($strParam = "", $arParamKill = array(), $get_index_page = \null)
    {
    }
    public function getNavSize()
    {
    }
    public function EditAction()
    {
    }
    private function prepareCustomKey($key, array $keys)
    {
    }
    /**
     * @return array|false
     */
    public function GroupAction()
    {
    }
    /**
     * Returns true if the user has set the flag "To all" in the list.
     *
     * @return bool
     */
    public function IsGroupActionToAll()
    {
    }
    /**
     * @return void
     */
    protected function PrepareAction()
    {
    }
    public function ActionDoGroup($id, $action_id, $add_params = "")
    {
    }
    public function ActionAjaxPostGrid($postParams)
    {
    }
    public function AddFilter(array $filterFields, array &$arFilter)
    {
    }
    public function hasGroupErrors()
    {
    }
    public function getGroupErrors()
    {
    }
    public function setContextSettings(array $settings)
    {
    }
    protected function GetSystemContextMenu(array $config = []) : array
    {
    }
    protected function InitContextMenu(array $menu = [], array $additional = []) : void
    {
    }
    private function GetGroupAction()
    {
    }
    public function &AddRow($id = \false, $arRes = array(), $link = \false, $title = \false)
    {
    }
    /**
     * The method set the default fields for the filter.
     *
     * @param array $fields array("fieldId1", "fieldId2", "fieldId3")
     */
    public function setDefaultFilterFields(array $fields)
    {
    }
    /**
     * The method set filter presets.
     *
     * @param array $filterPresets array("presetId" => array("name" => "presetName", "fields" => array(...)))
     */
    public function setFilterPresets(array $filterPresets)
    {
    }
    public function deletePreset($presetId)
    {
    }
    public function DisplayFilter(array $filterFields = array())
    {
    }
    private function createFilterSelectorHandlers(array $filterFields = array())
    {
    }
    public function ShowActionTable()
    {
    }
    public function DisplayList($arParams = array())
    {
    }
    private function getTotalRowsCountHtml()
    {
    }
    private function ShowContext()
    {
    }
    private function SetHeaderEditType($headerId, $field)
    {
    }
}
/**
* Class CAdminUiListActionPanel
* A class for working with group actions. Allows you to create your own group actions.
	Example of use:

	// The array for $lAdmin->AddGroupActionTable($arGroupActions, $arParamsGroupActions);
	$arGroupActions['test_my_type'] = array('type' => 'my_type', 'name' => 'Check custom actions');

	$actionPanelConstructor = new CAdminUiListActionPanel(
	$this->table_id, $this->arActions, $this->arActionsParams);

	//Set your own section
	$actionPanelConstructor->setActionSections(["my_section" => []], ["default"]);
	//Set your own action type
	$actionPanelConstructor->setTypeToSectionMap(["my_type" => "my_section"]);
	//Set handler for your type
	$actionPanelConstructor->setHandlerToType(["my_type" => function ($actionKey, $action) {
		$onChange = [
			[
				"ACTION" => Panel\Actions::CREATE,
				"DATA" => [
					[
						'TYPE' => Panel\Types::CUSTOM,
						'ID' => 'my_custom_html',
						'VALUE' => '<b>Hello!</b>',
					]
				]
			]
		];
		return [
			"ID" => $actionKey,
			"TYPE" => Bitrix\Main\Grid\Panel\Types::BUTTON,
			"TEXT" => $action["name"],
			"ONCHANGE" => $onChange
		];
	}]);

	return $actionPanelConstructor->getActionPanel();
*/
class CAdminUiListActionPanel
{
    private $tableId;
    private $inputActions;
    private $inputActionsParams;
    /**
     * @var Panel\Snippet
     */
    private $gridSnippets;
    private $actionSections = [];
    private $mapTypesAndSections = ["edit" => "default", "delete" => "default", "button" => "button", "select" => "list", "customjs" => "list", "html" => "html", "for_all" => "forAll"];
    private $mapTypesAndHandlers = [];
    public function __construct($tableId, array $actions, array $actionsParams)
    {
    }
    /**
     * The method returns an array of data of the desired format for the grid.
     * @return array
     */
    public function getActionPanel()
    {
    }
    /**
    * The method writes a value into an array of sections.
    * This array is the structure of the blocks into which you place your actions.
    * @param array $actionSections Map sections.
    * @param array $listKeyForDelete List keys for delete default sections.
    		Example:
    		[
    			"default" => [
    				"TYPE" => Types::BUTTON,
    				"ID" => "button_id",
    				"CLASS" => "apply",
    				"TEXT" => "My button",
    				"ONCHANGE" => [
    					[
    						"ACTION" => Panel\Actions::CALLBACK,
    						"DATA" => [
    							[
    								"JS" => "alert('Click!');"
    							]
    						]
    					]
    				]
    			]
    		];
    */
    public function setActionSections(array $actionSections, $listKeyForDelete = [])
    {
    }
    /**
     * The method writes values to a map of types and partitions.
     * This makes it possible to place any type of action in a specific action section.
     * @param array $mapTypesAndSections Map of types and sections. Example ["html" => "default"].
     */
    public function setTypeToSectionMap(array $mapTypesAndSections)
    {
    }
    /**
    * The method writes a handler for a particular type of action. This allows you to create your own action.
    *
    * @param array $mapTypesAndHandlers Map of types and handlers.
    * Example:
    * [
    		"button" => function ($actionKey, $action) {
    			$onChange = [
    				[
    					"ACTION" => Panel\Actions::CALLBACK,
    					"DATA" => [
    						[
    							"JS" => $action["action"] ? $action["action"] :
    							"BX.adminUiList.SendSelected('{$this->tableId}')"
    						]
    					]
    				]
    			]
    			return [
    				"ID" => $actionKey,
    				"TYPE" => Bitrix\Main\Grid\Panel\Types::BUTTON,
    				"TEXT" => $action["name"],
    				"ONCHANGE" => $onChange
    			];
    		}]
    */
    public function setHandlerToType(array $mapTypesAndHandlers)
    {
    }
    /**
     * @return array
     */
    private function getDefaultApplyAction()
    {
    }
    /**
     * @return array
     */
    private function getItems()
    {
    }
    /**
     * @return array
     */
    private function getActionSections()
    {
    }
    /**
     * @param array &$actionSections
     * @param string $actionKey
     * @param string|array $action
     * @return void
     */
    private function setActionSection(array &$actionSections, $actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getButtonActionData($actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getSelectActionData($actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getCustomJsActionData($actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getBaseActionData($actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getHtmlActionData($actionKey, $action)
    {
    }
    /**
     * @param string $actionKey
     * @param array $action
     * @return array
     */
    private function getMultiControlActionData($actionKey, array $action)
    {
    }
    /**
     * @param string $jsCallback
     * @return array
     */
    private function getApplyButtonCreationAction($jsCallback = "")
    {
    }
    /**
     * @param $array
     * @return bool
     */
    private function isAssociativeArray($array)
    {
    }
    /**
     * Prepare action data before add in action list.
     *
     * @param array &$action	Action description.
     * return void
     */
    private static function prepareAction(array &$action)
    {
    }
}
class CAdminUiListRow extends \CAdminListRow
{
    /**
     * @return array
     */
    public function getPreparedActions()
    {
    }
}
class CAdminUiResult extends \CAdminResult
{
    protected static $navParams = ["totalCount" => 0, "totalPages" => 1, "pagen" => 1];
    private $componentParams = array();
    /**
     * @param string $tableId
     * @param string $className Bitrix\Main\Entity\DataManager class name.
     * @param array $getListParams
     */
    public static function setNavParams($tableId, $className, &$getListParams)
    {
    }
    public function NavStart($nPageSize = 20, $bShowAll = \true, $iNumPage = \false)
    {
    }
    public function GetNavPrint($title, $show_allways = \true, $StyleText = "", $template_path = \false, $arDeleteParam = \false)
    {
    }
    public function GetNavSize($tableId = \false, $nPageSize = 20, $listUrl = '')
    {
    }
    public function setNavigationParams(array $params)
    {
    }
}
class CAdminUiContextMenu extends \CAdminContextMenu
{
    private $isShownFilterContext = \false;
    public function setFilterContextParam($bool)
    {
    }
    public function Show()
    {
    }
    private function showActionButton()
    {
    }
    private function showBaseButton()
    {
    }
}
class CAdminUiSorting extends \CAdminSorting
{
    /**
     * @return array
     */
    protected function getUserSorting()
    {
    }
}