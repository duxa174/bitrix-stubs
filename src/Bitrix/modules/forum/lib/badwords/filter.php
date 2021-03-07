<?php

namespace Bitrix\Forum\BadWords;

class FilterTable extends \Bitrix\Main\Entity\DataManager
{
    private static $dataById = [];
    private const PATTERN_CREATE_METHOD_SIMPLE = "WORDS";
    private const PATTERN_CREATE_METHOD_TRANSLATE = "TRNSL";
    private const PATTERN_CREATE_METHOD_NONE = "PTTRN";
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
    protected static function checkPattern(string $pattern)
    {
    }
    public static function getDataById($id, $ttl = 84600)
    {
    }
}
class Filter implements \ArrayAccess
{
    use \Bitrix\Forum\Internals\EntityFabric;
    use \Bitrix\Forum\Internals\EntityBaseMethods;
    /** @var int */
    protected $id;
    /** @var array */
    protected $data;
    public function __construct($id)
    {
    }
    public function update(array $fields)
    {
    }
    public function delete()
    {
    }
    public function generatePattern()
    {
    }
    public static function add(array $fields)
    {
    }
}