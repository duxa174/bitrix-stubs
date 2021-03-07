<?php

/**
 * Class CIBlockType
 *
 * Fields:
 * <ul>
 * <li> ID string(50) mandatory
 * <li> SECTIONS bool optional default 'Y'
 * <li> EDIT_FILE_BEFORE string(255) optional
 * <li> EDIT_FILE_AFTER string(255) optional
 * <li> IN_RSS bool optional default 'N'
 * <li> SORT int optional default 500
 * </ul>
 */
class CIBlockType
{
    /**
     * @var string Contains an error message in case of error in last Update or Add functions.
     */
    public $LAST_ERROR = "";
    /**
     * Returns list of iblock types.
     * @example iblocktype.php
     *
     * @param array $arOrder Order of the list.<br>
     * 	keys are case insensitive:
     * 		<ul>
     * 		<li>SORT - by SORT field.
     * 		<li>ID - by ID field.
     * 		<li>NAME - by language depended NAME field (must be used with LANGUAGE_ID in the filter).
     * 		</ul>
     * 	values are case insensitive:
     * 		<ul>
     * 		<li>DESC - in descending order.
     * 		<li>ASC - in ascending order.
     * 		</ul>
     * @param array $arFilter Filter criteria.<br>
     * 	keys are case insensitive:
     * 		<ul>
     * 		<li>ID - uses <i>like</i> operator and is <i>case insensitive</i>.
     * 		<li>=ID - when contains string uses <i>strict equal</i> operator.
     * 		<li>=ID - when contains array[]string uses <i>in</i> operator.
     * 		<li>NAME - uses <i>like</i> operator and is <i>case insensitive</i>.
     * 		<li>LANGUAGE_ID - uses <i>strict equal</i> operator and is <i>case sensitive</i>.
     * 		</ul>
     * 	values with zero string length are ignored.
     * @return CDBResult
     */
    public static function GetList($arOrder = array("SORT" => "ASC"), $arFilter = array())
    {
    }
    /**
     * Returns cached version of the iblock type information.
     *
     * @param string $ID
     * @return bool|array
     */
    protected static function _GetCache($ID)
    {
    }
    /**
     * Returns iblock type information by ID.
     * @see CIBlockType
     * <code>
     * if (CModule::IncludeModule('iblock'))
     * &#123;
     * 	$rsType = CIBlockType::GetByID('test');
     * 	$arType = $rsType->GetNext();
     * 	if ($arType)
     * 	&#123;
     * 		echo '&lt;pre&gt;', htmlspecialcharsEx(print_r($arType, true)), '&lt;/pre&gt;';
     * 	&#125;
     * &#125;
     * </code>
     * @param string $ID iblock type ID
     * @return CDBResult
     */
    public static function GetByID($ID)
    {
    }
    /**
     * Returns iblock type information with additional language depended messages.<br>
     *
     * Additional to {@link CIBlockType} language depended fields:
     * <ul>
     * <li>NAME - Name of the type
     * <li>SECTION_NAME - How sections are called
     * <li>ELEMENT_NAME - How elements are called
     * </ul>
     *
     * <code>
     * if (CModule::IncludeModule('iblock'))
     * &#123;
     * 	$rsTypeLang = CIBlockType::GetByIDLang('test', 'en');
     * 	$arTypeLang = $rsTypeLang->GetNext();
     * 	if ($arTypeLang)
     * 	&#123;
     * 		echo '&lt;pre&gt;', htmlspecialcharsEx(print_r($arTypeLang, true)), '&lt;/pre&gt;';
     * 	&#125;
     * &#125;
     * </code>
     * @param string $ID iblock type ID
     * @param string $LID language ID
     * @param bool $bFindAny Forces strict search
     * @return array|bool
     */
    public static function GetByIDLang($ID, $LID, $bFindAny = \true)
    {
    }
    /**
     * Deletes iblock type including all iblocks.<br>
     * When there is an error occured on iblock deletion
     * it stops and returns false.
     *
     * @param string $ID iblock type ID.
     * @return bool|CDBResult
     */
    public static function Delete($ID)
    {
    }
    /**
     * Helper internal function.<br>
     * Checks correctness of the information. Called by Add and Update methods.
     * List of errors returned by LAST_ERROR member variable.
     *
     * @param array $arFields
     * @param bool $ID iblock type ID. false - if new one.
     * @return bool
     */
    public function CheckFields($arFields, $ID = \false)
    {
    }
    /**
     * Creates new iblock type in the database.
     * For arFields see {@link CIBlockType} class description.<br>
     * In addition it may contain key "LANG" with and array of language depended parameters.<br>
     * For example:
     * <code>
     * $arFields = array(
     * 	"ID" =&gt; "test",
     * 	"LANG" =&gt; array(
     * 		"en" =&gt; array(
     * 			"NAME" => "Test",
     * 			"ELEMENT_NAME" =&gt; "Test element",
     * 			"SECTION_NAME" =&gt; "Test section",
     * 		),
     * 	),
     * );
     * </code>
     *
     * @param array $arFields
     * @return bool
     */
    public function Add($arFields)
    {
    }
    /**
     * Updates iblock type in the database.
     *
     * $arFields is the same as for {@link CIBlockType::Add} method.
     * @see CIBlockType::Add
     *
     * @param string $ID
     * @param array $arFields
     * @return bool
     */
    public function Update($ID, $arFields)
    {
    }
    /**
     * Internal helper function which helps to store language depended fields into database.
     *
     * @param string $ID iblock type ID
     * @param array $arLang language depended fields
     */
    protected static function SetLang($ID, $arLang)
    {
    }
}