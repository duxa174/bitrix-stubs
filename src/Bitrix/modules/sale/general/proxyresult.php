<?php

class CSaleProxyResult extends \CDBResult
{
    private $parameters = array();
    private $entityName = '';
    public function __construct($parameters, $entityName)
    {
    }
    function NavStart($nPageSize = 20, $bShowAll = \true, $iNumPage = \false)
    {
    }
}