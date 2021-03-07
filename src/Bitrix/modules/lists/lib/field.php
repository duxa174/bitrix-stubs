<?php

namespace Bitrix\Lists;

/**
 * Class work with fields - prepare and render field value, additional steps.
 * 
 * Class Field
 * @package Bitrix\Lists\UI
 */
class Field
{
    protected static $cache = array();
    protected static $separator = '<br>';
    protected static $renderForForm = false;
    /**
     * Method renders the printing form field values.
     *
     * @param array $field Field structure in the CListField format.
     * @return string
     */
    public static function renderField(array $field)
    {
    }
    public static function prepareFieldDataForEditForm(array $field)
    {
    }
    /**
     * Method of preparing a data structure for the filter.
     *
     * @param array $field Field structure in the CListField format.
     * @return array
     */
    public static function prepareFieldDataForFilter(array $field)
    {
    }
    protected static function renderFieldByTypeS(array $field)
    {
    }
    protected static function renderFieldByTypeN(array $field)
    {
    }
    protected static function renderFieldByTypeL(array $field)
    {
    }
    protected static function renderFieldByTypeF(array $field)
    {
    }
    protected static function renderFieldByTypeE(array $field)
    {
    }
    protected static function renderFieldByTypeG(array $field)
    {
    }
    protected static function renderFieldByUserTypeElist(array $field)
    {
    }
    protected static function renderFieldByFieldPreviewPicture(array $field)
    {
    }
    protected static function renderFieldByFieldDetailPicture(array $field)
    {
    }
    protected static function renderFieldByFieldActiveFrom(array $field)
    {
    }
    protected static function renderFieldByFieldActiveTo(array $field)
    {
    }
    protected static function renderFieldByFieldDateCreate(array $field)
    {
    }
    protected static function renderFieldByFieldTimestampX(array $field)
    {
    }
    protected static function renderFieldByFieldCreatedBy(array $field)
    {
    }
    protected static function renderFieldByFieldModifiedBy(array $field)
    {
    }
    protected static function renderFieldByFieldDetailText(array $field)
    {
    }
    protected static function renderFieldByFieldPreviewText(array $field)
    {
    }
    protected static function renderDateField(array $field)
    {
    }
    protected static function renderFieldByFieldName(array $field)
    {
    }
    protected static function renderDefaultField(array $field)
    {
    }
    protected static function getLinkToElement(array $field)
    {
    }
    protected static function renderCustomDefaultValueDiskFile(array $field)
    {
    }
    protected static function prepareEditFieldByTypeL(array $field)
    {
    }
    protected static function prepareEditFieldByTypeS(array $field)
    {
    }
    protected static function prepareEditFieldByTypeN(array $field)
    {
    }
    protected static function prepareEditFieldByUserTypeHTML(array $field)
    {
    }
    protected static function prepareEditFieldByFieldCreatedBy(array $field)
    {
    }
    protected static function prepareEditFieldByFieldModifiedBy(array $field)
    {
    }
    protected static function prepareEditFieldByFieldDateCreate(array $field)
    {
    }
    protected static function prepareEditFieldByFieldTimestampX(array $field)
    {
    }
    protected static function prepareEditFieldByFieldDetailText(array $field)
    {
    }
    protected static function prepareEditFieldByFieldPreviewText(array $field)
    {
    }
    protected static function prepareEditFieldByFieldPreviewPicture(array $field)
    {
    }
    protected static function prepareEditFieldByFieldDetailPicture(array $field)
    {
    }
    protected static function prepareEditFieldByFieldActiveFrom(array $field)
    {
    }
    protected static function prepareEditFieldByFieldActiveTo(array $field)
    {
    }
    protected static function prepareEditFieldByText($field)
    {
    }
    protected static function prepareEditFieldByTypeE(array $field)
    {
    }
    protected static function prepareEditFieldByTypeG(array $field)
    {
    }
    protected static function prepareEditFieldByTypeF(array $field)
    {
    }
    protected static function prepareDateEditField(array $field)
    {
    }
    protected static function prepareEditDefaultField(array $field)
    {
    }
    protected static function renderHtmlEditor($fieldId, $fieldNameForHtml, $params, $content)
    {
    }
}