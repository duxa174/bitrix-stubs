<?php

class CUserTypeEntity extends \CAllUserTypeEntity
{
    function CreatePropertyTables($entity_id)
    {
    }
    function DropColumnSQL($strTable, $arColumns)
    {
    }
}
/**
 * ��� ���������� �������� ��������� ������ ����� API ��������
 * � ���������� ������ � ����������������� ����������.
 * @global CUserTypeManager $GLOBALS['USER_FIELD_MANAGER']
 * @name $USER_FIELD_MANAGER
 */
$USER_FIELD_MANAGER = new \CUserTypeManager();