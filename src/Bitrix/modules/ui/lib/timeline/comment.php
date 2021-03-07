<?php

namespace Bitrix\UI\Timeline;

class Comment
{
    protected $filesUserFieldEntityId;
    protected $filesUserFieldName;
    public function __construct(string $filesUserFieldEntityId, string $filesUserFieldName)
    {
    }
    public function getVisualEditorResponse(string $name, int $id = 0, string $text = '') : \Bitrix\Main\Engine\Response\Component
    {
    }
    public function saveFiles(int $id, array $files) : bool
    {
    }
    public function getFileUserFields(int $id = 0) : array
    {
    }
    public function getFilesContentResponse(int $id) : ?\Bitrix\Main\Engine\Response\Component
    {
    }
    public function sendMentions(int $id, int $fromUserId, string $text, string $message, array $previouslyMentionedUserIds = []) : array
    {
    }
    public function getUserGenderSuffix(int $userId) : string
    {
    }
    protected function getUserFieldManager() : ?\CUserTypeManager
    {
    }
}