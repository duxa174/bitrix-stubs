<?php

namespace Bitrix\Bizproc\Copy\Implement;

class WorkflowTemplate
{
    const WORKFLOW_TEMPLATE_COPY_ERROR = "WORKFLOW_TEMPLATE_COPY_ERROR";
    private $targetDocumentType = [];
    private $mapStatusIdsCopiedDocument = [];
    private $result;
    public function __construct($targetDocumentType = [], $mapStatusIdsCopiedDocument = [])
    {
    }
    public function getFields($workflowTemplateId)
    {
    }
    public function prepareFieldsToCopy(array $fields)
    {
    }
    public function add(array $fields)
    {
    }
}