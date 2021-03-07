<?php

namespace Bitrix\Main\Grid\Panel;

/**
 * Group actions panel snippets factory
 * @package Bitrix\Main\Grid\Panel
 */
class Snippet
{
    protected $applyButton;
    protected $saveButton;
    protected $cancelButton;
    protected $editButton;
    protected $removeButton;
    protected $saveAndCancelButtons;
    protected $forAllCheckbox;
    /**
     * Gets save button
     * @return array
     */
    public function getSaveEditButton()
    {
    }
    /**
     * Gets cancel button
     * @return array
     */
    public function getCancelEditButton()
    {
    }
    /**
     * Gets edit button
     * @return array
     */
    public function getEditButton()
    {
    }
    /**
     * Gets edit actions
     * @return array
     */
    public function getEditAction()
    {
    }
    /**
     * Gets remove button
     * @return array
     */
    public function getRemoveButton()
    {
    }
    /**
     * Gets remove acions
     * @return array
     */
    public function getRemoveAction()
    {
    }
    /**
     * Gets apply button
     * @param array $params
     * @return array
     */
    public function getApplyButton(array $params)
    {
    }
    /**
     * Gets for all checkbox
     * @return array
     */
    public function getForAllCheckbox()
    {
    }
    /**
     * Setup button onChange event handlers.
     * @param array $button Button params.
     * @param array $actions OnChange action params.
     */
    public function setButtonActions(array &$button, array $actions)
    {
    }
}