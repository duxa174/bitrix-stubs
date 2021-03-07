<?php

namespace Bitrix\Vote\Attachment;

class Controller extends \Bitrix\Vote\Base\Controller
{
    /**
     * @var $attach \Bitrix\Vote\Attach
     */
    var $attach;
    protected function listActions()
    {
    }
    protected function init()
    {
    }
    protected function processActionVote()
    {
    }
    protected function processActionGetBallot()
    {
    }
    protected function processActionStop()
    {
    }
    protected function processActionResume()
    {
    }
    /**
     * Returns array of users voted for this poll.
     * @param array $cacheParams Array(voteId => , answerId => ).
     * @param array $pageParams Array(iNumPage => , nPageSize => , bShowAll => ).
     * @return array
     */
    protected static function getVoted(array $cacheParams, array $pageParams)
    {
    }
    protected function processActionGetVoted()
    {
    }
    protected function processActionGetMobileVoted()
    {
    }
    /**
     * Exports results in xls.
     * @return void
     * @throws AccessDeniedException
     */
    protected function processActionExportXls()
    {
    }
    /**
     * @param integer $voteId Vote ID.
     * @return void
     */
    public function clearCache($voteId)
    {
    }
}