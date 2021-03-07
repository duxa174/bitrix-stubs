<?php

/**
 * CBXSanitizer
 * Class to cut all tags and attributies from html not contained in white list
 *
 * Example to use:
 * <code>
 * $Sanitizer = new CBXSanitizer;
 *
 * $Sanitizer->SetLevel(CBXSanitizer::SECURE_LEVEL_MIDDLE);
 * or
 * $Sanitizer->AddTags( array (
 * 								'a' = > array('href','id','style','alt'...),
 * 								'br' => array(),
 * 								.... ));
 *
 * $Sanitizer->SanitizeHtml($html);
 * </code>
 *
 */
class CBXSanitizer
{
    /**
     * Security levels
     */
    const SECURE_LEVEL_CUSTOM = 0;
    const SECURE_LEVEL_HIGH = 1;
    const SECURE_LEVEL_MIDDLE = 2;
    const SECURE_LEVEL_LOW = 3;
    const TABLE_TOP = 0;
    const TABLE_CAPT = 1;
    const TABLE_GROUP = 2;
    const TABLE_ROWS = 3;
    const TABLE_COLS = 4;
    const ACTION_DEL = 'del';
    const ACTION_ADD = 'add';
    const ACTION_DEL_WITH_CONTENT = 'del_with_content';
    /**
     * @deprecated For compability only will be erased next versions
     * @var mixed
     */
    protected static $arOldTags = array();
    protected $arHtmlTags = array();
    protected $bHtmlSpecChars = \true;
    protected $bDelSanitizedTags = \true;
    protected $bDoubleEncode = \true;
    protected $secLevel = self::SECURE_LEVEL_HIGH;
    protected $additionalAttrs = array();
    protected $arNoClose = array('br', 'hr', 'img', 'area', 'base', 'basefont', 'col', 'frame', 'input', 'isindex', 'link', 'meta', 'param');
    protected $localAlph;
    protected $arTableTags = array('table' => self::TABLE_TOP, 'caption' => self::TABLE_CAPT, 'thead' => self::TABLE_GROUP, 'tfoot' => self::TABLE_GROUP, 'tbody' => self::TABLE_GROUP, 'tr' => self::TABLE_ROWS, 'th' => self::TABLE_COLS, 'td' => self::TABLE_COLS);
    /**
     * Tags witch will be cut with their content
     * @var array
     */
    protected $delTagsWithContent = ['script', 'style'];
    /**
     * CBXSanitizer constructor.
     */
    public function __construct()
    {
    }
    /**
    * Allow additional attributes in html.
    * @param array $attrs Additional attrs
    * Example:
    			$sanitizer->allowAttributes(array(
    				'aria-label' => array(
    						'tag' => function($tag)
    						{
    							return ($tag == 'div');
    						},
    						'content' => function($value)
    						{
    							return !preg_match("#[^\\s\\w\\-\\#\\.;]#i" . BX_UTF_PCRE_MODIFIER, $value);
    						}
    					)
    			));
    * @return void
    */
    public function allowAttributes(array $attrs)
    {
    }
    /**
     * Adds HTML tags and attributes to white list
     * @param mixed $arTags array('tagName1' = > array('attribute1','attribute2',...), 'tagName2' => ........)
     * @return int count of added tags
     */
    public function AddTags($arTags)
    {
    }
    /**
     * @see AddTags()
     */
    public function UpdateTags($arTags)
    {
    }
    /**
     * Deletes tags from white list
     * @param mixed $arTagNames array('tagName1','tagname2',...)
     * @return int count of deleted tags
     */
    public function DelTags($arTagNames)
    {
    }
    /**
     * @param array $arDeleteAttrs
     */
    public function DeleteAttributes(array $arDeleteAttrs)
    {
    }
    /**
     * Deletes all tags from white list
     */
    public function DelAllTags()
    {
    }
    /**
     *  If is turned off Sanitizer will not encode existing html entities,
     *  in text blocks.
     *  The default is to convert everything.
     *	http://php.net/manual/ru/function.htmlspecialchars.php (double_encode)
     * @param bool $bApply true|false
     */
    public function ApplyDoubleEncode($bApply = \true)
    {
    }
    /**
     * Apply or not function htmlspecialchars to filtered tags and text
     * !WARNING! if DeleteSanitizedTags = false and ApplyHtmlSpecChars = false
     * html will not be sanitized!
     * @param bool $bApply true|false
     * @deprecated
     */
    public function ApplyHtmlSpecChars($bApply = \true)
    {
    }
    /**
     * Delete or not filtered tags
     * !WARNING! if DeleteSanitizedTags = false and ApplyHtmlSpecChars = false
     * html will not be sanitized!
     * @param bool $bApply true|false
     */
    public function DeleteSanitizedTags($bApply = \true)
    {
    }
    /**
     * Sets security level from predefined
     * @param int $secLevel { 	CBXSanitizer::SECURE_LEVEL_HIGH
     *							| CBXSanitizer::SECURE_LEVEL_MIDDLE
     *							| CBXSanitizer::SECURE_LEVEL_LOW }
     */
    public function SetLevel($secLevel)
    {
    }
    // Checks if tag's attributes are in white list ($this->arHtmlTags)
    protected function IsValidAttr(&$arAttr)
    {
    }
    protected function encodeAttributeValue(array $attr)
    {
    }
    /**
     * Returns allowed tags and attributies
     * @return string
     */
    public function GetTags()
    {
    }
    /**
     * @deprecated For compability only will be erased next versions
     */
    public static function SetTags($arTags)
    {
    }
    /**
     * @deprecated For compability only will be erased next versions
     */
    public static function Sanitize($html, $secLevel = 'HIGH', $htmlspecialchars = \true, $delTags = \true)
    {
    }
    /**
     * Split html to tags and simple text chunks
     * @param string $html
     * @return array
     */
    protected function splitHtml($html)
    {
    }
    /**
     * Erases, or HtmlSpecChares Tags and attributies wich not contained in white list
     * from inputted HTML
     * @param string $html Dirty HTML
     * @return string filtered HTML
     */
    public function SanitizeHtml($html)
    {
    }
    protected function extractAttributes(string $attrData) : array
    {
    }
    protected function processAttributes(string $attrData, string $currTag) : array
    {
    }
    /**
     * function CleanTable
     * Check if table code is valid, and corrects. If need
     * deletes all text and tags between diferent table tags if $delTextBetweenTags=true.
     * Checks if where are open tags from upper level if not - self-distructs.
     */
    protected function CleanTable(&$seg, &$openTagsStack, $segIndex, $delTextBetweenTags = \true)
    {
    }
    /**
     * Decodes text from codes like &#***, html-entities wich may be coded several times;
     * @param string $str
     * @return string decoded
     * */
    public function Decode($str)
    {
    }
    /*
    Function is used in regular expressions in order to decode characters presented as &#123;
    */
    protected function _decode_cb($in)
    {
    }
    /*
    Function is used in regular expressions in order to decode characters presented as  &#xAB;
    */
    protected function _decode_cb_hex($in)
    {
    }
    /*
    Decodes string from html codes &#***;
    One pass!
    -- Decode only a-zA-Z:().=, because only theese are used in filters
    */
    protected function _decode($str)
    {
    }
    /**
     * @param array $tags
     */
    public function setDelTagsWithContent(array $tags)
    {
    }
    /**
     * @return array
     */
    public function getDelTagsWithContent()
    {
    }
}