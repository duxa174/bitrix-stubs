<?php

namespace Bitrix\Main\Mail;

class Mail
{
    protected $settingServerMsSmtp;
    protected $settingMailFillToEmail;
    protected $settingMailConvertMailHeader;
    protected $settingMailAddMessageId;
    protected $settingConvertNewLineUnixToWindows;
    protected $settingMailAdditionalParameters;
    protected $settingMaxFileSize;
    protected $settingAttachImages;
    protected $settingServerName;
    protected $settingMailEncodeBase64;
    protected $settingMailEncodeQuotedPrintable;
    protected $eol;
    protected $attachment;
    protected $generateTextVersion;
    protected $charset;
    protected $contentType;
    protected $messageId;
    protected $filesReplacedFromBody;
    protected $trackLinkProtocol;
    protected $trackReadLink;
    protected $trackClickLink;
    protected $trackClickUrlParams;
    protected $bitrixDirectory;
    protected $trackReadAvailable;
    protected $trackClickAvailable;
    protected $contentTransferEncoding = '8bit';
    protected $to;
    protected $subject;
    protected $headers = [];
    protected $body;
    protected $additionalParameters;
    /** @var  Context */
    protected $context;
    /** @var  Multipart */
    protected $multipart;
    /** @var  Multipart */
    protected $multipartRelated;
    /** @var  array */
    protected $blacklistedEmails = [];
    /** @var  array */
    protected $blacklistCheckedEmails = [];
    /** @var  bool */
    protected $useBlacklist = true;
    /** @var array  */
    protected static $emailHeaders = ['to', 'cc', 'bcc'];
    /**
     * Mail constructor.
     *
     * @param array $mailParams Mail parameters.
     */
    public function __construct(array $mailParams)
    {
    }
    /**
     * Create instance.
     *
     * @param array $mailParams Mail parameters.
     * @return static
     */
    public static function createInstance(array $mailParams)
    {
    }
    /**
     * Send email.
     *
     * @param array $mailParams Mail parameters.
     * @return bool
     */
    public static function send($mailParams)
    {
    }
    /**
     * Return true if mail can be sent.
     *
     * @return bool
     */
    public function canSend()
    {
    }
    /**
     * Init settings.
     *
     * @return void
     */
    public function initSettings()
    {
    }
    /**
     * Set additional parameters.
     *
     * @param string $additionalParameters Additional parameters.
     * @return void
     */
    public function setAdditionalParameters($additionalParameters = '')
    {
    }
    /**
     * Set body.
     *
     * @param string $bodyPart Html or text of body.
     * @return void
     */
    public function setBody($bodyPart)
    {
    }
    /**
     * Return true if mail has attachment.
     *
     * @return bool
     */
    public function hasAttachment()
    {
    }
    /**
     * Return true if mail has image attachment.
     *
     * @param bool $checkRelated Check image as related.
     * @return bool
     */
    public function hasImageAttachment($checkRelated = false)
    {
    }
    /**
     * Set attachment.
     *
     * @return void
     */
    public function setAttachment()
    {
    }
    private function isAttachmentImage(&$attachment, $checkRelated = false)
    {
    }
    private function isFileLimitExceeded($fileSize, &$summarySize)
    {
    }
    /**
     * Set headers.
     *
     * @param array $headers Headers.
     * @return $this
     */
    public function setHeaders(array $headers)
    {
    }
    /**
     * Set subject.
     *
     * @param string $subject Subject.
     * @return $this
     */
    public function setSubject($subject)
    {
    }
    /**
     * Set to.
     *
     * @param string $to To.
     * @return $this
     */
    public function setTo($to)
    {
    }
    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
    }
    /**
     * Get headers.
     *
     * @return string
     */
    public function getHeaders()
    {
    }
    /**
     * Get message ID.
     *
     * @return string
     */
    public function getMessageId()
    {
    }
    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
    }
    /**
     * Get to.
     *
     * @return string
     */
    public function getTo()
    {
    }
    /**
     * Get additional parameters.
     *
     * @return mixed
     */
    public function getAdditionalParameters()
    {
    }
    /**
     * Get context instance.
     *
     * @return Context|null
     */
    public function getContext()
    {
    }
    /**
     * Dump email data.
     *
     * @return string
     */
    public function dump()
    {
    }
    /**
     * Return true if input string is in 8bit charset.
     *
     * @param string $inputString Input string.
     * @return bool
     */
    public static function is8Bit($inputString)
    {
    }
    /**
     * Encode mime string.
     *
     * @param string $text Text string.
     * @param string $charset Charset.
     * @return string
     */
    public static function encodeMimeString($text, $charset)
    {
    }
    /**
     * Encode subject.
     *
     * @param string $text Text string.
     * @param string $charset Charset.
     * @return string
     */
    public static function encodeSubject($text, $charset)
    {
    }
    /**
     * Encode header From.
     *
     * @param string $text Text string.
     * @param string $charset Charset.
     * @return string
     */
    public static function encodeHeaderFrom($text, $charset)
    {
    }
    /**
     * Get symbol of mail End-Of-Line.
     *
     * @return string
     */
    public static function getMailEol()
    {
    }
    /**
     * @param $matches
     * @return string
     * @throws \Bitrix\Main\IO\FileNotFoundException
     */
    protected function getReplacedImageCid($matches)
    {
    }
    /**
     * @param $matches
     * @return string
     */
    protected function getReplacedImageSrc($matches)
    {
    }
    /**
     * Replace images.
     * All src of images in html will be added by protocol and domain.
     *
     * @param string $text Html text.
     * @return string
     */
    public function replaceImages($text)
    {
    }
    /**
     * @param $html
     * @return string
     */
    private function trackRead($html)
    {
    }
    /**
     * Replace href attribute in links.
     * All href of links in html will be added by protocol and domain.
     *
     * @param string $text Text.
     * @return mixed
     */
    public function replaceHrefs($text)
    {
    }
    /**
     * Track click.
     * All href of links in html will be wrapped by tracking url for click-detecting.
     *
     * @param array $matches Result of preg_match call.
     * @return string
     */
    public function trackClick($matches)
    {
    }
    /**
     * @param $type
     * @return string
     */
    protected function imageTypeToMimeType($type)
    {
    }
    protected function addMessageIdToBody($body, $isHtml, $messageId)
    {
    }
    protected function convertBodyHtmlToText($body)
    {
    }
    /**
     * Filter header emails by blacklist.
     *
     * @param array &$headers Headers.
     * return void
     */
    protected function filterHeaderEmails(array &$headers)
    {
    }
}