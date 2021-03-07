<?php

/***************************************
	Form validator class
***************************************/
class CAllFormValidator
{
    function err_mess()
    {
    }
    /**
     * Get filtered list of validators assigned to current field
     *
     * @param int $FIELD_ID
     * @param array $arFilter
     * @return CDBResult
     */
    function GetList($FIELD_ID, $arFilter = array(), &$by, &$order)
    {
    }
    /**
     * Get filtered list of validators assigned to current form
     *
     * @param int $WEB_FORM_ID
     * @param array $arFilter
     * @return CDBResult
     */
    function GetListForm($WEB_FORM_ID, $arFilter = array(), &$by, &$order)
    {
    }
    function __getList($arFilter = array(), &$by, &$order)
    {
    }
    /**
     * Get filtered list of all registered validators. Filter params: TYPE = array|string;
     *
     * @param array $arFilter
     * @return false|CDBResult
     */
    function GetAllList($arFilter = array())
    {
    }
    /**
     * Apply validator to value
     *
     * @param string $sValSID
     * @param array $arParams
     * @param mixed $arValue
     * @return bool
     */
    function Execute($arValidator, $arQuestion, $arAnswers, $arAnswerValues)
    {
    }
    /**
     * Assign validator to the field
     *
     * @param int $WEB_FORM_ID
     * @param int $FIELD_ID
     * @param string $sValSID
     * @param array $arParams
     * @return int|bool
     */
    function Set($WEB_FORM_ID, $FIELD_ID, $sValSID, $arParams = array(), $C_SORT = 100)
    {
    }
    /**
     * Assign multiple validators to the field
     *
     * @param int $WEB_FORM_ID
     * @param int $FIELD_ID
     * @param array $arValidators
     */
    function SetBatch($WEB_FORM_ID, $FIELD_ID, $arValidators)
    {
    }
    function GetSettingsString($arValidator, $arParams)
    {
    }
    function GetSettingsArray($arValidator, $strParams)
    {
    }
    function GetSettings($arValidator)
    {
    }
    /**
     * Clear all field validators
     *
     * @param int $FIELD_ID
     */
    function Clear($FIELD_ID)
    {
    }
}