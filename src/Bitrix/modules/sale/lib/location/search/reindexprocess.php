<?php

namespace Bitrix\Sale\Location\Search;

final class ReindexProcess extends \Bitrix\Sale\Location\Util\Process
{
    const DEBUG_MODE = true;
    protected $sessionKey = 'location_reindex';
    protected $wordInstance = null;
    protected $chainInstance = null;
    public function __construct($options)
    {
    }
    public function onAfterPerformIteration()
    {
    }
    /////////////////////////////////////
    // STAGES
    protected function stageCleanup()
    {
    }
    ///////////////////////////////////////////////
    protected function stageCreateDictionaryBefore()
    {
    }
    protected function stageCreateDictionary()
    {
    }
    protected function stageCreateDictionaryAfter()
    {
    }
    protected function getSubpercentForStageCreateDictionary()
    {
    }
    ///////////////////////////////////////////////
    protected function stageResortDictionaryBefore()
    {
    }
    protected function stageResortDictionary()
    {
    }
    protected function stageResortDictionaryAfter()
    {
    }
    protected function getSubpercentForStageResortDictionary()
    {
    }
    ///////////////////////////////////////////////
    protected function stageCreateSearchIndexBefore()
    {
    }
    protected function stageCreateSearchIndex()
    {
    }
    protected function stageCreateSearchIndexAfter()
    {
    }
    protected function getSubpercentForStageCreateSearchIndex()
    {
    }
    ///////////////////////////////////////////////
    protected function stageCreateSite2LocationIndex()
    {
    }
    protected function getSubpercentForCreateSite2LocationIndex()
    {
    }
    protected function stageRestoreDBIndexes()
    {
    }
    protected function getSubpercentForRestoreDBIndexes()
    {
    }
}