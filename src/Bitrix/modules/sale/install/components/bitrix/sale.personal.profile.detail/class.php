<?php

class PersonalProfileDetail extends \CBitrixComponent
{
    const E_SALE_MODULE_NOT_INSTALLED = 10000;
    const E_NOT_AUTHORIZED = 10001;
    /** @var  Main\ErrorCollection $errorCollection*/
    protected $errorCollection;
    protected $idProfile;
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param $params		Parameters of component.
     * @return array		Checked and valid parameters.
     */
    public function onPrepareComponentParams($params)
    {
    }
    public function executeComponent()
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Main\SystemException
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    /**
     * @return string|void
     */
    protected function responseAjax()
    {
    }
    /**
     * Load html for multiply location input
     *
     * @param $name
     * @param $key
     * @param $locationTemplate
     *
     * @return string
     */
    protected function getLocationHtml($name, $key, $locationTemplate)
    {
    }
    /**
     * @param Main\HttpRequest $request
     * @param array $userOrderProperties
     * @return void
     */
    protected function updateProfileProperties($request, $userOrderProperties)
    {
    }
    /**
     * Fill $arResult array for output in template 
     * @param $property
     * @throws Main\ArgumentException
     * @return void
     */
    protected function fillResultArray($property)
    {
    }
    /**
     * Move all errors to $this->arResult, if there were any
     * @return void
     */
    protected function formatResultErrors()
    {
    }
    /**
     * Check value required params of property
     * @param $property
     * @param $currentValue
     * @return bool
     */
    protected function checkProperty($property, $currentValue)
    {
    }
    /**
     * Create array properties for updating and check required properties
     * @param Main\HttpRequest $request
     * @param array $userOrderProperties
     * @return array $fieldValues
     */
    protected function prepareUpdatingProperties($request, $userOrderProperties)
    {
    }
    /**
     * Update and add profile properties
     * @param Main\HttpRequest $request
     * @param $fieldValues
     * @return void
     */
    protected function executeUpdatingProperties($request, $fieldValues)
    {
    }
    /**
     * Delete id's files from property with type "File"
     * @param string $idFileDeletingList
     * @param array $baseArray
     * @return string $newValue
     */
    protected function deleteFromPropertyTypeFile($idFileDeletingList, $baseArray)
    {
    }
}