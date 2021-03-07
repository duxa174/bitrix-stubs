<?php

namespace Bitrix\Iblock\Grid\Panel;

class GroupAction
{
    public const GRID_TYPE_UI = 'main.ui.grid';
    public const GRID_TYPE_LIST = 'adminList';
    public const GRID_TYPE_SUBLIST = 'subList';
    private const PREFIX_ID = 'iblock_grid_action_';
    /** @var string Grid Id */
    protected $entityId = '';
    protected $gridType = self::GRID_TYPE_UI;
    /** @var array */
    protected $options = [];
    /** @var int */
    protected $iblockId = null;
    /** @var array */
    protected $iblockConfig = ['SECTIONS' => 'N', 'SECTION_CHOOSER' => \Bitrix\Iblock\IblockTable::SECTION_CHOOSER_SELECT];
    /** @var Main\Grid\Panel\Snippet */
    protected $mainSnippet = null;
    /** @var Main\HttpRequest */
    protected $request = null;
    /** @var array */
    protected $sections = null;
    protected $actionHandlers = [];
    public function __construct(array $options)
    {
    }
    /**
     * @param array $actions
     * @return array
     */
    public function getList(array $actions)
    {
    }
    /**
     * @param string $code
     * @param array $params
     * @return array|null
     */
    public function get(string $code, array $params = [])
    {
    }
    /**
     * @param string $code
     * @return array|null
     */
    public function getRequest(string $code)
    {
    }
    /**
     * @return string
     */
    protected function getEntityId()
    {
    }
    /**
     * @return void
     */
    protected function initConfig()
    {
    }
    /**
     * @return void
     */
    protected function initActions()
    {
    }
    /**
     * @param string $value
     * @return void
     */
    protected function setGridType(string $value)
    {
    }
    /**
     * @return string
     */
    protected function getGridType()
    {
    }
    /**
     * @return bool
     */
    protected function isUiGrid()
    {
    }
    /**
     * @return array
     */
    protected function getActionHandlers()
    {
    }
    /**
     * @return array
     */
    protected function getDefaultApplyAction()
    {
    }
    /**
     * @param string $id
     * @return string
     */
    protected function getElementId($id)
    {
    }
    /**
     * @param array $params
     * @return array
     */
    protected function getApplyButton(array $params)
    {
    }
    /**
     * @param array $params
     * @return array
     */
    protected function getApplyButtonWithConfirm(array $params)
    {
    }
    /**
     * @return void
     */
    protected function loadSections()
    {
    }
    /**
     * @param bool $addTop
     * @return array
     */
    protected function getSections($addTop = false)
    {
    }
    /**
     * @param array $action
     * @return array
     */
    protected function getAddSectionList(array $action)
    {
    }
    /**
     * @param array $action
     * @return array
     */
    protected function getAddSectionDialog(array $action)
    {
    }
    /**
     * @param array $action
     * @return array
     */
    protected function getAdjustSectionList(array $action)
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionEditPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return true
     * @noinspection PhpUnusedParameterInspection
     */
    protected function actionSelectAllPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionDeletePanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionActivatePanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionDeactivatePanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return array
     */
    protected function actionClearCounterPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return array
     */
    public function actionCodeTranslitPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return array|null
     */
    protected function actionAdjustSectionPanel(array $params = [])
    {
    }
    /**
     * @return array|null
     */
    protected function actionAdjustSectionRequest()
    {
    }
    /**
     * @param array $params
     * @return array|null
     */
    protected function actionAddSectionPanel(array $params = [])
    {
    }
    /**
     * @return array|null
     */
    protected function actionAddSectionRequest()
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionElementUnlockPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return string
     */
    protected function actionElementLockPanel(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return array|null
     */
    protected function actionElementWorkflowStatusPanel(array $params = [])
    {
    }
    /**
     * @return array|null
     */
    protected function actionElementWorkflowStatusRequest()
    {
    }
}