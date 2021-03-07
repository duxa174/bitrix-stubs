<?php

class CListFieldType
{
    const IS_READONLY = \true;
    const NOT_READONLY = \false;
    const IS_FIELD = \true;
    const NOT_FIELD = \false;
    private $id;
    private $name;
    private $is_field;
    private $is_readonly;
    function __construct($id, $name, $is_field, $is_readonly)
    {
    }
    function IsField()
    {
    }
    function IsReadonly()
    {
    }
    function GetName()
    {
    }
    function GetID()
    {
    }
}