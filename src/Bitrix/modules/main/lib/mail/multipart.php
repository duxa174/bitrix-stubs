<?php

namespace Bitrix\Main\Mail;

/**
 * Class Multipart
 * @package Bitrix\Main\Mail
 */
class Multipart extends \Bitrix\Main\Mail\Part
{
    const MIXED = 'multipart/mixed';
    const ALTERNATIVE = 'multipart/alternative';
    const RELATED = 'multipart/related';
    /** @var Multipart[]|Part[] $parts Parts. */
    protected $parts = [];
    /** @var string $uniqueString Unique string. */
    protected $uniqueString;
    /** @var string $eol Symbol of end-of-line. */
    protected $eol;
    /**
     * Multipart constructor.
     */
    public function __construct()
    {
    }
    /**
     * Set EOL.
     *
     * @param string $eol
     * @return $this
     */
    public function setEol($eol)
    {
    }
    /**
     * Set content type.
     *
     * @param string $type Type.
     * @return $this
     */
    public function setContentType($type)
    {
    }
    /**
     * Add part.
     *
     * @param Part $part Part.
     * @return $this
     */
    public function addPart(\Bitrix\Main\Mail\Part $part)
    {
    }
    /**
     * Convert object to string.
     *
     * @return string
     */
    public function toStringHeaders()
    {
    }
    /**
     * Convert object to string.
     *
     * @return string
     */
    public function toStringBody()
    {
    }
    /**
     * Get part count.
     *
     * @return integer
     */
    protected function getPartCount()
    {
    }
    /**
     * Get boundary.
     *
     * @param string $contentType Content type.
     * @return integer
     */
    protected function getBoundary($contentType = null)
    {
    }
}