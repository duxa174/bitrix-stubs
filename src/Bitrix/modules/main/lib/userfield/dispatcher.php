<?php

namespace Bitrix\Main\UserField;

class Dispatcher
{
    /**
     * @var Dispatcher
     */
    protected static $instance;
    protected $languageId = LANGUAGE_ID;
    protected $fieldList = array();
    protected $validateFieldList = array();
    protected $userFieldList = array();
    protected $storedFieldSignature = array();
    protected $result = array();
    /**
     * @var IDisplay
     */
    protected $view = null;
    /**
     * @var SignatureManager
     */
    protected $signatureManager;
    /**
     * @var ErrorCollection
     */
    protected $errorCollection;
    /**
     * @var AssetCollector
     */
    protected $assetCollectior;
    /**
     * Singleton
     *
     * @return Dispatcher
     */
    public static function instance()
    {
    }
    public function __construct()
    {
    }
    /**
     * Sets current language of fields data
     *
     * @param $languageId
     */
    public function setLanguage($languageId)
    {
    }
    protected function validateFieldChangeRequest($fieldInfo)
    {
    }
    public function createField($fieldInfo)
    {
    }
    public function editField($fieldInfo)
    {
    }
    public function deleteField($fieldInfo)
    {
    }
    public function validateField($fieldInfo)
    {
    }
    protected function processValidate()
    {
    }
    protected function createNewField(array $fieldInfo)
    {
    }
    protected function updateField(array $fieldInfo)
    {
    }
    protected function createNewFieldEnumValues($fieldId, $fieldInfo)
    {
    }
    protected function updateFieldEnumValues($fieldId, $fieldInfo)
    {
    }
    protected function getErrorFromApplicationException($fieldInfo)
    {
    }
    protected function checkLabel($label)
    {
    }
    protected function storeFieldSignature($entityId, $field, $signature)
    {
    }
    protected function getStoredFieldSignature($entityId, $field)
    {
    }
    /**
     * Adds field to the processing list
     *
     * Input array format:
     * array(
     *   'ENTITY_ID' => field's entity code: USER, CRM_CONTACT, etc. Required
     *   'FIELD' => field code. Required
     *   'VALUE' => field value
     *   'ENTITY_VALUE_ID' => field's item id, may be needed for enum type fields
     *   'SIGNATURE' => field's data signature got from \Bitrix\Main\UserField\Dispatcher::getSignature. Required.
     * )
     *
     * @param array $field
     */
    public function addField($field)
    {
    }
    /**
     * Returns processing result
     *
     * array(
     *   'FIELD' => array(
     *     FIELD_NAME => array(
     *       'FIELD' => array(field description)),
     *       'HTML' => field_html,
     *     ),
     *   ),
     *   'ERROR' => array(
     *     list of processing error messages
     *   ),
     *   'ASSET' => array(
     *     list of js,css,etc needed for field functioning
     *   ),
     * );
     *
     * @return array
     */
    public function getResult()
    {
    }
    /**
     * Sets current view object
     *
     * @param IDisplay $view
     */
    public function setView(\Bitrix\Main\UserField\IDisplay $view)
    {
    }
    /**
     * Returns current view object
     *
     * @return IDisplay
     * @throws ObjectNotFoundException
     */
    public function getView()
    {
    }
    /**
     * @return SignatureManager
     */
    public function getSignatureManager()
    {
    }
    /**
     * @param SignatureManager $signatureManager
     */
    public function setSignatureManager(\Bitrix\Main\UserField\SignatureManager $signatureManager)
    {
    }
    /**
     * Processes single field and returns its result
     *
     * @param array $fieldInfo
     *
     * @return bool
     */
    protected function processField(array $fieldInfo)
    {
    }
    /**
     * Prepare for the next use
     */
    protected function reset()
    {
    }
    /**
     * Adds error message to the current collection
     *
     * @param $message
     * @param int $field
     */
    protected function addError($message, $field = 0)
    {
    }
    /**
     * Returns currently collected non-fatal errors
     *
     * @return array
     */
    protected function getErrorList()
    {
    }
    protected function getValidateErrorList()
    {
    }
    protected function clearErrorList()
    {
    }
    /**
     * Validates single field description
     *
     * @param array $fieldInfo
     *
     * @return bool
     */
    protected function checkFieldDescription($fieldInfo)
    {
    }
    /**
     * Returns userfield metadata
     *
     * @param string $entityId Entity ID
     * @param string $field Field name
     *
     * @return array|null
     */
    protected function getUserFieldInfo($entityId, $field)
    {
    }
    /**
     * Reloads userfield metadata for entity
     *
     * @param string $entityId Entity ID
     */
    protected function reloadUserFieldInfo($entityId)
    {
    }
    /**
     * Returns formatted field description for outpup
     *
     * @param array $userField Userfield metadata
     *
     * @return array
     */
    protected function getResultFieldInfo(array $userField)
    {
    }
    protected function setDefaultSignatureManager()
    {
    }
    public function getSignature(array $fieldParam)
    {
    }
    public function getCreateSignature(array $fieldParam)
    {
    }
}