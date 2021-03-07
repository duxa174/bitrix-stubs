<?php

class LandingBaseFormComponent extends \LandingBaseComponent
{
    /**
     * Current element id.
     * @var int
     */
    protected $id = 0;
    /**
     * Class of current element.
     * @var string
     */
    protected $class = \null;
    /**
     * Page after success save.
     * @var string
     */
    protected $successSavePage = '';
    /**
     * Redirect on $successSavePage after save.
     * @var bool
     */
    protected $redirectAfterSave = \false;
    /**
     * POST key.
     * @var string
     */
    protected $postCode = 'fields';
    /**
     * POST fields.
     * @var null
     */
    protected $postFields = \null;
    /**
     * Local version of table map with available fields for change.
     * @return array
     */
    protected function getMap()
    {
    }
    /**
     * Get some var from request.
     * @param string $var Code of var.
     * @param bool $strict Strict check of var.
     * @return mixed
     */
    public function request($var, $strict = \false)
    {
    }
    /**
     * Current form is saving now.
     * @return boolean
     */
    protected function isSaving()
    {
    }
    /**
     * Fill or not row data from Request.
     * @return boolean
     */
    protected function fillFromRequest()
    {
    }
    /**
     * Allowed or not additional fields for this form.
     * @return boolean
     */
    protected function additionalFieldsAllowed()
    {
    }
    /**
     * Get additional fields, which must be un-wafed.
     * @return array
     */
    protected function getAdditionalFieldsRaw()
    {
    }
    /**
     * Get additional fields values.
     * @return array
     */
    protected function getAdditionalFieldsValue()
    {
    }
    /**
     * Gets rights value for saving.
     * @param bool $integer Return task id in integer vals.
     * @return array
     */
    protected function getRightsValue($integer = \false)
    {
    }
    /**
     * Fill default fields from exist another row.
     * @return int
     */
    protected function getCopyId()
    {
    }
    /**
     * Get hooks for current entity.
     * @param string|bool $class Get hooks from this class.
     * @param int|bool $id Get hooks from this entity id.
     * @return array
     */
    protected function getHooks($class = \false, $id = \false)
    {
    }
    /**
     * Get current item from table (or request) with map description.
     * @return array
     */
    protected function getRow()
    {
    }
    /**
     * Save current item.
     * @return boolean
     */
    protected function updateRow()
    {
    }
    /**
     * Delete current item.
     * @return boolean
     */
    protected function deleteRow()
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