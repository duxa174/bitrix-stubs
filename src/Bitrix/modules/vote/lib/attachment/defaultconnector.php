<?php

namespace Bitrix\Vote\Attachment;

class DefaultConnector extends \Bitrix\Vote\Attachment\Connector implements \Bitrix\Vote\Attachment\Storable
{
    private $storage = null;
    private $canRead = array();
    private $canEdit = array();
    /**
     * @param integer $userId UserID.
     * @return bool
     */
    public function canRead($userId)
    {
    }
    /**
     * @param integer $userId UserID.
     * @return bool
     */
    public function canEdit($userId)
    {
    }
    /**
     * @param Channel $channel Group of votes.
     * @return $this
     */
    public function setStorage(\Bitrix\Vote\Channel $channel)
    {
    }
    /**
     * @return Channel|null
     */
    public function getStorage()
    {
    }
    /**
     * @return bool
     */
    public function isStorable()
    {
    }
}