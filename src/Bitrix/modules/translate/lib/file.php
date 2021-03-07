<?php

namespace Bitrix\Translate;

class File extends \Bitrix\Translate\IO\File implements \Iterator, \Countable, \ArrayAccess
{
    /** @var string */
    protected $languageId;
    /** @var string */
    protected $sourceEncoding;
    /** @var string */
    protected $operatingEncoding;
    /** @var string[] */
    protected $messages = null;
    /** @var int */
    protected $messagesCount = null;
    /** @var array */
    protected $messageCodes = [];
    /** @var int */
    protected $dataPosition = 0;
    /** @var Index\FileIndex */
    protected $fileIndex;
    //region Fabric
    /**
     * Constructs instance by path.
     *
     * @param string $path Path to language file.
     *
     * @return Translate\File
     * @throws Main\ArgumentException
     */
    public static function instantiateByPath($path)
    {
    }
    /**
     * Constructs instance by file index.
     *
     * @param Index\FileIndex $fileIndex Language file index.
     *
     * @return Translate\File
     * @throws Main\ArgumentException
     */
    public static function instantiateByIndex(\Bitrix\Translate\Index\FileIndex $fileIndex)
    {
    }
    /**
     * Constructs instance by io file.
     *
     * @param Main\IO\File $fileIn Language file.
     *
     * @return Translate\File
     * @throws Main\ArgumentException
     */
    public static function instantiateByIoFile(\Bitrix\Main\IO\File $fileIn)
    {
    }
    //endregion
    //region Language & Encoding
    /**
     * Returns language code of the file. If it is empty tries to detect it.
     * @return string
     */
    public function getLangId()
    {
    }
    /**
     * Sets language code of the file.
     *
     * @param string $languageId Lang code.
     *
     * @return self
     */
    public function setLangId($languageId)
    {
    }
    /**
     * Returns source encoding of the file.
     * @return bool
     */
    public function getSourceEncoding()
    {
    }
    /**
     * Sets source encoding of the file.
     *
     * @param string $encoding Encoding code.
     *
     * @return self
     */
    public function setSourceEncoding($encoding)
    {
    }
    /**
     * Returns operating encoding.
     * @return bool
     */
    public function getOperatingEncoding()
    {
    }
    /**
     * Sets operating encoding.
     *
     * @param string $encoding Encoding code.
     *
     * @return self
     */
    public function setOperatingEncoding($encoding)
    {
    }
    // endregion
    //region Validators
    /**
     * Lints php code.
     *
     * @param string $content Content to validate either content of the current file will be taken.
     * @param int[] $validTokens Allowed php tokens.
     * @param string[] $validChars Allowed statement characters.
     *
     * @return bool
     */
    public function lint($content = '', $validTokens = array(T_OPEN_TAG, T_CLOSE_TAG, T_WHITESPACE, T_CONSTANT_ENCAPSED_STRING, T_VARIABLE, T_COMMENT, T_DOC_COMMENT), $validChars = array('[', ']', ';', '='))
    {
    }
    // endregion
    //region Load & Save
    /**
     * Loads language file for operate.
     *
     * @return bool
     */
    public function load()
    {
    }
    //endregion
    //region Load & Save
    /**
     * Save changes or create new file.
     *
     * @return boolean
     */
    public function save()
    {
    }
    /**
     * Removes empty parent chain up to "lang".
     *
     * @return boolean
     */
    public function removeEmptyParents()
    {
    }
    /**
     * Performs backup action.
     *
     * @return bool
     */
    public function backup()
    {
    }
    //endregion
    //region Index
    /**
     * Returns or creates file index instance.
     *
     * @return Index\FileIndex
     */
    public function getFileIndex()
    {
    }
    /**
     * Updates phrase index.
     *
     * @return Index\FileIndex
     */
    public function updatePhraseIndex()
    {
    }
    /**
     * Drops phrase index.
     *
     * @return bool
     */
    public function deletePhraseIndex()
    {
    }
    /**
     * Returns ORM\Collection object.
     *
     * @return Index\PhraseIndexCollection
     */
    public function getPhraseIndexCollection()
    {
    }
    //endregion
    //region ArrayAccess
    /**
     * Checks existence of the phrase by its code.
     *
     * @param string $code Phrase code.
     *
     * @return boolean
     */
    public function offsetExists($code)
    {
    }
    /**
     * Returns phrase by its code.
     *
     * @param string $code Phrase code.
     *
     * @return string|null
     */
    public function offsetGet($code)
    {
    }
    /**
     * Offset to set
     *
     * @param string $code Phrase code.
     * @param string $phrase Phrase.
     *
     * @return void
     */
    public function offsetSet($code, $phrase)
    {
    }
    /**
     * Unset phrase by code.
     *
     * @param string $code Phrase code.
     *
     * @return void
     */
    public function offsetUnset($code)
    {
    }
    /**
     * Sorts phrases by key, except russian.
     *
     * @return self
     */
    public function sortPhrases()
    {
    }
    /**
     * Returns all phrases from the language file with theirs codes.
     * @return array
     */
    public function getPhrases()
    {
    }
    /**
     * Returns all phrase codes from the language file.
     * @return string[]
     */
    public function getCodes()
    {
    }
    //endregion
    //region Iterator
    /**
     * Return the current phrase element.
     *
     * @return string|null
     */
    public function current()
    {
    }
    /**
     * Move forward to next phrase element.
     *
     * @return void
     */
    public function next()
    {
    }
    /**
     * Return the key of the current phrase element.
     *
     * @return int|null
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @return boolean
     */
    public function valid()
    {
    }
    /**
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
    }
    //endregion
    //region Countable
    /**
     * Returns amount phrases in the language file.
     *
     * @param bool $allowDirectFileAccess Allow include file to count phrases.
     *
     * @return int
     */
    public function count($allowDirectFileAccess = false)
    {
    }
    //endregion
    /**
     * Returns string fiile content.
     *
     * @return string|bool
     */
    public function getContents()
    {
    }
    /**
     * Puts data sting into file.
     *
     * @param string $data Data to save.
     * @param int $flags Flag to operate previous content @see Main\IO\File::REWRITE | Main\IO\File::APPEND.
     *
     * @return bool|int
     * @throws Main\IO\FileNotFoundException
     */
    public function putContents($data, $flags = self::REWRITE)
    {
    }
    /**
     * Compares two files and returns excess amount of phrases.
     *
     * @param self $ethalon File to compare.
     *
     * @return bool|int
     */
    public function countExcess(self $ethalon)
    {
    }
    /**
     * Compares two files and returns deficiency amount of phrases.
     *
     * @param self $ethalon File to compare.
     *
     * @return bool|int
     */
    public function countDeficiency(self $ethalon)
    {
    }
}