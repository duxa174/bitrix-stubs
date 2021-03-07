<?php

namespace Bitrix\Main\UrlPreview;

class HtmlDocument
{
    const MAX_IMAGES = 4;
    const MAX_IMAGE_URL_LENGTH = 255;
    /** @var \Bitrix\Main\Web\Uri */
    protected $uri;
    /** @var string */
    protected $html;
    /** @var  string */
    protected $htmlEncoding;
    /** @var array
     * Allowed keys so far: TITLE, DESCRIPTION, IMAGE
     */
    protected $metadata = array("TITLE" => null, "DESCRIPTION" => null, "IMAGE" => null, "EMBED" => null);
    /** @var array  */
    protected $metaElements = array();
    /** @var array */
    protected $linkElements = array();
    /**
     * HtmlDocument constructor.
     *
     * @param string $html Document HTML code.
     * @param Uri $uri Document's URL.
     */
    public function __construct($html, \Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * Returns Uri of the document
     *
     * @return Uri
     */
    public function getUri()
    {
    }
    /**
     * Returns full html code of the document
     *
     * @return string
     */
    public function getHtml()
    {
    }
    /**
     * Returns true if metadata is complete
     *
     * @return bool
     */
    public function checkMetadata()
    {
    }
    /**
     * Returns metadata, extracted from the page. Should return an array with required key TITLE
     * and optional keys DESCRIPTION and URL
     *
     * @return array|false
     */
    public function getMetadata()
    {
    }
    /**
     * Returns document's TITLE metadata
     *
     * @return string
     */
    public function getTitle()
    {
    }
    /**
     * Sets document's TITLE metadata
     *
     * @param string $title Title.
     * @return void
     */
    public function setTitle($title)
    {
    }
    /**
     * @return string
     */
    public function getDescription()
    {
    }
    /**
     * Sets document's DESCRIPTION metadata
     *
     * @param string $description Description.
     * @return void
     */
    public function setDescription($description)
    {
    }
    /**
     * @return string Main image's url.
     */
    public function getImage()
    {
    }
    /**
     * Sets document's IMAGE metadata
     *
     * @param string $image Main image's url.
     * @return void
     */
    public function setImage($image)
    {
    }
    /**
     * @return string HTML code to embed url to the page.
     */
    public function getEmdbed()
    {
    }
    /**
     * Sets document's EMBED metadata, if site is allowed to be embedded.
     *
     * @param string $embed HTML code for embedding object to the page.
     * @return void
     */
    public function setEmbed($embed)
    {
    }
    /**
     * Sets additional metadata field.
     * @param string $fieldName Name of the field. Expected values:
     * <li>FAVICON: $fieldValue must contain the url of document's favicon
     * <li>IMAGES: $fieldValue must be the array of urls of images, detected in the document
     * <li>In other cases, $fieldValue must contain plain text.
     * @param string $fieldValue Field value.
     * @return void
     */
    public function setExtraField($fieldName, $fieldValue)
    {
    }
    /**
     * Returns value of the additional metadata field
     * @param string $fieldName Name of the field.
     * @return string|null Value of the additional metadata field.
     */
    public function getExtraField($fieldName)
    {
    }
    /**
     * Set HTML document encoding
     *
     * @param string $encoding Document's encoding.
     * @return void
     */
    public function setEncoding($encoding)
    {
    }
    /**
     * @return string Document encoding.
     */
    public function getEncoding()
    {
    }
    /**
     * Auto-detect and set HTML document encoding
     *
     * @return string Detected encoding.
     */
    public function detectEncoding()
    {
    }
    /**
     * Parses html content for attributes of the specified elements and fills $destination array with found attributes
     *
     * @param string $tagName Name of the tag.
     * @return array
     */
    public function extractElementAttributes($tagName)
    {
    }
    /**
     * Returns value of the content attribute
     *
     * @param string $name Value of a name or property attribute.
     * @return string
     * */
    public function getMetaContent($name)
    {
    }
    /**
     * Returns value of the href attribute.
     *
     * @param string $rel Value of the rel attribute.
     * @return string
     */
    public function getLinkHref($rel)
    {
    }
    /**
     * Sanitizes string and converts it to the site's charset.
     *
     * @param string $str Input string.
     * @return string
     */
    protected function filterString($str)
    {
    }
    /**
     * Converts relative url to the absolute, considering document's url.
     * @param string $uri Relative url.
     * @return null|string Absolute url or null if relative url contains errors.
     */
    protected function convertRelativeUriToAbsolute($uri)
    {
    }
    /**
     * Transforms image's URL from relative to absolute and checks length of the resulting URL.
     * @param string $url Image's URL.
     * @return string|null Absolute image's URL, or null if URL is incorrect or too long.
     */
    protected function normalizeImageUrl($url)
    {
    }
    /**
     * Validates mime-type of the image
     * @param string $url Absolute image's URL.
     * @return bool
     */
    protected function validateImage($url)
    {
    }
    /**
     * Returns true if document's site is allowed to be embedded.
     * @return bool
     */
    protected function isEmbeddingAllowed()
    {
    }
}