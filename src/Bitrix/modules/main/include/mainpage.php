<?php

class CMainPage
{
    // определяет сайт по HTTP_HOST в таблице сайтов
    function GetSiteByHost()
    {
    }
    // определяет сайт по HTTP_ACCEPT_LANGUAGE
    function GetSiteByAcceptLanguage($compare_site_id = \false)
    {
    }
    // делает перенаправление на сайт
    function RedirectToSite($site)
    {
    }
    // подключает страницу с папки другого сайта
    function GetIncludeSitePage($site)
    {
    }
}