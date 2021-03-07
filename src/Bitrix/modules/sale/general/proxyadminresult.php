<?php

class CSaleProxyAdminResult extends \CAdminResult
{
    private $parameters = array();
    private $entityName = '';
    public function __construct($parameters, $entityName, $tableId)
    {
    }
    function NavStart($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
}
class CSaleProxyAdminUiResult extends \CAdminUiResult
{
    private $parameters = array();
    private $entityName = '';
    public function __construct($parameters, $entityName, $tableId)
    {
    }
    function NavStart($nPageSize = 0, $bShowAll = \true, $iNumPage = \false)
    {
    }
}