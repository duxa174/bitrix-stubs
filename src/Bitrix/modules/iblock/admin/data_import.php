<?php

/////////////////////////////////////////////////////////////////////
class CAssocData extends \CCSVData
{
    var $__rows = array();
    var $__pos = array();
    var $__last_pos = 0;
    var $NUM_FIELDS = 0;
    var $IBLOCK_ID = 0;
    var $tmpid = "";
    var $PK = array();
    var $GROUP_REGEX = "";
    function __construct($fields_type = "R", $first_header = \false, $NUM_FIELDS = 0)
    {
    }
    function GetPos()
    {
    }
    function Fetch()
    {
    }
    function PutBack($row)
    {
    }
    function AddPrimaryKey($field_name, $field_ind)
    {
    }
    function SetGroupFields($arGroupFields)
    {
    }
    function FetchAssoc()
    {
    }
    function MapSections($arRes)
    {
    }
    function MapEnum($prop_id, $value)
    {
    }
    function MapFiles($value)
    {
    }
}