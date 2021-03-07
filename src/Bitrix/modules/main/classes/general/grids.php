<?php

class CGridOptions
{
    protected $grid_id;
    protected $all_options;
    protected $options;
    protected $filter;
    protected $filterPresets;
    protected $currentView;
    public function __construct($grid_id, array $filterPresets = array())
    {
    }
    public function InitFilter()
    {
    }
    public function GetOptions()
    {
    }
    public function GetSorting($arParams = array())
    {
    }
    public function GetNavParams($arParams = array())
    {
    }
    public function GetVisibleColumns()
    {
    }
    public function SetVisibleColumns($arColumns)
    {
    }
    public function GetFilter($arFilter)
    {
    }
    public function Save()
    {
    }
    public function SetColumns($columns)
    {
    }
    public function SetSorting($by, $order)
    {
    }
    public function SetTheme($theme)
    {
    }
    public function SetViewSettings($view_id, $settings)
    {
    }
    public function SetDefaultView($settings)
    {
    }
    public function ResetDefaultView()
    {
    }
    public function DeleteView($view_id)
    {
    }
    public function SetView($view_id)
    {
    }
    public function SetFilterRows($rows, $filter_id = '')
    {
    }
    public function SetFilterSettings($filter_id, $settings)
    {
    }
    public function DeleteFilter($filter_id)
    {
    }
    public function SetFilterSwitch($show)
    {
    }
    public static function CalcDates($field_id, $aInput, &$aRes)
    {
    }
    public static function GetThemes($path)
    {
    }
    public static function GetTheme($grid_id)
    {
    }
}