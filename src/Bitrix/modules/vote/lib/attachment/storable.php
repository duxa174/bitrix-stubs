<?php

namespace Bitrix\Vote\Attachment;

interface Storable
{
    /**
     * @param Channel $channel Group of votes.
     * @return $this
     */
    public function setStorage(\Bitrix\Vote\Channel $channel);
    /**
     * @return Channel|null
     */
    public function getStorage();
    /**
     * @return boolean
     */
    public function isStorable();
}