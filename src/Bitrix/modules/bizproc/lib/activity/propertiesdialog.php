<?php

namespace Bitrix\Bizproc\Activity;

class PropertiesDialog
{
    protected $activityFile;
    protected $dialogFileName = 'properties_dialog.php';
    protected $map;
    protected $mapCallback;
    protected $documentType;
    protected $activityName;
    protected $workflowTemplate;
    protected $workflowParameters;
    protected $workflowVariables;
    protected $currentValues;
    protected $formName;
    protected $siteId;
    protected $renderer;
    protected $context;
    /** @var array */
    protected $runtimeData = array();
    public function __construct($activityFile, array $data = null)
    {
    }
    public function getActivityFile() : string
    {
    }
    public function setActivityFile(string $file) : self
    {
    }
    /**
     * @return mixed
     */
    public function getDocumentType()
    {
    }
    /**
     * @param mixed $documentType
     * @return $this
     */
    public function setDocumentType(array $documentType)
    {
    }
    /**
     * @param string $activityName
     * @return PropertiesDialog
     */
    public function setActivityName($activityName)
    {
    }
    /**
     * @return mixed
     */
    public function getActivityName()
    {
    }
    /**
     * @param array $workflowTemplate
     * @return PropertiesDialog
     */
    public function setWorkflowTemplate(array $workflowTemplate)
    {
    }
    /**
     * @return mixed
     */
    public function getWorkflowTemplate()
    {
    }
    /**
     * @param array $workflowParameters
     * @return $this
     */
    public function setWorkflowParameters(array $workflowParameters)
    {
    }
    /**
     * @return mixed
     */
    public function getWorkflowParameters()
    {
    }
    /**
     * @param array $workflowVariables
     * @return $this
     */
    public function setWorkflowVariables(array $workflowVariables)
    {
    }
    /**
     * @return mixed
     */
    public function getWorkflowVariables()
    {
    }
    /**
     * @param bool $compatible
     * @return array
     */
    public function getCurrentValues($compatible = false)
    {
    }
    /**
     * @param $valueKey
     * @param null $default Optional default value.
     * @return mixed
     */
    public function getCurrentValue($valueKey, $default = null)
    {
    }
    /**
     * @param mixed $currentValues
     * @return $this
     */
    public function setCurrentValues($currentValues)
    {
    }
    /**
     * @return mixed
     */
    public function getFormName()
    {
    }
    /**
     * @param string $formName
     * @return $this
     */
    public function setFormName($formName)
    {
    }
    /**
     * @return mixed
     */
    public function getSiteId()
    {
    }
    /**
     * @param mixed $siteId
     */
    public function setSiteId($siteId)
    {
    }
    /**
     * @param array $map
     * @return $this
     */
    public function setMap(array $map)
    {
    }
    /**
     * @param callable $callback
     * @return $this
     * @throws ArgumentException
     */
    public function setMapCallback($callback)
    {
    }
    /**
     * @return array
     */
    public function getMap()
    {
    }
    /**
     * @param array $field
     * @return null|FieldType
     */
    public function getFieldTypeObject(array $field)
    {
    }
    public function renderFieldControl($field, $value = null, $allowSelection = true, $renderMode = \Bitrix\Bizproc\FieldType::RENDER_MODE_PUBLIC)
    {
    }
    public function setRenderer($callable)
    {
    }
    public function __toString()
    {
    }
    /**
     * @param array $context Context data.
     * @return PropertiesDialog
     */
    public function setContext(array $context)
    {
    }
    /**
     * @return array Context data.
     */
    public function getContext()
    {
    }
    /**
     * @param string $dialogFileName
     * @return PropertiesDialog
     */
    public function setDialogFileName($dialogFileName)
    {
    }
    /**
     * @return string
     */
    public function getDialogFileName()
    {
    }
    /**
     * Get runtime data
     * @return array
     */
    public function getRuntimeData()
    {
    }
    /**
     * Set runtime data
     * @param array $runtimeData
     * @return PropertiesDialog
     */
    public function setRuntimeData(array $runtimeData)
    {
    }
}