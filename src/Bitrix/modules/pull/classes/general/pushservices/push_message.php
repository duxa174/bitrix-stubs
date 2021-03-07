<?php

abstract class CPushMessage
{
    protected $deviceTokens = array();
    protected $text;
    protected $category;
    protected $badge;
    protected $sound = "default";
    protected $expiryValue = 7200;
    protected $customIdentifier;
    protected $title;
    public $customProperties = array();
    public function addRecipient($sDeviceToken)
    {
    }
    public function getRecipient($nRecipient = 0)
    {
    }
    public function getRecipients()
    {
    }
    public function setText($sText)
    {
    }
    public function getText()
    {
    }
    public function setTitle($sTitle)
    {
    }
    public function getTitle()
    {
    }
    public function setBadge($nBadge)
    {
    }
    public function getBadge()
    {
    }
    public function setSound($sSound = 'default')
    {
    }
    public function getSound()
    {
    }
    public function setCustomProperty($sName, $mValue)
    {
    }
    public function getCustomProperty($sName)
    {
    }
    public function setExpiry($nExpiryValue)
    {
    }
    public function getExpiry()
    {
    }
    public function setCustomIdentifier($mCustomIdentifier)
    {
    }
    public function getCustomIdentifier()
    {
    }
    abstract function getBatch();
    /**
     * @return mixed
     */
    public function getCategory()
    {
    }
    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
    }
    public function setFromArray(array $messageArray)
    {
    }
}