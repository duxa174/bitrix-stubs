<?php

namespace Bitrix\Mail;

class Message
{
    //const QUOTE_START_MARKER = '-- Bitrix24 Mail begin ---';
    //const QUOTE_END_MARKER   = '-- Bitrix24 Mail end ---';
    const QUOTE_START_MARKER_HTML = '<div id="srvb24mqsm" style="font-family: \'srvb24mqsm\', serif;">&nbsp;</div>';
    const QUOTE_END_MARKER_HTML = '<div id="qemb24msrv" style="font-family: \'qemb24msrv\', serif;">&nbsp;</div>';
    const QUOTE_HTML_REGEX = '/<div\\s[^>]+srvb24mqsm[^>]+>.*?<\\/div>(.*)<div\\s[^>]+qemb24msrv[^>]+>.*?<\\/div>/is';
    const QUOTE_PLACEHOLDER = '__QUOTE_PLACEHOLDER__';
    protected $type;
    protected $headers, $subject, $from, $to;
    protected $html, $text, $attachments;
    protected $secret;
    public function __construct(array &$message, $type)
    {
    }
    /**
     * Returns quote start marker
     *
     * @param bool $html Html/text switch.
     * @return string
     */
    public static final function getQuoteStartMarker($html = false)
    {
    }
    /**
     * Returns quote end marker
     *
     * @param bool $html Html/text switch.
     * @return string
     */
    public static final function getQuoteEndMarker($html = false)
    {
    }
    /**
     * Returns message attachments count
     *
     * @return int
     */
    public function attachmentsCount()
    {
    }
    /**
     * Returns parsed message text
     *
     * @return string
     */
    protected function parse()
    {
    }
    public static function parseMessage(array &$message)
    {
    }
    /**
     * Returns parsed reply text
     *
     * @param array &$message Message.
     * @return string
     */
    public static function parseReply(array &$message)
    {
    }
    /**
     * Returns parsed forward text
     *
     * @param array &$message Message.
     * @return string
     */
    public static function parseForward(array &$message)
    {
    }
    /**
     * Extracts quote from message html
     *
     * @param string &$html Message html.
     * @return string
     */
    protected function splitHtml(&$html)
    {
    }
    /**
     * Extracts quote from message text
     *
     * @param string &$text Message text.
     * @return string
     */
    protected function splitText(&$text)
    {
    }
    /**
     * Returns full reply/forward head score
     *
     * @param string &$head Full reply/forward head.
     * @return int
     */
    protected function scoreFullHead(&$head)
    {
    }
    /**
     * Returns short reply/forward head score
     *
     * @param string &$head Short reply/forward head.
     * @return int
     */
    protected function scoreShortHead(&$head)
    {
    }
    /**
     * Returns significant reply text
     *
     * @param string|array &$text Reply text.
     * @return string
     */
    protected function removeReplyHead(&$text)
    {
    }
    /**
     * Returns significant forward text
     *
     * @param string|array &$text Forward text.
     * @return string
     */
    protected function removeForwardHead(&$text)
    {
    }
    /**
     * Returns text without bb-codes
     *
     * @param string|array &$text Text.
     * @return string
     */
    protected static function reduceTags(&$text)
    {
    }
    /**
     * Returns non-paired bb-codes only
     *
     * @param string|array &$text Text.
     * @return string
     */
    public static function reduceHead(&$text)
    {
    }
}