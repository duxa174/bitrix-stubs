<?php

namespace Bitrix\Main\Mail;

class EventMessageCompiler
{
    protected $mailTo;
    protected $mailHeaders;
    protected $mailSubject;
    protected $mailBody;
    protected $mailCharset;
    protected $mailId;
    protected $mailContentType;
    protected $mailAttachment;
    protected $eventMessageId = null;
    protected $event = array();
    protected $eventMessageFields;
    protected $eventFields;
    protected $siteFields;
    protected $siteId;
    protected $languageId;
    protected $eventSiteFields;
    /*
    *  'MESSAGE' = array(
    			'BODY_TYPE' => 'html',
    			'SUBJECT' => '',
    			'EMAIL_TO' => '',
    			'EMAIL_FROM' => '',
    			'MESSAGE' => '',
    			'ID' => '',
    			'DATE_INSERT' => '',
    			'SITE_TEMPLATE_ID' => '',
    			'BCC' => '',
    			'CC' => '',
    			'REPLY_TO' => '',
    			'IN_REPLY_TO' => '',
    			'PRIORITY' => '',
    			'ADDITIONAL_FIELD' => array(),
    			'FILE' => array(),
    		)
    */
    public function __construct(array $arMessageParams)
    {
    }
    /**
     * @return EventMessageCompiler
     */
    public static function createInstance(array $arMessageParams)
    {
    }
    /**
     * @param
     */
    public function compile()
    {
    }
    /**
     * @param
     */
    protected function setMailBody()
    {
    }
    /**
     * @return mixed
     */
    public function getMailBody()
    {
    }
    /**
     * @param mixed $mailCharset
     */
    protected function setMailCharset($mailCharset)
    {
    }
    /**
     * @return mixed
     */
    public function getMailCharset()
    {
    }
    /**
     * @param
     */
    protected function setMailContentType()
    {
    }
    /**
     * @return mixed
     */
    public function getMailContentType()
    {
    }
    /**
     * @param mixed $mailAttachment
     */
    protected function setMailAttachment()
    {
    }
    /**
     * @return mixed
     */
    public function getMailAttachment()
    {
    }
    /**
     * @param
     */
    protected function setMailHeaders()
    {
    }
    /**
     * @return mixed
     */
    public function getMailHeaders()
    {
    }
    /**
     * @param
     */
    protected function setMailId()
    {
    }
    /**
     * @return mixed
     */
    public function getMailId()
    {
    }
    /**
     * @param
     */
    protected function setMailSubject()
    {
    }
    /**
     * @return mixed
     */
    public function getMailSubject()
    {
    }
    /**
     * @param
     */
    protected function setMailTo()
    {
    }
    /**
     * @return mixed
     */
    public function getMailTo()
    {
    }
    /**
     * @param $str
     * @param $ar
     * @param bool $bNewLineToBreak
     * @return mixed
     */
    protected function replaceTemplate($str, $ar, $bNewLineToBreak = false)
    {
    }
    /**
     * @param array|string $sites Sites.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    protected function getSiteFieldsArray($sites)
    {
    }
    /**
     * @param string|array
     * @return string
     */
    protected static function getFieldFlatValue($value)
    {
    }
    /**
     * @return string
     */
    public function toString()
    {
    }
}