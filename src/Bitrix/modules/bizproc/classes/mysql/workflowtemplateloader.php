<?php

class CBPWorkflowTemplateLoader extends \CAllBPWorkflowTemplateLoader
{
    private static $instance;
    private function __construct()
    {
    }
    /**
     * Static method returns loader object. Singleton pattern.
     *
     * @return CBPWorkflowTemplateLoader
     */
    public static function GetLoader()
    {
    }
    public function GetTemplatesList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public function AddTemplate($arFields, $systemImport = \false)
    {
    }
    public function UpdateTemplate($id, $arFields, $systemImport = \false)
    {
    }
}