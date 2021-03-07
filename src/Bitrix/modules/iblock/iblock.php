<?php

/**
 * Returns list of the information blocks of specified $type linked to the current site
 * including ELEMENT_CNT column which presents currently active elements.
 *
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which blocks will be returned.
 * @param int $cnt Maximum count of iblocks to be returned.
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockListWithCnt($type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0)
{
}
/**
 * Returns list of the information blocks of specified $type linked to the current site
 *
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which blocks will be returned.
 * @param int $cnt Maximum count of iblocks to be returned.
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockList($type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0)
{
}
/**
 * Returns list of the information blocks of specified $type linked to the specified site
 *
 * @param string $lang Site identifier blocks linked to.
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which blocks will be returned.
 * @param int $cnt Maximum count of iblocks to be returned.
 * @param bool $bCountActive
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockListLang($lang, $type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("SORT" => "ASC"), $cnt = 0, $bCountActive = \false)
{
}
/**
 * Returns an array with Information block fields or false if none found.
 * iblock have to be linked to the current site.
 *
 * @param int $ID Numeric identifier of the iblock
 * @param string $type Type of iblock restrict search to.
 *
 * @return array
 */
function GetIBlock($ID, $type = "")
{
}
/**
 * Returns an array with Information block fields or false if none found.
 * iblock have to be linked to the current site.
 *
 * @param string $lang Site identifier block linked to.
 * @param int $ID Numeric identifier of the iblock
 * @param string $type Type of iblock restrict search to.
 *
 * @return array
 */
function GetIBlockLang($lang, $ID, $type = "")
{
}
/**
 * Returns a list of the currently active elements of specified information blocks.
 * Checks permissions by default.
 *
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which elements will be returned.
 * @param int $cnt Maximum count of elements to be returned.
 * @param array $arFilter Filter to be applied
 * @param array $arSelect Fields to return (all if empty or not supplied)
 * @param bool $arGroupBy Fields to group by (none grouping by default), overwrites $arSelect
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementListEx($type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array(), $arSelect = array(), $arGroupBy = \false)
{
}
/**
 * Returns count of the currently active elements of specified information blocks.
 * Checks permissions by default.
 *
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which elements will be returned.
 * @param int $cnt Maximum count of elements to be returned.
 * @param array $arFilter Filter to be applied
 *
 * @return int
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementCountEx($type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array())
{
}
/**
 * Returns count of the currently active elements of specified information blocks.
 * Checks permissions by default.
 *
 * @param string $lang Site identifier blocks linked to.
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which elements will be returned.
 * @param int $cnt Maximum count of elements to be returned.
 * @param array $arFilter Filter to be applied
 *
 * @return int
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementCountExLang($lang, $type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array())
{
}
/**
 * Returns a list of the currently active elements of specified information blocks.
 * Checks permissions by default.
 *
 * @param string $lang Site identifier blocks linked to.
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which elements will be returned.
 * @param int $cnt Maximum count of elements to be returned.
 * @param array $arFilter Filter to be applied
 * @param array $arSelect Fields to return (all if empty or not supplied)
 * @param bool $arGroupBy Fields to group by (none grouping by default), overwrites $arSelect
 *
 * @return CIBlockResult|int
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementListExLang($lang, $type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array(), $arSelect = array(), $arGroupBy = \false)
{
}
/**
 * Makes filter for CIBlockElement::GetList. Internal function
 *
 * @param string $lang Site identifier blocks linked to.
 * @param string $type Information blocks type to get blocks from.
 * @param array|string|int $arTypesInc Information block ID or CODE or array of IDs or CODEs to get.
 * @param array|string|int $arTypesExc Information block ID or CODE or array of IDs or CODEs to exclude.
 * @param array $arOrder Order in which elements will be returned.
 * @param int $cnt Maximum count of elements to be returned.
 * @param array $arFilter Filter to be applied
 * @param array $arSelect Fields to return (all if empty or not supplied)
 *
 * @return array
 * @deprecated No longer used by internal code and not recommended.
 */
function _GetIBlockElementListExLang_tmp($lang, $type, $arTypesInc = array(), $arTypesExc = array(), $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array(), $arSelect = array())
{
}
/**
 * Returns number of active elements for given iblock.
 *
 * @param int $IBLOCK Information block ID.
 * @param bool $SECTION_ID Section ID.
 * @param array $arOrder Has no meaning here.
 * @param int $cnt Not used.
 *
 * @return int
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementCount($IBLOCK, $SECTION_ID = \false, $arOrder = array("sort" => "asc"), $cnt = 0)
{
}
/**
 * Return the list of the elements.
 *
 * @param int $IBLOCK Information block ID.
 * @param bool $SECTION_ID Section ID.
 * @param array $arOrder Has no meaning here.
 * @param int $cnt
 * @param array $arFilter
 * @param array $arSelect
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElementList($IBLOCK, $SECTION_ID = \false, $arOrder = array("sort" => "asc"), $cnt = 0, $arFilter = array(), $arSelect = array())
{
}
/**
 * Returns an array with element fields and PROPERTIES key containing element property values.
 * false when element not active or not exists.
 *
 * @param int $ID Identifier of the elements to be returned.
 * @param string $TYPE Information block type identifier to filter elements with.
 *
 * @return array|bool
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockElement($ID, $TYPE = "")
{
}
/**
 * Returns list of sections of specified iblock including ELEMENT_CNT column.
 *
 * @param int $IBLOCK
 * @param bool|int $SECT_ID
 * @param array $arOrder
 * @param int $cnt
 * @param array $arFilter
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockSectionListWithCnt($IBLOCK, $SECT_ID = \false, $arOrder = array("left_margin" => "asc"), $cnt = 0, $arFilter = array())
{
}
/**
 * Returns list of sections of specified iblock.
 *
 * @param int $IBLOCK
 * @param bool|int $SECT_ID
 * @param array $arOrder
 * @param int $cnt
 * @param array $arFilter
 *
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockSectionList($IBLOCK, $SECT_ID = \false, $arOrder = array("left_margin" => "asc"), $cnt = 0, $arFilter = array())
{
}
/**
 * Returns an array with section fields if found. Else returns false.
 *
 * @param int $ID
 * @param string $TYPE
 *
 * @return array|bool
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockSection($ID, $TYPE = "")
{
}
/**
 * Returns path to the section.
 *
 * @param int $IBLOCK_ID
 * @param int $SECTION_ID
 * @return CIBlockResult
 * @deprecated No longer used by internal code and not recommended.
 */
function GetIBlockSectionPath($IBLOCK_ID, $SECTION_ID)
{
}
/**
 * Converts xml string into recursive array
 *
 * @param string $data
 * @return array
 * @deprecated No longer used by internal code and not recommended.
 */
function xmlize_rss($data)
{
}
/**
 * Helper function for xmlize_rss
 *
 * @param array $values
 * @param int $i
 * @return array
 * @deprecated No longer used by internal code and not recommended.
 */
function xml_depth_rss($values, &$i)
{
}
/**
 * Returns html presenting a control of two drop boxes to choose iblock iblock from.
 *
 * @param int $IBLOCK_ID Selected iblock
 * @param string $strTypeName Name of the iblock type select
 * @param string $strIBlockName Name of the iblock name select
 * @param bool|array $arFilter Additional filter for iblock list
 * @param string $onChangeType Additional JS handler for type select
 * @param string $onChangeIBlock Additional JS handler for iblock select
 * @param string $strAddType Additional html inserted into type select
 * @param string $strAddIBlock Additional html inserted into iblock select
 * @return string
 */
function GetIBlockDropDownListEx($IBLOCK_ID, $strTypeName, $strIBlockName, $arFilter = \false, $onChangeType = '', $onChangeIBlock = '', $strAddType = '', $strAddIBlock = '')
{
}
/**
 * Returns html presenting a control of two drop boxes to choose iblock iblock from.
 * All iblock permission check to be at least W
 *
 * @param int $IBLOCK_ID Selected iblock
 * @param string $strTypeName Name of the iblock type select
 * @param string $strIBlockName Name of the iblock name select
 * @param bool|array $arFilter Additional filter for iblock list
 * @param string $strAddType Additional html inserted into type select
 * @param string $strAddIBlock Additional html inserted into iblock select
 * @return string
 */
function GetIBlockDropDownList($IBLOCK_ID, $strTypeName, $strIBlockName, $arFilter = \false, $strAddType = '', $strAddIBlock = '')
{
}
/**
 * Imports an xml file into iblock. File may be an .tar.gz archive.
 *
 * @param string $file_name Name of the file to import
 * @param string $iblock_type IBlock type ID to import iblock to
 * @param string|array $site_id ID of the site or array of IDs to bind iblock to
 * @param string $section_action What to do with sections missed in the file. D - delete or A - deactivate.
 * @param string $element_action What to do with elements missed in the file. D - delete or A - deactivate.
 * @param bool $use_crc Whenever to use CRC check for optimizi=ation or force an update
 * @param bool $preview If true when use iblock settings to generate preview pictures from detail.
 * @param bool $sync If true uses alternative set of tables in order not to interfere with other import processes
 * @param bool $return_last_error If true will return string with error description in case of failure
 * @param bool $return_iblock_id If true will return iblock identifier (int) in case of success
 * @return bool|int|string
 */
function ImportXMLFile($file_name, $iblock_type = "-", $site_id = '', $section_action = "D", $element_action = "D", $use_crc = \false, $preview = \false, $sync = \false, $return_last_error = \false, $return_iblock_id = \false)
{
}