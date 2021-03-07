<?php

class CIMHistory
{
    private $user_id = 0;
    private $bHideLink = \false;
    function __construct($user_id = \false, $arParams = array())
    {
    }
    function SearchMessage($searchText, $toUserId, $fromUserId = \false, $bTimeZone = \true)
    {
    }
    function SearchDateMessage($searchDate, $toUserId, $fromUserId = \false, $bTimeZone = \true)
    {
    }
    function GetMoreMessage($pageId, $toUserId, $fromUserId = \false, $bTimeZone = \true)
    {
    }
    function RemoveMessage($messageId)
    {
    }
    function RemoveAllMessage($userId)
    {
    }
    /* CHAT */
    function HideAllChatMessage($chatId)
    {
    }
    function SearchChatMessage($searchText, $chatId, $bTimeZone = \true)
    {
    }
    function SearchDateChatMessage($searchDate, $chatId, $bTimeZone = \true)
    {
    }
    /**
     * @param $pageId
     * @param $chatId
     * @param bool $bTimeZone
     * @return array
     */
    function GetMoreChatMessage($pageId, $chatId, $bTimeZone = \true)
    {
    }
    /* COMMON */
    public function GetMessagesByDate($chatId, $date, $messageStart = 0, $timezone = \true)
    {
    }
    public function GetRelatedMessages($messageId, $previous = 10, $next = 10, $timezone = \true, $textParser = \true)
    {
    }
    private function GetPreviousMessages($messageId, $chatId = \null, $dateCreate = \null, $limit = 10, $timezone = \true)
    {
    }
    private function GetNextMessages($messageId, $chatId = \null, $dateCreate = \null, $limit = 10, $timezone = \true)
    {
    }
    private function checkFullText($searchText)
    {
    }
}