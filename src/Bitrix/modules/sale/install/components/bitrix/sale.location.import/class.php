<?php

class CBitrixSaleLocationImportComponent extends \CBitrixComponent
{
    protected $componentData = array();
    protected $dbResult = array();
    protected $errors = array('FATAL' => array(), 'NONFATAL' => array());
    protected $import = \null;
    const LOC2_IMPORT_PERFORMED_OPTION = 'sale_locationpro_import_performed';
    /**
     * Function checks and prepares all the parameters passed. Everything about $arParam modification is here.
     * @param mixed[] $arParams List of unchecked parameters
     * @return mixed[] Checked and valid parameters
     */
    public function onPrepareComponentParams($arParams)
    {
    }
    /**
     * Function checks if required modules installed. If not, throws an exception
     * @throws Exception
     * @return void
     */
    protected function checkRequiredModules()
    {
    }
    protected static function checkAccessPermissions($parameters = array())
    {
    }
    /**
     * Function checks if user have basic permissions to launch the component
     * @throws Exception
     * @return void
     */
    protected function checkPermissions()
    {
    }
    /**
     * Additional parameters check, if needed.
     * @return void
     */
    protected function checkParameters()
    {
    }
    protected function prepareInstances()
    {
    }
    /**
     * Function makes some actions based on what is in $this->request
     * @return void
     */
    protected function performAction()
    {
    }
    /**
     * Here we get some data that cannot be cached for a long time
     * @return boolean
     */
    protected function obtainNonCachedData()
    {
    }
    /**
     * Move data read from database to a specially formatted $arResult
     * @return void
     */
    protected function formatResult()
    {
    }
    /**
     * Function implements all the life cycle of our component
     * @return void
     */
    public function executeComponent()
    {
    }
    public static function doAjaxStuff($parameters = array())
    {
    }
    protected function checkHasErrors($fatalOnly = \false)
    {
    }
    /**
     * Fetches all required data from database. Everyting that connected with data fetch lies here.
     * @return void
     */
    protected function obtainData()
    {
    }
    protected static function getImportInstance($parameters)
    {
    }
    protected static function getRequest()
    {
    }
    protected static function getRequestMethod()
    {
    }
    // for building tree at import page
    public static function renderLayout($parameters)
    {
    }
    private function resortLayoutBundleAlphabetically($code)
    {
    }
    private static function renderLayoutNode($pCode, $pName, $parameters, &$alreadyPrinted)
    {
    }
    /**
     * Function reduces input value to integer type, and, if gets null, passes the default value
     * @param mixed $fld Field value
     * @param int $default Default value
     * @param int $allowZero Allows zero-value of the parameter
     * @return int Parsed value
     */
    public static function tryParseInt(&$fld, $default = \false, $allowZero = \false)
    {
    }
}