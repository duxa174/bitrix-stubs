<?php

class CSupportSearch
{
    static $searchModule;
    const TABLE_NAME = "b_ticket_search";
    static function err_mess()
    {
    }
    public static function getSql($query)
    {
    }
    /**
     * @deprecated
     */
    function GetFilterQuery($q, $idName, $titleName, $messageName, &$error)
    {
    }
    /**
     * @deprecated
     */
    function PrepareQuery($q, $idName, $titleName, $messageName, &$error)
    {
    }
    /**
     * @deprecated
     */
    function ParseQ($q)
    {
    }
    /**
     * @deprecated
     */
    function ParseStr($qwe, $default_op = "&")
    {
    }
    static function CheckModule()
    {
    }
    static function isIndexExists()
    {
    }
    /**
     * @deprecated
     */
    static function GetSQLfilter($s, $idName, $titleName, $messageName)
    {
    }
    /**
     * @deprecated
     */
    static function StrInEXISTS($and, $idName, $sign, $key)
    {
    }
    /**
     * @param integer|array $ticket ticket ID or ticket fetched row with ID, SITE_ID, TITLE
     * @param null|array $messages Message rows with MESSAGE; if null - will be fetched automatically
     *
     * @return boolean
     */
    public static function indexTicket($ticket, $messages = \null)
    {
    }
    public static function reindexTicket($ticket, $messages = \null)
    {
    }
    public static function indexAllTickets($startFromId = 0, $timeLimit = 10)
    {
    }
    public static function reindexAllTickets($startFromId = 0, $timeLimit = 10)
    {
    }
    protected static function performAllTicketsIndexing($startFromId = 0, $timeLimit = 10, $removeOldIndex = \false)
    {
    }
    /**
     * @deprecated
     */
    static function WriteWordsInTable($M_ID, $SITE_ID, $s)
    {
    }
    /**
     * @deprecated
     */
    static function ReindexMessages($firstID, $periodS = 8)
    {
    }
}