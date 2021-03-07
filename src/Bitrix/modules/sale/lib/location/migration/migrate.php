<?php

namespace Bitrix\Sale\Location\Migration;

class CUpdaterLocationPro extends \CUpdater implements \Serializable
{
    // old tables that will be reused
    const TABLE_LOCATION = 'b_sale_location';
    const TABLE_LOCATION_GROUP = 'b_sale_location_group';
    const TABLE_LOCATION2GROUP = 'b_sale_location2location_group';
    const TABLE_DELIVERY2LOCATION = 'b_sale_delivery2location';
    const TABLE_TAX2LOCATION = 'b_sale_tax2location';
    const TABLE_LOCATION_GROUP_NAME = 'b_sale_location_group_lang';
    // new tables to be created
    const TABLE_LOCATION_NAME = 'b_sale_loc_name';
    const TABLE_LOCATION_EXTERNAL = 'b_sale_loc_ext';
    const TABLE_LOCATION_EXTERNAL_SERVICE = 'b_sale_loc_ext_srv';
    const TABLE_LOCATION_TYPE = 'b_sale_loc_type';
    const TABLE_LOCATION_TYPE_NAME = 'b_sale_loc_type_name';
    const TABLE_LOCATION2SITE = 'b_sale_loc_2site';
    // ?
    // obsolete tables to get data from
    const TABLE_LOCATION_ZIP = 'b_sale_location_zip';
    const TABLE_LOCATION_COUNTRY_NAME = 'b_sale_location_country_lang';
    const TABLE_LOCATION_REGION_NAME = 'b_sale_location_region_lang';
    const TABLE_LOCATION_CITY_NAME = 'b_sale_location_city_lang';
    // temporal tables
    const TABLE_TEMP_TREE = 'b_sale_location_temp_tree';
    const TABLE_LEGACY_RELATIONS = 'b_sale_loc_legacy';
    const MODULE_ID = 'sale';
    protected $data = array();
    // to CUpdater ?
    const DB_TYPE_MYSQL = 'MySQL';
    const DB_TYPE_MSSQL = 'MSSQL';
    const DB_TYPE_ORACLE = 'Oracle';
    const DB_TYPE_MYSQL_LC = 'mysql';
    const DB_TYPE_MSSQL_LC = 'mssql';
    const DB_TYPE_ORACLE_LC = 'oracle';
    public function __construct()
    {
    }
    public function serialize()
    {
    }
    public function unserialize($data)
    {
    }
    public static function updateDBSchemaRestoreLegacyIndexes()
    {
    }
    // only for module_updater
    public static function updateDBSchemaRenameIndexes()
    {
    }
    protected static function dropIndexByName($indexName, $tableName)
    {
    }
    protected static function checkIndexExistsByName($indexName, $tableName)
    {
    }
    // function stands for the corresponding block in module_updater.php
    public static function updateDBSchema()
    {
    }
    ////////////////////////////////////////////////////////
    //// Migration-specific
    ////////////////////////////////////////////////////////
    public function copyId2Code()
    {
    }
    public function copyZipCodes()
    {
    }
    private function convertEntityLocationLinks($entityName)
    {
    }
    public function convertGroupLocationLinks()
    {
    }
    public function convertDeliveryLocationLinks()
    {
    }
    public function convertTaxRateLocationLinks()
    {
    }
    public function convertSalesZones()
    {
    }
    public function copyDefaultLocations()
    {
    }
    public static function createBaseTypes()
    {
    }
    public function createTypes()
    {
    }
    public function convertTree()
    {
    }
    public function resetLegacyPath()
    {
    }
    public function rollBack()
    {
    }
    // in this function we track dependences between countries, regions and cities
    private function grabTree()
    {
    }
    private function convertCountries()
    {
    }
    private function convertRegions()
    {
    }
    private function convertCities()
    {
    }
    private function resort()
    {
    }
    private function walkTreeInDeep($nodeId, $edges, &$nodes, $margin, $depth = 0)
    {
    }
    private function insertTreeInfo()
    {
    }
    private function insertNames()
    {
    }
    ////////////////////////////////////////////////////////
    //// Common-specific logic => add to CUpdater ???
    ////////////////////////////////////////////////////////
    protected function dropTable($tableName = '')
    {
    }
    protected function createTemporalTable($tableName = '', $columns = array())
    {
    }
    protected function createTable($tableName = '', $columns = array(), $constraints = array())
    {
    }
    protected function prepareCreateTable($tableName, $columnsSql, $constSql, $dbType)
    {
    }
    // might be some overhead
    protected function prepareConstraintSql($constraints)
    {
    }
    protected function prepareTableFields($columnsSql, $dbType)
    {
    }
    protected function prepareFieldSql($field, &$afterCreate)
    {
    }
    public function TableExists($tableName)
    {
    }
    protected function UsingMysql()
    {
    }
    protected function UsingMssql()
    {
    }
    protected function UsingOracle()
    {
    }
}