<?php

namespace Bitrix\Main\UI\Selector;

class Actions
{
    const GET_DATA = "getData";
    const GET_DEPARTMENT_DATA = "getDepartmentData";
    const GET_TREE_ITEM_DATA = "getTreeItemRelation";
    const SEARCH = "search";
    public static function getList()
    {
    }
    public static function processAjax($action = false, $options = array(), $requestFields = array())
    {
    }
}