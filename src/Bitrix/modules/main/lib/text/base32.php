<?php

namespace Bitrix\Main\Text;

class Base32
{
    /**
     * Table for encoding/decoding base32, RFC 4648/3548
     *
     * @var array $alphabet
     */
    private static $alphabet = array('A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7, 'I' => 8, 'J' => 9, 'K' => 10, 'L' => 11, 'M' => 12, 'N' => 13, 'O' => 14, 'P' => 15, 'Q' => 16, 'R' => 17, 'S' => 18, 'T' => 19, 'U' => 20, 'V' => 21, 'W' => 22, 'X' => 23, 'Y' => 24, 'Z' => 25, 2 => 26, 3 => 27, 4 => 28, 5 => 29, 6 => 30, 7 => 31, '=' => 32);
    private static $encodeAlphabet = null;
    /**
     * Encode data to Base32 string
     *
     * @param string $string Data to encode.
     * @return string Base32 encoded data.
     * @throws ArgumentTypeException
     */
    public static function encode($string)
    {
    }
    /**
     * Decode Base32 encoded string
     *
     * @param string $base32String Base32 encoded string.
     * @throws ArgumentTypeException
     * @throws DecodingException
     * @return string Original data.
     */
    public static function decode($base32String)
    {
    }
    /**
     * Split binary string to chunks
     *
     * @param string $binaryString The string to be chunked.
     * @param int $bits The chunk length.
     * @return array
     */
    private static function chunk($binaryString, $bits)
    {
    }
}