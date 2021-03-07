<?php

class CListFieldList
{
    protected $iblock_id = 0;
    protected $form_id = "";
    /** @var array[string]CListField  */
    protected $fields = array();
    function __construct($iblock_id)
    {
    }
    /**
     * @param $field_id string
     * @return CListField|null
     */
    public function GetByID($field_id)
    {
    }
    public function GetFields()
    {
    }
    public function GetArrayByID($field_id)
    {
    }
    public function DeleteField($field_id)
    {
    }
    public function AddField($arFields)
    {
    }
    public function UpdateField($field_id, $arFields)
    {
    }
    protected function _save_form_settings($form_id)
    {
    }
    protected function _read_form_settings($form_id)
    {
    }
    /**
     * @param $a CListField
     * @param $b CListField
     * @return int
     */
    function Order($a, $b)
    {
    }
    protected function _resort()
    {
    }
    static function DeleteFields($iblock_id)
    {
    }
}