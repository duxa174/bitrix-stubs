<?php

namespace Bitrix\Mail;

class Imap
{
    const LOG_LEVEL_WRITE = 1;
    const LOG_LEVEL_READ = 2;
    const ERR_CONNECT = 101;
    const ERR_REJECTED = 102;
    const ERR_COMMUNICATE = 103;
    const ERR_EMPTY_RESPONSE = 104;
    const ERR_BAD_SERVER = 105;
    const ERR_STARTTLS = 201;
    const ERR_COMMAND_REJECTED = 202;
    const ERR_CAPABILITY = 203;
    const ERR_AUTH = 204;
    const ERR_AUTH_MECH = 205;
    const ERR_AUTH_OAUTH = 206;
    const ERR_LIST = 207;
    const ERR_SELECT = 208;
    const ERR_SEARCH = 209;
    const ERR_FETCH = 210;
    const ERR_APPEND = 211;
    const ERR_STORE = 212;
    protected $stream, $errors;
    protected $sessState, $sessCapability, $sessCounter, $sessUntagged, $sessMailbox;
    protected $logLevel = 0, $logPath;
    protected $options = array();
    protected static $atomRegex = '[^\\x00-\\x20\\x22\\x25\\x28-\\x2a\\x5c\\x5d\\x7b\\x7f-\\xff]+';
    protected static $qcharRegex = '[^\\x00\\x0a\\x0d\\x22\\x5c\\x80-\\xff]|\\x5c[\\x5c\\x22]';
    protected static $qcharExtRegex = '[^\\x00\\x0a\\x0d\\x22\\x5c]|\\x5c[\\x5c\\x22]';
    // #119098
    protected static $astringRegex = '[^\\x00-\\x20\\x22\\x25\\x28-\\x2a\\x5c\\x7b\\x7f-\\xff]+';
    public function __construct($host, $port, $tls, $strict, $login, $password, $encoding = null)
    {
    }
    public function __destruct()
    {
    }
    protected function disconnect()
    {
    }
    protected function reset()
    {
    }
    public function getState()
    {
    }
    public function connect(&$error)
    {
    }
    protected function starttls(&$error)
    {
    }
    protected function capability(&$error)
    {
    }
    public function authenticate(&$error)
    {
    }
    public function select($mailbox, &$error)
    {
    }
    public function examine($mailbox, &$error)
    {
    }
    /**
     * Connects to server and authenticate client
     *
     * @param string &$error Error message.
     * @return boolean
     */
    public function singin(&$error)
    {
    }
    public function fetch($uid, $mailbox, $range, $select, &$error)
    {
    }
    /**
     * Returns unseen messages count
     *
     * @param string $mailbox Mailbox name.
     * @param string &$error Error message.
     * @return int|false
     */
    public function getUnseen($mailbox, &$error)
    {
    }
    public function getNew($mailbox, $uidMin, $uidMax, &$error)
    {
    }
    public function getUidRange($mailbox, &$error)
    {
    }
    public function listex($reference, $pattern, &$error)
    {
    }
    /**
     * Returns mailboxes list
     *
     * @param string $pattern Mailbox name pattern.
     * @param string &$error Error message.
     * @return array|false
     */
    public function listMailboxes($pattern, &$error, $flat = false)
    {
    }
    public function listMessages($mailbox, &$uidtoken, &$error)
    {
    }
    /**
     * Adds message
     *
     * @param string $mailbox Mailbox name.
     * @param string $data Message.
     * @param string &$error Error message.
     * @return string|false
     */
    public function addMessage($mailbox, $data, &$error)
    {
    }
    public function searchByHeader($uid, $mailbox, array $header, &$error)
    {
    }
    public function append($mailbox, array $flags, \DateTime $internaldate, $data, &$error)
    {
    }
    public function moveMails($ids, $folderFrom, $folderTo)
    {
    }
    public function move($ids, $folderFrom, $folderTo)
    {
    }
    public function copyMailToFolder($ids, $mailboxName, $folder)
    {
    }
    public function unseen($ids, $folder)
    {
    }
    public function seen($ids, $folder)
    {
    }
    /**
     * @param $id
     * @param $mailboxName
     * @return Main\Result
     */
    public function delete($id, $mailboxName)
    {
    }
    /**
     * @param int|array $ids
     * @param $error
     * @return bool|null|string|string[]
     */
    private function expunge(&$error)
    {
    }
    /**
     * @param int|array $ids
     * @param $flags
     * @param $error
     * @param bool $isUid
     * @param bool $isRemoveFlags
     * @return bool|null|string|string[]
     */
    private function store($ids, $flags, &$error, $isUid = true, $isRemoveFlags = false)
    {
    }
    public function updateMessageFlags($mailbox, $id, $flags, &$error)
    {
    }
    /**
     * Returns message
     *
     * @param string $mailbox Mailbox name.
     * @param int $id Message ID.
     * @param string $section Message section.
     * @param string &$error Error message.
     * @return string|false
     */
    public function getMessage($mailbox, $id, $section, &$error)
    {
    }
    public function isExistsDir($mailbox, &$error)
    {
    }
    public function ensureEmpty($mailbox, &$error)
    {
    }
    protected function getUntagged($regex, $unset = false)
    {
    }
    protected function getTag($next = false)
    {
    }
    protected function executeCommand($command, &$error)
    {
    }
    protected function exchange($data, &$error)
    {
    }
    protected function sendData($data)
    {
    }
    protected function readBytes($bytes)
    {
    }
    protected function readLine()
    {
    }
    protected function readResponse()
    {
    }
    protected static function prepareString($data)
    {
    }
    protected static function escapeQuoted($data)
    {
    }
    protected static function unescapeQuoted($data)
    {
    }
    protected function encodeUtf7Imap($data)
    {
    }
    protected function decodeUtf7Imap($data)
    {
    }
    private function prepareIdsParam($idsData)
    {
    }
    protected function errorMessage($errors, $details = null)
    {
    }
    public function getErrors()
    {
    }
    /**
     * Returns error message
     *
     * @param int $code Error code.
     * @return string
     */
    public static function decodeError($code)
    {
    }
    protected function writeToLog($data)
    {
    }
}