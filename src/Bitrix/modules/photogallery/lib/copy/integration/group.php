<?php

namespace Bitrix\Photogallery\Copy\Integration;

class Group implements \Bitrix\Socialnetwork\Copy\Integration\Feature
{
    const MODULE_ID = "photogallery";
    const QUEUE_OPTION = "PhotogalleryGroupQueue";
    const CHECKER_OPTION = "PhotogalleryGroupChecker_";
    const STEPPER_OPTION = "PhotogalleryGroupStepper_";
    const STEPPER_CLASS = \Bitrix\Photogallery\Copy\Integration\GroupStepper::class;
    const ERROR_OPTION = "PhotogalleryGroupError_";
    private $executiveUserId;
    private $features = [];
    public function __construct($executiveUserId = 0, array $features = [])
    {
    }
    public function copy($groupId, $copiedGroupId)
    {
    }
    private function getParentSectionId($groupId, $sectionName)
    {
    }
    private function getSectionName($groupId)
    {
    }
    private function getNewSectionName($copiedGroupId)
    {
    }
    private function addToQueue(int $copiedGroupId)
    {
    }
}