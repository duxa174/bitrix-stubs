<?php

namespace Bitrix\Vote\Attachment;

final class Manager
{
    /**
     * @param int $id Attachment ID.
     * @return Attach
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function loadFromAttachId($id)
    {
    }
    /**
     * @param array $attach Data array from DB.
     * @param $id Vote ID.
     * @return array|Attach
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function loadFromVoteId(array $attach, $id)
    {
    }
    /**
    * @param array $attach Data array from DB.
    * @param array $voteParams Array(
    	"TITLE" => "ABC...",
    	"QUESTIONS" => array(
    	1 => array(
    	"ID" => 0,
    	"QUESTION" => "Question text",
    	"QUESTION_TYPE" => "text"||"html",
    	"ANSWERS" => array(
    	array(
    	"ID" => 0,
    	"MESSAGE" => "Answer text",
    	"MESSAGE_TYPE" => "text"||"html",
    	"FIELD_TYPE" => 0||1||2||3||4||
    	)
    	)
    	);.
    * @return Attach
    */
    public static function loadEmptyAttach(array $attach, array $voteParams)
    {
    }
    /**
     * @param array $filter Array in terms ORM.
     * @return Attach[]
     * @throws ArgumentNullException
     * @throws ArgumentTypeException
     */
    public static function loadFromEntity(array $filter)
    {
    }
    /**
     * Deletes attach by Filter.
     * @param array $filter Array in terms of ORM.
     * @return void
     */
    public static function detachByFilter(array $filter)
    {
    }
}