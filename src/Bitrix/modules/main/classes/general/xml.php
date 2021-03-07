<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CDataXMLNode
{
    var $name;
    var $content;
    /** @var CDataXMLNode[] */
    var $children;
    /** @var CDataXMLNode[] */
    var $attributes;
    var $_parent;
    public function __construct()
    {
    }
    function name()
    {
    }
    function children()
    {
    }
    function textContent()
    {
    }
    function getAttribute($attribute)
    {
    }
    function getAttributes()
    {
    }
    function namespaceURI()
    {
    }
    /**
     * @param $tagname
     * @return CDataXMLNode[]
     */
    function elementsByName($tagname)
    {
    }
    function _SaveDataType_OnDecode(&$result, $name, $value)
    {
    }
    function decodeDataTypes($attrAsNodeDecode = \false)
    {
    }
    function &__toString()
    {
    }
    function __toArray()
    {
    }
}
class CDataXMLDocument
{
    var $version = '';
    var $encoding = '';
    /** @var CDataXMLNode[] */
    var $children;
    var $root;
    public function __construct()
    {
    }
    function elementsByName($tagname)
    {
    }
    function encodeDataTypes($name, $value)
    {
    }
    /* Returns a XML string of the DOM document */
    function &__toString()
    {
    }
    /* Returns an array of the DOM document */
    function &__toArray()
    {
    }
}
class CDataXML
{
    /** @var CDataXMLDocument */
    var $tree;
    var $TrimWhiteSpace;
    var $delete_ns = \true;
    public function __construct($TrimWhiteSpace = \True)
    {
    }
    function Load($file)
    {
    }
    function LoadString($text)
    {
    }
    function &GetTree()
    {
    }
    function &GetArray()
    {
    }
    function &GetString()
    {
    }
    function &SelectNodes($strNode)
    {
    }
    public static function xmlspecialchars($str)
    {
    }
    public static function xmlspecialcharsback($str)
    {
    }
    /**
     * Will return an DOM object tree from the well formed XML.
     *
     * @param string $strXMLText
     * @return CDataXMLDocument
     */
    function __parse(&$strXMLText)
    {
    }
    function __stripComments(&$str)
    {
    }
    /* Parses the attributes. Returns false if no attributes in the supplied string is found */
    function &__parseAttributes($attributeString)
    {
    }
}
/*
Usage:

class OrderLoader
{
	var $errors = array();

	function elementHandler($path, $attr)
	{
		AddMessage2Log(print_r(array($path, $attr), true));
	}

	function nodeHandler(CDataXML $xmlObject)
	{
		AddMessage2Log(print_r($xmlObject, true));
	}
}

$position = false;
$loader = new OrderLoader;

while(true) //this while is cross hit emulation
{
	$o = new CXMLFileStream;
	$o->registerElementHandler("/КоммерческаяИнформация", array($loader, "elementHandler"));
	$o->registerNodeHandler("/КоммерческаяИнформация/Каталог/Товары/Товар", array($loader, "nodeHandler"));
	$o->setPosition($position);

	if ($o->openFile($_SERVER["DOCUMENT_ROOT"]."/upload/081_books_books-books_ru.xml"))
	{
		while($o->findNext())
		{
			//if (time() > $endTime)
			break;
		}

		if ($o->endOfFile())
		{
			break;
		}
		else
		{
			$position = $o->getPosition();
		}
	}
}
*/
class CXMLFileStream
{
    private $fileCharset = \false;
    private $filePosition = 0;
    private $xmlPosition = "";
    private $nodeHandlers = array();
    private $elementHandlers = array();
    private $endNodes = array();
    private $fileHandler = \null;
    private $eof = \false;
    private $readSize = 1024;
    private $buf = "";
    private $bufPosition = 0;
    private $bufLen = 0;
    private $positionStack = array();
    private $elementStack = array();
    /**
     * Registers an handler function which will be called on xml parsed path with CDataXML object as a parameter
     *
     * @param string $nodePath
     * @param mixed $callableHandler
     * @return void
     *
     */
    public function registerNodeHandler($nodePath, $callableHandler)
    {
    }
    /**
     * Registers an handler function which will be called on xml parsed path with path and attributes
     *
     * @param string $nodePath
     * @param mixed $callableHandler
     * @return void
     *
     */
    public function registerElementHandler($nodePath, $callableHandler)
    {
    }
    /**
     * Opens file by it's absolute path. Returns true on success.
     *
     * @param string $filePath
     * @return bool
     *
     */
    public function openFile($filePath)
    {
    }
    /**
     * Returns true when end of the file is reached.
     *
     * @return bool
     *
     */
    public function endOfFile()
    {
    }
    /**
     * Returns current position state needed to continue file parsing process on the next hit.
     *
     * @return array[int]string
     *
     */
    public function getPosition()
    {
    }
    /**
     * Sets the position state returned by getPosition method.
     *
     * @param array[int]string $position
     * @return void
     *
     */
    public function setPosition($position)
    {
    }
    /**
     * Processes file futher. Returns true when there is more work to do. False on the end of file.
     *
     * @return bool
     *
     */
    public function findNext()
    {
    }
    /**
     * Used to read an xml by chunks started with "<" and endex with "<"
     *
     * @param bool $bMB
     * @return bool
     *
     */
    private function getXmlChunk($bMB = \false)
    {
    }
    /**
     * Stores an element into xml path stack.
     *
     * @param bool $bMB
     * @param string $xmlChunk
     * @param string $origChunk
     * @return void
     *
     */
    private function startElement($bMB, $xmlChunk, $origChunk)
    {
    }
    /**
     * Winds tree stack back. Calls (if neccessary) node handlers.
     *
     * @param string $xmlChunk
     * @return void
     *
     */
    private function endElement($xmlChunk)
    {
    }
    /**
     * Reads xml chunk from the file preserving it's position
     *
     * @param int $startPosition
     * @param int $endPosition
     * @return CDataXML|false
     */
    private function readXml($startPosition, $endPosition)
    {
    }
    /**
     * Reads part of the file preserving it's position
     *
     * @param int $startPosition
     * @param int $endPosition
     * @return CDataXML|false
     */
    public function readFilePart($startPosition, $endPosition)
    {
    }
}