<?php

namespace Bitrix\Mail\Imap;

/**
 * https://tools.ietf.org/html/rfc3501#section-7.4.2
 *
 * multipart:
 * 	- parts array
 * 	- subtype
 * 	+ params array
 * 	+ disposition array
 * 	+ language
 * 	+ location
 *
 * basic:
 * 	- type
 * 	- subtype
 * 	- params array
 * 	- content id
 * 	- description
 * 	- encoding
 * 	- size
 * 	+ body MD5
 * 	+ disposition array
 * 	+ language
 * 	+ location
 *
 * text:
 * 	- type
 * 	- subtype
 * 	- params array
 * 	- content id
 * 	- description
 * 	- encoding
 * 	- size
 * 	- size in text lines
 * 	+ body MD5
 * 	+ disposition array
 * 	+ language
 * 	+ location
 *
 * message/rfc822:
 * 	- type
 * 	- subtype
 * 	- params array
 * 	- content id
 * 	- description
 * 	- encoding
 * 	- size
 * 	- envelope structure
 * 	- body structure
 * 	- size in text lines
 * 	+ body MD5
 * 	+ disposition array
 * 	+ language
 * 	+ location
 */
class BodyStructure
{
    protected $number;
    protected $data = array();
    protected $isMultipart = false, $partsCount = 0;
    public function __construct(array $bodystructure, $number = null)
    {
    }
    public function getNumber()
    {
    }
    public function getType()
    {
    }
    public function getSubtype()
    {
    }
    public function getParams()
    {
    }
    public function getId()
    {
    }
    public function getEncoding()
    {
    }
    protected function getDispositionIndex()
    {
    }
    public function getDisposition()
    {
    }
    public function isMultipart()
    {
    }
    public function isText()
    {
    }
    public function isAttachment()
    {
    }
    public function isBodyText()
    {
    }
    public function traverse(callable $callback, $flat = false)
    {
    }
}