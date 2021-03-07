<?php

class CAllRatings
{
    const REACTION_DEFAULT = 'like';
    const REACTION_KISS = 'kiss';
    const REACTION_LAUGH = 'laugh';
    const REACTION_ANGRY = 'angry';
    const REACTION_WONDER = 'wonder';
    const REACTION_CRY = 'cry';
    // get specified rating record
    public static function GetByID($ID)
    {
    }
    public static function GetArrayByID($ID)
    {
    }
    // get rating record list
    public static function GetList($arSort = array(), $arFilter = array())
    {
    }
    public static function GetRatingValueInfo($ratingId)
    {
    }
    //Addition rating
    public static function Add($arFields)
    {
    }
    //Update rating
    public static function Update($ID, $arFields)
    {
    }
    // delete rating
    public static function Delete($ID)
    {
    }
    // start calculation rating-component
    public static function Calculate($ID, $bForceRecalc = \false)
    {
    }
    // queries modules and get all the available objects
    public static function GetRatingObjects()
    {
    }
    // queries modules and get all the available entity types
    public static function GetRatingEntityTypes($objectType = \null)
    {
    }
    // queries modules and assemble an array of settings
    public static function GetRatingConfigs($objectType = \null, $withRatingType = \true)
    {
    }
    public static function GetRatingVoteResult($entityTypeId, $entityId, $user_id = \false)
    {
    }
    public static function GetRatingVoteResultCache($entityTypeId, $entityId, $user_id = \false)
    {
    }
    public static function GetRatingResult($ID, $entityId)
    {
    }
    public static function AddRatingVote($arParam)
    {
    }
    public static function ChangeRatingVote($arParam)
    {
    }
    public static function CancelRatingVote($arParam)
    {
    }
    public static function UpdateRatingUserBonus($arParam)
    {
    }
    public static function GetRatingUserProp($ratingId, $entityId)
    {
    }
    public static function GetRatingUserPropEx($ratingId, $entityId)
    {
    }
    public static function GetAuthorityRating()
    {
    }
    public static function GetWeightList($arSort = array(), $arFilter = array())
    {
    }
    public static function SetWeight($arConfigs)
    {
    }
    public static function SetVoteGroup($arGroupId, $type)
    {
    }
    public static function GetVoteGroup($type = '')
    {
    }
    public static function GetVoteGroupEx($type = '')
    {
    }
    public static function ClearData()
    {
    }
    public static function OnUserDelete($ID)
    {
    }
    public static function OnAfterUserRegister($arFields)
    {
    }
    public static function __SortWeight($a, $b)
    {
    }
    // check only general field
    public static function __CheckFields($arFields)
    {
    }
    // creates a configuration record for each item rating
    public static function __AddComponents($ID, $arFields)
    {
    }
    public static function __UpdateComponents($ID, $arFields)
    {
    }
    public static function err_mess()
    {
    }
    public static function getRatingVoteReaction($arParam)
    {
    }
    public static function getRatingVoteList($arParam)
    {
    }
    public static function getUserWeight($userId = 0)
    {
    }
    public static function getUserData($userId = 0, $value = 0)
    {
    }
    public static function getEntityRatingData($params = array())
    {
    }
    public static function deleteRatingVoting(array $params = [])
    {
    }
}