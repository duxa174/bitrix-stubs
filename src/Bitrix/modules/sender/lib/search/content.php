<?php

namespace Bitrix\Sender\Search;

/**
 * Class Content
 * @package Bitrix\Sender\Search
 */
class Content
{
    const TEXT = 0;
    const EMAIL = 1;
    const PHONE = 2;
    const USER = 3;
    const HTML_LAYOUT = 4;
    /** @var array $data Data. */
    private $data = [];
    /** @var array $callbacks Callback list. */
    private $callbacks = [];
    /**
     * Encode text.
     *
     * @param string $text Text.
     * @return string
     */
    public static function encodeText($text)
    {
    }
    /**
     * Get string.
     *
     * @return string
     */
    public function getString()
    {
    }
    /**
     * Add callback.
     *
     * @param callable $callback Callback.
     * @return $this
     * @throws ArgumentException
     */
    public function addCallback($callback)
    {
    }
    /**
     * Clear.
     *
     * @return $this
     */
    public function clear()
    {
    }
    /**
     * Add.
     *
     * @param string $value Value.
     * @param integer $typeId Type ID.
     * @param integer|null $length Length.
     * @return $this
     */
    public function add($value, $typeId = self::TEXT, $length = null)
    {
    }
    /**
     * Add one field from fields.
     *
     * @param array $fields Fields.
     * @param string $name Name.
     * @param integer $typeId Type ID.
     * @param integer|null $length Length.
     * @return $this
     */
    public function addField(array $fields, $name, $typeId = self::TEXT, $length = null)
    {
    }
    /**
     * Add text.
     *
     * @param string $text Text.
     * @param integer|null $length Length.
     * @return $this
     */
    public function addText($text, $length = null)
    {
    }
    /**
     * Add html layout.
     *
     * @param string $layout Layout.
     * @param integer|null $length Length.
     * @return $this
     */
    public function addHtmlLayout($layout, $length = null)
    {
    }
    /**
     * Add recipient.
     *
     * @param string $code Code.
     * @param integer $typeId Type ID.
     * @return $this
     */
    public function addRecipient($code, $typeId)
    {
    }
    /**
     * Add email.
     *
     * @param string $email Email.
     * @return $this
     */
    public function addEmail($email)
    {
    }
    /**
     * Add phone.
     *
     * @param string $phone Phone.
     * @return $this
     */
    public function addPhone($phone)
    {
    }
    /**
     * Add user by id.
     *
     * @param integer $userID User ID.
     * @return $this
     */
    public function addUserById($userID)
    {
    }
    protected static function convertBodyHtmlToText($body)
    {
    }
}