<?php

namespace Bitrix\Main\Search;

class MapBuilder
{
    /** @var array [search_token => true] */
    protected $tokens = array();
    /**
     * StringBuilder constructor.
     */
    public function __construct()
    {
    }
    /**
     * Creates instance of the StringBuilder
     * @return static
     */
    public static function create()
    {
    }
    /**
     * Adds arbitrary integer content to the builder.
     * @param string $token Arbitrary string.
     * @return $this.
     */
    public function addText($token)
    {
    }
    /**
     * Adds digit content to the builder.
     * @param int $token .
     * @return $this.
     */
    public function addInteger($token)
    {
    }
    /**
     * Adds phone number to the builder.
     * @param string $phone Phone number.
     * @return $this
     */
    public function addPhone($phone)
    {
    }
    /**
     * Adds email to the builder.
     * @param string $email Email.
     * @return $this
     */
    public function addEmail($email)
    {
    }
    /**
     * Adds full user name to the builder.
     * @param array|int $userId Id of the user.
     * @return $this
     */
    public function addUser($userId)
    {
    }
    /**
     * Builds search string.
     * @return string
     */
    public function build()
    {
    }
}