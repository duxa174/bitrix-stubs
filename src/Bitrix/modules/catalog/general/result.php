<?php

class CCatalogResult extends \CDBResult
{
    /** @var null|Catalog\Model\Entity $entity */
    private $entity = \null;
    private $fields = array();
    private $resultKeys = array();
    private $erasedKeys = array();
    public function __construct($entity, $result = \null)
    {
    }
    public function setResult($result)
    {
    }
    public function prepareSelect(array $select)
    {
    }
    public function Fetch()
    {
    }
}