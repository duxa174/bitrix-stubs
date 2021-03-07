<?php

class _CIBlockError
{
    var $err_type, $err_text, $err_level;
    function _CIBlockError($err_level = \false, $err_type = "", $err_text = "")
    {
    }
    function GetErrorText($error = \false)
    {
    }
}
class CEditorPopupControl
{
    protected $width;
    protected $height;
    protected $initHtml = \false;
    /** @var bool  */
    protected $filemanIncluded = \null;
    public function __construct(int $width = 420, int $height = 200)
    {
    }
    public function getEditorHtml() : string
    {
    }
    public function getControlHtml(string $name, string $value, $maxLength = 255) : string
    {
    }
}
function _ShowStringPropertyField($name, $property_fields, $values, $bInitDef = \false, $bVarsFromForm = \false)
{
}
function _ShowGroupPropertyField($name, $property_fields, $values, $bVarsFromForm = \false)
{
}
function _ShowElementPropertyField($name, $property_fields, $values, $bVarsFromForm = \false)
{
}
function _ShowFilePropertyField($name, $property_fields, $values, $max_file_size_show = 50000, $bVarsFromForm = \false)
{
}
function _ShowListPropertyField($name, $property_fields, $values, $bInitDef = \false, $def_text = \false)
{
}
function _ShowUserPropertyField($name, $property_fields, $values, $bInitDef = \false, $bVarsFromForm = \false, $max_file_size_show = 50000, $form_name = "form_element", $bCopy = \false)
{
}
function _ShowPropertyField($name, $property_fields, $values, $bInitDef = \false, $bVarsFromForm = \false, $max_file_size_show = 50000, $form_name = "form_element", $bCopy = \false)
{
}
function _ShowHiddenValue($name, $value)
{
}
function IBlockShowRights($entity_type, $iblock_id, $id, $section_title, $variable_name, $arPossibleRights, $arActualRights, $bDefault = \false, $bForceInherited = \false, $arSelected = array(), $arHighLight = array())
{
}
function GetUserProfileLink($user_id, $title)
{
}
function IBlockGetHiddenHTML($name, $value)
{
}
function IBlockGetWatermarkPositions()
{
}
function IBlockInheritedPropertyInput($iblock_id, $id, $data, $type, $checkboxLabel = "")
{
}
function IBlockInheritedPropertyHidden($iblock_id, $id, $data, $type, $checkboxLabel = "")
{
}