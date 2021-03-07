<?php

namespace Bitrix\Perfmon\Sql;

class Token
{
    const T_WHITESPACE = 0;
    const T_STRING = 1;
    const T_CHAR = 2;
    const T_SINGLE_QUOTE = 3;
    const T_DOUBLE_QUOTE = 4;
    const T_BACK_QUOTE = 5;
    const T_SQUARE_QUOTE = 6;
    const T_COMMENT = 7;
    public $type;
    public $text;
    public $upper;
    public $line;
    public $level;
    /**
     * @param integer $type Type of the token.
     * @param string $text Text of the token.
     */
    function __construct($type, $text)
    {
    }
    /**
     * Sets new text for the token.
     * <p>
     * And updates member $upper properly.
     *
     * @param string $text New text.
     *
     * @return void
     */
    function setText($text)
    {
    }
    /**
     * Adds new text for the token.
     * <p>
     * And updates member $upper properly.
     *
     * @param string $text A chunk to be added.
     *
     * @return void
     */
    function appendText($text)
    {
    }
}
class Tokenizer
{
    protected $index = 0;
    protected $bookmark = 0;
    /** @var array[Token] */
    protected $tokens = array();
    /**
     * Splits a text into tokens, creates new Tokenizer object, and returns it.
     *
     * @param string $sql Sql text.
     *
     * @return Tokenizer
     */
    public static function createFromString($sql)
    {
    }
    /**
     * Creates new Tokenizer objects and sets its tokens into given.
     *
     * @param array[Token] $tokens New tokens.
     *
     * @return Tokenizer
     */
    public static function createFromTokens(array $tokens)
    {
    }
    /**
     * Returns all the tokens.
     *
     * @return array[Token]
     */
    public function getTokens()
    {
    }
    /**
     * Resets internal state.
     *
     * @return void
     */
    public function resetState()
    {
    }
    /**
     * Remembers current position.
     *
     * @return void
     * @see Tokenizer::restoreBookmark
     */
    public function setBookmark()
    {
    }
    /**
     * Restores previously remembered position.
     *
     * @return void
     * @see Tokenizer::setBookmark
     */
    public function restoreBookmark()
    {
    }
    /**
     * Moves current position one step back.
     *
     * @return void
     */
    public function putBack()
    {
    }
    /**
     * Checks if end of tokens reached.
     *
     * @return boolean
     */
    public function endOfInput()
    {
    }
    /**
     * Returns current token.
     * <p>
     * Leaves position intact.
     *
     * @return Token
     */
    public function getCurrentToken()
    {
    }
    /**
     * Returns next token.
     * <p>
     * Advances position one step forward.
     *
     * @return Token
     */
    public function nextToken()
    {
    }
    /**
     * Skips all whitespace and commentaries.
     *
     * @return void
     */
    public function skipWhiteSpace()
    {
    }
    /**
     * Checks if current token text is equal to $text.
     *<p>
     *In case of success advances position one step forward.
     *
     * @param string $text Text to compare.
     *
     * @return boolean
     */
    public function testUpperText($text)
    {
    }
    /**
     * Checks if current token text is equal to $text.
     *<p>
     *In case of success advances position one step forward.
     *
     * @param string $text Text to compare.
     *
     * @return boolean
     */
    public function testText($text)
    {
    }
    /**
     * Internal method to split text into tokens and store them.
     *
     * @param string $sql Sql text.
     *
     * @return void
     */
    private function _tokenize($sql)
    {
    }
    /**
     * Internal method to assign each token corresponded source code line number.
     *
     * @return void
     */
    private function makeLines()
    {
    }
    /**
     * Internal method to mark braces level on the tokens.
     *
     * @return void
     */
    private function makeParenthesis()
    {
    }
}