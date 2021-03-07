<?php

namespace Bitrix\Forum\BadWords;

class DictionaryTable extends \Bitrix\Main\Entity\DataManager
{
    private static $dataById = [];
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function getDataById($id, $ttl = 84600)
    {
    }
}
class Dictionary
{
    use \Bitrix\Forum\Internals\EntityFabric;
    use \Bitrix\Forum\Internals\EntityBaseMethods;
    /** @var int */
    protected $id;
    // means nothing now
    /** @var array */
    protected $data;
    /** @var int */
    protected $translitId;
    /** @var string */
    private const NOT_WORD = "\\s.,;:!?\\#\\-\\*\\|\\[\\]\\(\\)";
    public function __construct($id, $languageId = null)
    {
    }
    public function delete()
    {
    }
    private function getTranslitDictionary($multiLetter = true) : array
    {
    }
    public function translitAndCreatePattern(string $word) : string
    {
    }
    public function createPattern(string $word) : string
    {
    }
}