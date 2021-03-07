<?php

namespace Bitrix\Translate\IO;

class CsvFile extends \Bitrix\Translate\IO\File
{
    // fields type with delimiter,
    public const FIELDS_TYPE_FIXED_WIDTH = 'F';
    // fields type fixed width
    public const FIELDS_TYPE_WITH_DELIMITER = 'R';
    public const ERROR_32K_FIELD_LENGTH = '32k_field_length';
    /**
     * fields type
     * @var string
     */
    protected $fieldsType = self::FIELDS_TYPE_WITH_DELIMITER;
    // field delimiter
    public const DELIMITER_TAB = "\t";
    public const DELIMITER_ZPT = ',';
    public const DELIMITER_SPS = ' ';
    public const DELIMITER_TZP = ';';
    /**
     * field delimiter
     * @var string
     */
    protected $fieldDelimiter = self::DELIMITER_TZP;
    // UTF-8 Byte-Order Mark
    public const BOM_TYPE_UTF8 = "﻿";
    /**
     * UTF Byte-Order Mark.
     * @var string
     */
    protected $bomMark = self::BOM_TYPE_UTF8;
    /**
     * First bites is file are the Byte-Order Mark.
     * @var bool
     */
    protected $hasBom = false;
    public const LINE_DELIMITER_WIN = "\r\n";
    public const LINE_DELIMITER_UNIX = "\r";
    /**
     * line delimiter
     * @var string
     */
    protected $rowDelimiter = self::LINE_DELIMITER_WIN;
    /**
     * array of delimiters positions in fixed width case
     * @var array
     */
    protected $widthMap = [];
    /**
     * The first row is columns titles.
     * @var bool
     */
    protected $firstHeader = false;
    /**
     * File length.
     * @var string
     */
    private $fileSize;
    /**
     * Current file position for fetch.
     * @var int
     */
    private $currentPosition = 0;
    /** @var string  */
    private $buffer = '';
    /** @var int  */
    private $bufferPosition = 0;
    /** @var int  */
    private $bufferSize = 0;
    /**
     * Opens file for reading.
     *
     * @return bool
     */
    public function openLoad() : bool
    {
    }
    /**
     * Opens file for writing.
     *
     * @param string $mode File writing mode.
     * @see \Bitrix\Main\IO\FileStreamOpenMode
     *
     * @return bool
     */
    public function openWrite(string $mode = \Bitrix\Main\IO\FileStreamOpenMode::WRITE) : bool
    {
    }
    /**
     * Sets UTF Byte-Order Mark.
     *
     * @param string $mark BOM mark.
     * @return self
     */
    public function setUtf8Bom(string $mark = self::BOM_TYPE_UTF8) : self
    {
    }
    /**
     * Tells true if UTF Byte-Order Mark exists in the file.
     *
     * @return bool
     */
    public function hasUtf8Bom() : bool
    {
    }
    /**
     * Sets if UTF-8 Byte-Order Mark exists.
     *
     * @param bool $exists Flag value to setup.
     *
     * @return self
     */
    public function prefaceWithUtf8Bom(bool $exists = true) : self
    {
    }
    /**
     * Measures byte length of the string.
     * @param string $data
     * @return int
     */
    protected function getStringByteLength(string $data) : int
    {
    }
    /**
     * Check UTF-8 Byte-Order Mark
     * @return bool
     */
    public function checkUtf8Bom() : bool
    {
    }
    /**
     * Set fields type.
     *
     * @param string $fieldsType Type.
     * @return self
     */
    public function setFieldsType(string $fieldsType = self::FIELDS_TYPE_WITH_DELIMITER) : self
    {
    }
    /**
     * Sets up delimiter character.
     *
     * @param string $fieldDelimiter Char.
     *
     * @return self
     */
    public function setFieldDelimiter(string $fieldDelimiter = self::DELIMITER_TZP) : self
    {
    }
    /**
     * Sets up row delimiter character.
     *
     * @param string $rowDelimiter Char.
     *
     * @return self
     */
    public function setRowDelimiter(string $rowDelimiter = self::LINE_DELIMITER_WIN) : self
    {
    }
    /**
     * Sets first row as a header.
     *
     * @param bool $firstHeader Flag.
     * @return self
     */
    public function setFirstHeader(bool $firstHeader = false) : self
    {
    }
    /**
     * Tells true if first row is a header.
     *
     * @return bool
     */
    public function getFirstHeader() : bool
    {
    }
    /**
     * Sets up fields widths.
     *
     * @param int[] $mapFields Fields widths.
     * @return self
     */
    public function setWidthMap(array $mapFields) : self
    {
    }
    /**
     * Fetches data row as delimited columns.
     *
     * @return array|null
     */
    protected function fetchDelimiter() : ?array
    {
    }
    /**
     * Fetches data row as fixed width columns.
     *
     * @return array|null
     */
    protected function fetchWidth() : ?array
    {
    }
    /**
     * Fetch data row.
     *
     * @return array|null
     */
    public function fetch() : ?array
    {
    }
    /**
     * Moves reading position and reads file into buffer.
     *
     * @return void
     */
    protected function incrementCurrentPosition() : void
    {
    }
    /**
     * Moves reading position to the first byte.
     *
     * @return void
     */
    public function moveFirst() : void
    {
    }
    /**
     * Returns reading position.
     *
     * @return int
     */
    public function getPos() : int
    {
    }
    /**
     * Sets new reading position.
     *
     * @param int $position Reading position.
     *
     * @return void
     */
    public function setPos(int $position = 0) : void
    {
    }
    /**
     * Writes data fields into file as row.
     *
     * @param array $fields Data field.
     * 
     * @return bool
     */
    public function put(array $fields) : bool
    {
    }
}