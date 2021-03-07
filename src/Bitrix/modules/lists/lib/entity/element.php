<?php

namespace Bitrix\Lists\Entity;

class Element implements \Bitrix\Lists\Entity\Controllable, \Bitrix\Main\Errorable
{
    use \Bitrix\Main\ErrorableImplementation;
    const ERROR_ADD_ELEMENT = "ERROR_ADD_ELEMENT";
    const ERROR_UPDATE_ELEMENT = "ERROR_UPDATE_ELEMENT";
    const ERROR_DELETE_ELEMENT = "ERROR_DELETE_ELEMENT";
    const ERROR_ELEMENT_ALREADY_EXISTS = "ERROR_ELEMENT_ALREADY_EXISTS";
    const ERROR_ELEMENT_NOT_FOUND = "ERROR_ELEMENT_NOT_FOUND";
    const ERROR_ELEMENT_FIELD_VALUE = "ERROR_ELEMENT_FIELD_VALUE";
    private $param;
    private $params = [];
    private $iblockId;
    private $elementId;
    private $listObject;
    public $resultSanitizeFilter = [];
    public function __construct(\Bitrix\Lists\Service\Param $param)
    {
    }
    /**
     * Checks whether an element exists.
     *
     * @return bool
     */
    public function isExist()
    {
    }
    /**
     * Adds an element.
     *
     * @return int|bool
     */
    public function add()
    {
    }
    /**
     * Returns a list of element data.
     *
     * @param array $navData Navigation data.
     *
     * @return array
     */
    public function get(array $navData = [])
    {
    }
    /**
     * Updates an element.
     *
     * @return bool
     */
    public function update()
    {
    }
    /**
     * Deletes an element.
     *
     * @return bool
     */
    public function delete()
    {
    }
    /**
     * Returns the path to the file.
     *
     * @return array An array with a list of url for the field of type "File" or "File (Disk)".
     */
    public function getFileUrl()
    {
    }
    /**
     * Returns a list of available fields for filtering and a list of custom handlers.
     *
     * @return array
     */
    public function getAvailableFields()
    {
    }
    private function isEnabledBizproc()
    {
    }
    private function setUrlTemplate()
    {
    }
    private function validateFields()
    {
    }
    private function getElementFields($elementId, array $values)
    {
    }
    private function setPictureValue(&$elementFields, $fieldId, $fieldValue, array $values)
    {
    }
    private function setTextValue(&$elementFields, $fieldId, $fieldValue, $fieldData)
    {
    }
    private function setBaseValue(&$elementFields, $fieldId, $fieldValue)
    {
    }
    private function setFileValue(&$elementFields, $fieldId, array $fieldValue, array $fieldData, array $values)
    {
    }
    private function setIntegerValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function setFileDiskValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function setDateValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function setDateTimeValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function setHtmlValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function setPropertyValue(&$elementFields, array $fieldValue, $fieldData)
    {
    }
    private function getBizprocData()
    {
    }
    private function startBizproc($documentStates, $bizprocParameters, $changedElementFields)
    {
    }
    private function getElementData()
    {
    }
    private function getElements($navData)
    {
    }
    private function getOrder($availableFieldsIdForSort)
    {
    }
    private function getInputFilter(array $filter)
    {
    }
    private function isFieldDateType($type)
    {
    }
    private function getSefFolder()
    {
    }
}