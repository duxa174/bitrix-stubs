<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Functions for interacting with ASN.1 data streams.
 *
 * Note that this class only implements a small subset of the ASN.1 DER, and should
 * not be used as a general-purpose ASN.1 encoder/decoder.
 */
class ASN1
{
    const UNIVERSAL_CLASS = 0x0;
    const APPLICATION_CLASS = 0x40;
    const CONTEXT_CLASS = 0x80;
    const PRIVATE_CLASS = 0xc0;
    const INTEGER_TYPE = 0x2;
    const BIT_STRING = 0x3;
    const OCTET_STRING = 0x4;
    const NULL_TYPE = 0x5;
    const OID = 0x6;
    const SEQUENCE = 0x10;
    /**
     * Reads a DER stream and decodes a single object
     *
     * @param string $der the data stream
     * @param int $offset the offset of the data stream containing the object
     * to decode
     * @param mixed &$data the decoded object
     * @param bool $ignore_bit_strings whether to refrain from moving the
     * offset when reading a bit string - this allows the caller to read the
     * bit string manually
     * @return int the number of bytes read, or 0 if there is an error
     */
    static function readDER($der, $offset, &$data, $ignore_bit_strings = FALSE)
    {
    }
    /**
     * Encodes a value into a DER object.
     *
     * @param int $type the DER tag of the object
     * @param string $value the value to encode
     * @param bool $primitive whether the object is of a primitive or
     * constructed type
     * @return string the encoded object
     */
    static function encodeDER($type, $value = '', $primitive = true, $class = 0)
    {
    }
    /**
     * Decodes a DER-encoded object identifier into a string.
     *
     * @param $string oid the binary DER-encoded object identifier
     * @return $string the decoded string
     */
    static function decodeOID($oid)
    {
    }
    /**
     * Encodes a string into a DER-encoded object identifier.
     *
     * @param $string $str the object identifier string
     * @return $string the binary DER-encoded object identifier
     */
    static function encodeOID($str)
    {
    }
}