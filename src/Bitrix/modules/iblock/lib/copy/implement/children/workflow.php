<?php

namespace Bitrix\Iblock\Copy\Implement\Children;

class Workflow implements \Bitrix\Iblock\Copy\Implement\Children\Child
{
    protected $iblockTypeId;
    private $result;
    public function __construct($iblockTypeId)
    {
    }
    /**
     * Copies iblock child.
     * @param int $iblockId Iblock id.
     * @param int $copiedIblockId Copied iblock id.
     * @return Result
     */
    public function copy($iblockId, $copiedIblockId) : \Bitrix\Main\Result
    {
    }
    protected function getDocumentType(int $iblockId) : array
    {
    }
    private function getImplementer(array $documentType)
    {
    }
    private function getCopier(\Bitrix\Bizproc\Copy\Implement\WorkflowTemplate $implementer)
    {
    }
    private function getContainerCollection(array $templateIdsToCopy)
    {
    }
}