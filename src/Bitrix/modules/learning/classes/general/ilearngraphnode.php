<?php

/**
 * WARNING: nobody shouldn't rely on this code,
 * because it's FOR INTERNAL USE ONLY. Any declared
 * function can be removed or changed in future versions.
 * This code can be changed without any notifications.
 * DON'T USE it nowhere.
 *
 * @access private
 */
interface ILearnGraphNode
{
    /**
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Insert() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param array of pairs field => value for new GraphNode. Allowed fields are:
     * ACTIVE, true by default, available values are: true/false
     * NAME, mustn't be omitted
     * CODE, NULL by default
     * PREVIEW_PICTURE, NULL by default, available value is array ('name' => ..., 
     *     'size' => ..., 'tmp_name' => ..., 'type' => ..., 'del' => ...)
     * PREVIEW_TEXT, NULL by default
     * PREVIEW_TEXT_TYPE, 'text' by default, available values are: 'text', 'html'
     * DETAIL_PICTURE, NULL by default, available value is array ('name' => ..., 
     *     'size' => ..., 'tmp_name' => ..., 'type' => ..., 'del' => ...)
     * DETAIL_TEXT, NULL by default
     * DETAIL_TEXT_TYPE, 'text' by default, available values are: 'text', 'html', 'file' (filename in LAUNCH)
     * LAUNCH, NULL by default
     *
     * @throws LearnException with errcodes:
     *         - LearnException::EXC_ERR_GN_CREATE,
     *         - LearnException::EXC_ERR_GN_CHECK_PARAMS,
     *         - LearnException::EXC_ERR_GN_FILE_UPLOAD
     * Also can throws other exceptions or exceptions' codes
     *
     * @return integer id of created graph node
     */
    public static function Create($arFields);
    /**
     * WARNING: this method terminates (by die()/exit()) current execution flow
     * when SQL server error occured. It's due to bug in CDatabase::Update() in main
     * module (version info:
     *    define("SM_VERSION","11.0.12");
     *    define("SM_VERSION_DATE","2012-02-21 17:00:00"); // YYYY-MM-DD HH:MI:SS
     * )
     *
     * @param integer id of node to be updated
     * @param array of pairs field => value for new GraphNode
     *
     * @throws LearnException with errcodes:
     *         - LearnException::EXC_ERR_GN_UPDATE,
     *         - LearnException::EXC_ERR_GN_CHECK_PARAMS,
     *         - LearnException::EXC_ERR_GN_FILE_UPLOAD
     * Also can throws other exceptions or exceptions' codes
     */
    public static function Update($id, $arFields);
    /**
     * @param integer id of node to be getted
     *
     * @throws LearnException with errcode LearnException::EXC_ERR_GN_GETBYID.
     *         Messages can be: 'EA_PARAMS', 'EA_ACCESS_DENIED',
     *         'EA_SQLERROR', 'EA_NOT_EXISTS'.
     *
     * @return array of properties for node with $id
     */
    public static function GetByID($id);
    /**
     * @param integer id of node to be removed
     *
     * @throws LearnException with errcode LearnException::EXC_ERR_GN_REMOVE,
     *         also errmsg === 'EA_NOT_EXISTS' if there is wasn't node with this id.
     */
    public static function Remove($id);
}
/**
 * WARNING: nobody shouldn't rely on this code,
 * because it's FOR INTERNAL USE ONLY. Any declared
 * function can be removed or changed in future versions.
 * This code can be changed without any notifications.
 * DON'T USE it nowhere.
 *
 * @access private
 */
abstract class CLearnGraphNode implements \ILearnGraphNode
{
    // Rights allowed for different fields (stored as bitmask). MUST be integers >= zero
    const SQL_NONE = 0;
    const SQL_SELECT = 1;
    const SQL_INSERT = 2;
    const SQL_UPDATE = 4;
    public static function Remove($id)
    {
    }
    public static function GetByID($id)
    {
    }
    public static function Create($arInFields)
    {
    }
    public static function Update($id, $arInFields)
    {
    }
    protected static function _InsertOrUpdate($arInFields, $mode, $id = \false)
    {
    }
    /**
     * Prepares array of fields with values for query to DB.
     * Also, uploads/removes files, if there are.
     * @throws LearnException on error. Errcodes are: LearnException::EXC_ERR_GN_CHECK_PARAMS,
     *         LearnException::EXC_ERR_GN_FILE_UPLOAD
     */
    protected static function _PrepareDataForQuery($arFieldsMap, $arFields, $lessonId)
    {
    }
    /**
     * @return integer id of file in table b_file
     */
    protected static function _UploadFile($fieldNameInDB, $arData)
    {
    }
    /**
     * @throws LearnException with errcode LearnException::EXC_ERR_GN_CHECK_PARAMS
     */
    protected static function _CheckAndCanonizeFields($arFieldsMap, $arFields, $access_level, $forUpdate = \false)
    {
    }
    protected static function _GetFieldsMap()
    {
    }
    protected static function _GetReversedFieldsMap()
    {
    }
}