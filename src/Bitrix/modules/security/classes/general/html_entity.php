<?php

class CSecurityHtmlEntity
{
    private static $htmlMnemonics = array("html" => array("/&colon;/i", "/&tab;/i", "/&newline;/i"), "text" => array(":", "\r", "\n"));
    /**
     * Decode characters presented as &#123;
     *
     * @param string $entity
     * @return string
     */
    protected static function decodeCb($entity)
    {
    }
    /**
     * Decode characters presented as  &#xAB;
     *
     * @param string $entity
     * @return string
     */
    protected static function decodeCbHex($entity)
    {
    }
    /**
     * Decodes string from html codes &#***; but only a-zA-Z:().=, because only these are used in auditors
     * One pass!
     *
     * @param string $string
     * @return string
     */
    protected static function decode($string)
    {
    }
    /**
     * Recursive decodes string from html codes &#***; but only a-zA-Z:().=, because only these are used in auditors
     *
     * @param string $pString
     * @return string
     */
    public static function decodeString($pString)
    {
    }
}