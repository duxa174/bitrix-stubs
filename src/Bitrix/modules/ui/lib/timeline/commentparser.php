<?php

namespace Bitrix\UI\Timeline;

class CommentParser
{
    protected $parser;
    protected $userFields;
    public function __construct(array $userFields = [])
    {
    }
    public function setUserFields(array $userFields) : \Bitrix\UI\Timeline\CommentParser
    {
    }
    public function getHtml(string $text) : string
    {
    }
    public function getText(string $text) : string
    {
    }
    public function getMentionedUserIds(string $text) : array
    {
    }
    protected function getParser() : \CTextParser
    {
    }
}