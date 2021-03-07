<?php

class SenderSegmentEditComponent extends \Bitrix\Sender\Internals\CommonSenderComponent
{
    /**
     * @var Entity\Segment
     */
    private $entitySegment;
    protected function initParams()
    {
    }
    protected function preparePost()
    {
    }
    protected function prepareResult()
    {
    }
    /**
     * @return void
     */
    protected function prepareExistedContacts()
    {
    }
    /**
     * @param Connector\Base[] $connectors Connectors.
     * @param array $filters Filters.
     * @return void
     */
    protected function prepareExistedConnectors($connectors, array &$filters)
    {
    }
    /**
     * @param Connector\Base[] $connectors Connectors.
     * @return void
     */
    protected function prepareAvailableConnectors($connectors)
    {
    }
    private function checkConnectorAccessDenied($connector)
    {
    }
    protected function prepareConnectorData(\Bitrix\Sender\Connector\Base $connector, $calcCount = \true)
    {
    }
    private function filterAbleDealCategories(&$filters)
    {
    }
    protected function prepareFieldValues(array $fieldValues, array $fields)
    {
    }
    protected function printErrors()
    {
    }
    public function executeComponent()
    {
    }
    public function getEditAction()
    {
    }
    public function getViewAction()
    {
    }
}