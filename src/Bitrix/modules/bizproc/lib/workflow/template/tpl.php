<?php

namespace Bitrix\Bizproc\Workflow\Template;

class Tpl extends \Bitrix\Bizproc\Workflow\Template\Entity\EO_WorkflowTemplate
{
    protected $tpl;
    public function getRootActivity()
    {
    }
    public function findActivity($activityName)
    {
    }
    public function getDocumentComplexType()
    {
    }
    public function getActivities()
    {
    }
    /**
     * @return Collection\Usages
     * @throws \CBPArgumentOutOfRangeException
     */
    public function collectUsages()
    {
    }
    public function findUsedSourceKeys($sourceType)
    {
    }
    private function findActivityUsagesRecursive(\CBPActivity $activity, \Bitrix\Bizproc\Workflow\Template\Collection\Usages $usages)
    {
    }
    public function getUsedActivityTypes()
    {
    }
    private function getActivityTypes(array $activities)
    {
    }
}